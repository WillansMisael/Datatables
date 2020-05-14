<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            //cada fila represanta row
            'name' => $row[0],//a
            'email' => $row[1],//b
            'password' => bcrypt($row[2])//c -- con bcrypt encriptamos
        ]);
    }
}
