<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\{
    MenuModel,
    RoleModel,
    RoleMenuModel
};

class RoleMenu extends BaseController
{
    protected  $__role_model,$__menu_model,$__menu_has_role;

    public function __construct() {
        $this->__role_model    = new RoleModel();
        $this->__menu_model    = new MenuModel();
        $this->__menu_has_role = new RoleMenuModel();
    }

    public function index()
    {
        return $this->checkRole(function() {
            $roles = $this->__role_model->findAll();
            $menus = $this->__menu_model->findAll();

            $roleAccess = [];
            foreach ($roles as $role) {
                $menuAccess = $this->__menu_has_role->getMenusByRole($role['id']);
                $roleAccess[$role['id']] = array_column($menuAccess, 'id');
            }
            return view('role_access_view', compact('roles', 'menus', 'roleAccess'));
        });

    }

    public function update()
    {
        return $this->checkRole(function () {
            $data = $this->request->getPost();
            unset($data['csrf_test_name']);

            foreach ($data as $roleName => $arrayMenuId) {
                $role      = $this->__role_model->where('nama', $roleName)->first();

                if ($role) {
                    $roleId = $role['id'];

                    foreach ($arrayMenuId as $menuId) {
                        $isExists  = $this->__menu_has_role->where('role_id', $roleId)->where('menu_id', $menuId)->get()->getRow();

                        if (!$isExists) {
                            $this->__menu_has_role->insert([
                                'role_id' => $roleId,
                                'menu_id' => $menuId
                            ]);
                        }
                    }

                    $this->__menu_has_role->where('role_id', $roleId)->whereNotIn('menu_id', $arrayMenuId)->delete();
                }
            }

            session()->setFlashdata('success', 'Berhasil menyimpan perubahan data role access');
            return redirect()->to('role-access');
        });

    }

    function checkRole(callable $callback)
    {
        $roleId       = session()->get('role_id');
        $superadmin   = $this->__role_model->where('nama', 'superadmin')->first();
        $superadminId = $superadmin ? $superadmin['id'] : 0;

        if ($roleId != $superadminId) {
            session()->setFlashdata('notice', 'Anda tidak memiliki akses ke halaman ini.');
            return redirect()->to('dashboard');
        }

        return $callback();
    }
}
