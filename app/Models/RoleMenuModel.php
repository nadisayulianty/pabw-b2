<?php

namespace App\Models;

use CodeIgniter\Model;

class RoleMenuModel extends Model
{
    protected $table = "role_menus";
    protected $primaryKey = "id";
    protected $returnType = "object";
    protected $allowedFields = ['role_id', 'menu_id'];

    public function getMenusByRole($roleId)
    {
        return $this->db->table($this->table)
                        ->select('menus.id, menus.nama, menus.route')
                        ->join('menus', 'menus.id = role_menus.menu_id')
                        ->where('role_menus.role_id', $roleId)
                        ->get()
                        ->getResultArray();
    }
}
