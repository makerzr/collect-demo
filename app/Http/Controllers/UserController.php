<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmail;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id','>',2)->get();
        foreach ($users as $user){
            $this->dispatch(new SendEmail($user));
        }
        return 'done';
    }
}
