<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getUserDomicilios(){
        $sql = "SELECT *, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), users.fecha_nacimiento)), '%Y') + 0 AS age FROM users, user_domicilios WHERE users.id = user_domicilios.user_id";
        $users = DB::select($sql);
        return response()->json( $users);
    }
}
