<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RoleModel;
use App\Models\RolePermissionModel;

class RolePermission extends BaseController
{
    public function index()
    {
        $permissionModel = new RolePermissionModel();
        $permissions = $permissionModel->findAll();
        foreach ($permissions as &$permission) {
            $roleModel = new RoleModel();
            $role = $roleModel->find($permission['role_id']);
            $permission['role_name'] = $role['nama'] ?? 'Unknown';
        }

        return view('role_permissions_view', compact('permissions'));
    }

    public function update()
    {
        $request = $this->request->getPost();
        $roleModel = new RoleModel();
        $roles = $roleModel->findAll();

        foreach ($roles as $role) {
            $permissionModel = new RolePermissionModel();
            if (isset($request['role_'.$role['id']])) {
                $role_permission = $request['role_'.$role['id']];
                $data = [
                    'can_create' => in_array('create', $role_permission),
                    'can_read'   => in_array('read', $role_permission),
                    'can_update' => in_array('update', $role_permission),
                    'can_delete' => in_array('delete', $role_permission),
                ];
            } else {
                $data = [
                    'can_create' => false,
                    'can_read'   => false,
                    'can_update' => false,
                    'can_delete' => false,
                ];
            }

            $existingPermission = $permissionModel->where('role_id', $role['id'])->first();
            if ($existingPermission) {
                $permissionModel->update($existingPermission['id'], $data);
            }
        }

        session()->setFlashdata('success', 'Berhasil menyimpan perubahan data role permissions');
        return redirect()->to('role-permissions');
    }
}
