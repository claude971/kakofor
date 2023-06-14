<?php

namespace App\Models;

use CodeIgniter\Model;

class ApprenantModel extends Model
{
    protected $table = 'apprenant';

    public function getApprenant($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }

        return $this->where(['id_apprenant' => $id])->first();
    }
}
