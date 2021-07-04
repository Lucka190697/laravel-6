<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordRequest;
use \App\Http\Requests\ProfileRequests\ProfileRequest;
use App\Http\Requests\ProfileRequests\ThumbnailRequest;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    protected $repository;
    protected $resource;

    public function __construct()
    {
//        $this->model = new User();
        $this->repository = new UserRepository();
    }

    public function edit()
    {
        $title = 'Your Profile';
        $description = 'Mantenha sempre atualizado seu perfil';
        return view('profile.edit', compact('title', 'description'));
    }

    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());

        return back()->withStatus(__('Perfil atualizado com sucesso!'));
    }

    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Senha atualizado com sucesso!'));
    }

    public function thumbnail(ThumbnailRequest $request)
    {
        $data = $request->validated();
        $data = $this->repository->decodeBase64Thumbnail($data, auth()->user());
        $user = auth()->user()->update($data);

        return back()->withThumbnailStatus(__('Foto atualizada com sucesso!'));
    }
}
