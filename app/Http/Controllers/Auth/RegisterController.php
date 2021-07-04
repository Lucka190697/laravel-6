<?php

namespace App\Http\Controllers\Auth;

use App\Enums\UserRolesEnum;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/admin/farm/create';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'thumbnail' => 'default.jpg',
            'password' => Hash::make($data['password']),
            'farm_id' => null,
        ]);

//        $role = Role::create(['name' => UserRolesEnum::ADMIN]);
//        $permission = Permission::create(['name' => 'users']);

        if (!$user->hasRole(UserRolesEnum::ADMIN)) {
            $user->assignRole(UserRolesEnum::ADMIN);
        }

        return $user;
    }
}
/*
 * */