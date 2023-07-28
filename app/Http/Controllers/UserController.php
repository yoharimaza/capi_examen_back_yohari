<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function getUserDomicilios(){
        $sql = 'SELECT * FROM users, user_domicilios WHERE users.id = user_domicilios.user_id';
        $users = DB::select($sql);
        return response()->json( $users);
    }
}
