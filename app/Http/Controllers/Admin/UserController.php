<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRolesEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\User as UserResource;
use App\Models\Farm;
use App\Models\User;
use App\Repositories\Criteria\Common\Where;
use App\Repositories\FarmRepository;
use App\Repositories\UserRepository;
use App\Support\PaginationBuilder;
use Spatie\Permission\Models\Role;
use App\Repositories\Criteria\Common\OrderBy;
use App\Repositories\Criteria\User\UserRole;

class UserController extends Controller
{
    protected $repository;
    protected $resource;
    private $perPage = 2;

    public function __construct()
    {
        $this->model = new User();
        $this->repository = new UserRepository();
        $this->farm = new Farm();
    }

    public function index()
    {
        $title = 'User Management';
        return view('users.index', compact('title'));
    }

    public function create()
    {
        $title = 'Create new user';
        $description = 'Cadastrar novo usuário na sua fazenda';
        $roles = Role::pluck('name','name')->all();
        return view('users.create', compact('title', 'description', 'roles'));
    }

    public function store(UserRequest $request, UserRepository $repository)
    {
        $data = $request->validated();
        $data = $repository->createHash($data);
        $data = $repository->createThumbnail($data);
        $user = current_user()->farm->users()->create($data);


        $message = _m('user.success.create');
        $user->assignRole($request->input('roles'));
        return $this->chooseReturn('success', $message, 'admin.user.index');
    }

    public function edit($id)
    {
        $title = 'Create new user';
        $description = 'Cadastrar novo usuário na sua fazenda';
        $roles = Role::pluck('name','name')->all();

        $user = $this->repository->find($id);
        $userRole = $user->roles->pluck('name','name')->all();
        return view('users.edit', compact('title', 'description', 'user', 'userRole', 'roles'));
    }

    public function update(UserRequest $request, $id)
    {
        $current = User::find($id);
        $data = $this->repository->passwordVerification($request, $current);
        $data = $this->repository->vefirfyThumbnail($data, $current);
        $user = $this->repository->update($id, $data);

        $message = _m('user.success.update');
        $user->assignRole($request->input('roles'));
        return $this->chooseReturn('success', $message, 'admin.user.index');
    }

    public function show(User $user)
    {
        $title = 'Perfil de ' . $user->name;
        $description = 'Detalhes da conta';
        return view('users.show', compact('user','title', 'description'));
    }

    public function destroy(User $user)
    {
        try {
            (new UserRepository)->delete($user);
            return $this->chooseReturn('success', _m('user.success.destroy'));
        } catch (\Exception $exception) {
            report($exception);
            return $this->chooseReturn('error', _m('user.error.destroy'));
        }
    }

    public function pagination()
    {
        $pagination = new PaginationBuilder();
        return $pagination
            ->repository($this->repository)
            ->criteria([  new Where('farm_id', current_user()->farm_id)])
            ->resource(UserResource::class);
    }
}
