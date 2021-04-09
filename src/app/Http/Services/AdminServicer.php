<?php

namespace App\Http\Services;

use App\Models\User;

class AdminService
{
    public function getAdmin() 
    {
        $admin = User::where('role', 'admin')->first();
        return $admin;
    }
}