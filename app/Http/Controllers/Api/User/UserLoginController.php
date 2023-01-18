<?php

namespace App\Http\Controllers\Api\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
{
    public function store(Request $request)
    {
        $validator = $this->validateEmail();
        if ($validator->fails()){
            return $this->errorResponse($validator->messages(), 422);
        }

        $user = User::where('email', $request->email)->firstOrFail();
        if(Hash::check($request->password,$user->password)){
            return $this->successResponse($user);
        }
            return $this->errorResponse('Password Wrong',401);
    }

    public function validateEmail(){
        return Validator::make(request()->all(), [
            'email' => 'required|string|email|max:255',
        ]);
    }
}
