<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function allUsers()
    {
        $users = User::all();

        if ($users->count() > 0) {
            return response()->json(
                $users
            );
        } else {
            return response()->json([
                'status' => 404,
                'tasks' => 'No se encontraron registros'
            ], 404);
        }
    }

    public function searchById($id)
    {

        $users = User::select('id', 'name')->where('id', $id)->get();
        return response()->json(
            $users
        );
    }
}