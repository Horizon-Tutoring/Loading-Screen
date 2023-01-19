<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Subscribe extends Controller
{
    public function update($id)
    {
        $user = User::find($id);
        $user->marketing = 0;
        $user->save();

        
    }
}
