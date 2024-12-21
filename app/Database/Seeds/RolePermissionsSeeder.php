<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolePermissionsSeeder extends Seeder
{
    public function run()
    {
        $roles = $this->db->table('roles')->get()->getResult();
        foreach ($roles as $role) {
            $existingPermission = $this->db->table('role_permissions')->where('role_id', $role->id)->get()->getRow();
        
            if (!$existingPermission) {
                $this->db->table('role_permissions')->insert([
                    'role_id' => $role->id
                ]);
            }
        }
    }
}
