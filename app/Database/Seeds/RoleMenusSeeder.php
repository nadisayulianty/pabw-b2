<?php

namespace App\Database\Seeds;

use App\Models\RoleMenuModel;
use CodeIgniter\Database\Seeder;

class RoleMenusSeeder extends Seeder
{
    public function run()
    {
        $roles = ['manajer', 'staff', 'superadmin'];
        $menus = [
            ['nama' => 'Tabel 3.b.7-1', 'route' => 'table/table3b71'], 
            ['nama' => 'Tabel 3.b.7-2', 'route' => 'table/table3b72'], 
            ['nama' => 'Tabel 3.b.7-3', 'route' => 'table/table3b73'], 
            ['nama' => 'Tabel 3.b.7-4', 'route' => 'table/table3b74'], 
            ['nama' => 'Tabel 4', 'route' => 'table/table4'], 
            ['nama' => 'Tabel 5.a', 'route' => 'table/table5a'], 
            ['nama' => 'Tabel 5.b', 'route' => 'table/table5b'], 
            ['nama' => 'Tabel 5.c', 'route' => 'table/table5c']
        ];

        // insert roles
        foreach ($roles as $role) {
            $existingRole = $this->db->table('roles')->where('nama', $role)->get()->getRow();
        
            if (!$existingRole) {
                $this->db->table('roles')->insert([
                    'nama' => $role
                ]);
            }
        }
        
        // insert menus
        foreach ($menus as $menu) {
            $existingMenu = $this->db->table('menus')->where('route', $menu['route'])->get()->getRow();
        
            if (!$existingMenu) {
                $this->db->table('menus')->insert($menu);
            }
        }
        
        // insert role_menus
        foreach ($roles as $role) {
            $roleId = $this->db->table('roles')->where('nama', $role)->get()->getRow()->id;
        
            foreach ($menus as $menu) {
                $menuId = $this->db->table('menus')->where('route', $menu['route'])->get()->getRow()->id;
                $existingRoleMenu = $this->db->table('role_menus')
                                             ->where('role_id', $roleId)
                                             ->where('menu_id', $menuId)
                                             ->get()
                                             ->getRow();
                                             
                if (!$existingRoleMenu) {
                    $this->db->table('role_menus')->insert([
                        'role_id' => $roleId,
                        'menu_id' => $menuId
                    ]);
                }
            }
        }
    }
}
