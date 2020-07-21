<?php

namespace App\Controllers;

use App\Models\M_Les;
use App\Models\M_user;

class Api extends BaseController
{
    public function login()
    {
        $model = new M_user();
        $session = session();

        // form is filled
        if ($this->validate([
            'username' => 'required',
            'password' => 'required'
        ])) {

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $user = $model->where('username', $username)->first();

            // make sure user exist on database
            if (!is_null($user)) {
                // check password
                if ($user['password'] == $password) {
                    $respon =[
                        'status' => 'success',
                        'level' => $user['level'],
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'nama' => $user['nama'],
                    ];
                    echo json_encode($respon);
                    return;
                }
            }
        }

        // if error login
        $data = [
            'status' => 'failed'    
        ];
        echo json_encode($data);
        return;
    }
}