<?php

namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model
{
    private function generateCode($identifire) {
        return 'ID-' . $identifire .'-'.strtoupper(bin2hex(random_bytes(5)));
    }
}
