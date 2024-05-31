<?php

namespace App\Http\Controllers\Api\v1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function login(Request $request){
        
    }
    public function test(){
        return 'hello from auth';
    }
}
