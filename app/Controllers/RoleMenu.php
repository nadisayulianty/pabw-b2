<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MenuModel;
use App\Models\RoleMenuModel;
use App\Models\RoleModel;

class RoleMenu extends BaseController
{
    public function index()
    {
        $redirect = $this->checkRole();
        if ($redirect) return $redirect;

        $roleModel = new RoleModel();
        $roles = $roleModel->findAll();

        $menuModel = new MenuModel();
        $menus = $menuModel->findAll();

        $roleMenuModel = new RoleMenuModel();
        $roleAccess = [];
        foreach ($roles as $role) {
            $menuAccess = $roleMenuModel->getMenusByRole($role['id']);
            $roleAccess[$role['id']] = array_column($menuAccess, 'id');
        }
        return view('role_access_view', compact('roles', 'menus', 'roleAccess'));
    }

    public function update()
    {
        $redirect = $this->checkRole();
        if ($redirect) return $redirect;

        $data = $this->request->getPost();
        unset($data['csrf_test_name']);

        foreach ($data as $roleName => $arrayMenuId) {
            $roleModel = new RoleModel();
            $role = $roleModel->where('nama', $roleName)->first();
            if ($role) {
                $roleId = $role['id'];
                foreach ($arrayMenuId as $menuId) {
                    $roleMenuModel = new RoleMenuModel();
                    $isExists = $roleMenuModel->where('role_id', $roleId)->where('menu_id', $menuId)->get()->getRow();

                    if (!$isExists) {
                        $roleMenuModel->insert([
                            'role_id' => $roleId,
                            'menu_id' => $menuId
                        ]);
                    }
                }

                $roleMenuModel->where('role_id', $roleId)->whereNotIn('menu_id', $arrayMenuId)->delete();
            }
        }

        session()->setFlashdata('success', 'Berhasil menyimpan perubahan data role access');
        return redirect()->to('role-access');
    }

    function checkRole()
    {
        $roleId = session()->get('role_id');
        $roleModel = new RoleModel();
        $superadmin = $roleModel->where('nama', 'superadmin')->first();
        $superadminId = $superadmin ? $superadmin['id'] : 0;

        if ($roleId != $superadminId) {
            session()->setFlashdata('notice', 'Anda tidak memiliki akses ke halaman ini.');
            return redirect()->to('dashboard');
        }
    }
}
