<?php

namespace App\Model;

use App\Database\DB;

class User{

    protected static $table = 'users';

    public static function create(array $data){

        return DB::insert(static::$table, $data);
    } 

    public static function findByEmail($email){

        $mysqli_result = DB::query('SELECT * FROM ' . static::$table . ' WHERE email =%s', $email);

        return $mysqli_result->fetch_object();

    }

    public static function updateLastLogin($id){
        return  DB::query('UPDATE ' . static::$table . ' SET last_login =%s WHERE id = %d', date('Y-m-d H:i:s'), $id);
    }


}

