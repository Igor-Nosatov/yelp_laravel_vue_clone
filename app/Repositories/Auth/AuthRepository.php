<?php

declare(strict_types=1);

namespace App\Repositories\Auth;

use App\Http\Requests\Auth\UserRegisterRequest;
use App\Http\Requests\Auth\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthRepository implements AuthInterface
{
    public function signUp(UserRegisterRequest $request): array
    {
        $user = User::create( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birthday' => \Carbon\Carbon::parse($request->birthday),
            'phone_number' => $request->phone_number,
        ]);

        $token = $user->createToken('apiToken')->plainTextToken;

        return ['user' => $user, 'token' => $token];
    }

    public function login(string $email, string  $password): array|null
    {
        $user = User::where('email', $email)->firstOrFail();
        if (!$user || !Hash::check($password, $user->password)) {
            return null;
        }
        $token = $user->createToken('apiToken')->plainTextToken;

        return ([
            'user' => $user,
            'token' => $token,
        ]);
    }

    public function updateUser($id, UserUpdateRequest $request): User
    {
        $user = User::where('id', $id)->first();
        $user->birthday = $request->birthday;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return $user;
    }

}
