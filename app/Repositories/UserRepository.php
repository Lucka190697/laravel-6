<?php
namespace App\Repositories;

use App\Models\Farm;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository extends Repository
{
    protected function getClass()
    {
        return User::class;
    }

    public function passwordVerification($request, $current)
    {
        $data = $request->validated();
        if(isset($data['password']))
            return $this->createHash($data);
        else {
            $data['password'] = $current['password'];
            return $data;
        }
    }

    public function createHash($data)
    {
        $data['password'] = Hash::make($data['password']);
        return $data;
    }

    public function createThumbnail($data)
    {
        $extension = $data['thumbnail']->getClientOriginalExtension();
        $data['thumbnail']->storeAs('users/', $data['name'] . '.' . $extension);
        $data['thumbnail'] = $data['name'] . '.' . $extension;
        return $data;
    }

    public function vefirfyThumbnail($data, $current)
    {
        if(isset($data['thumbnail'])){
            return $this->createThumbnail($data);
        }
        else {
            $data['thumbnail'] = $current['thumbnail'];
            return $data;
        }
    }

    public function decodeBase64Thumbnail($data, $current)
    {
        $bin = explode( ',', $data['path']);
        $output_file = $current->name . '.' . 'png';
        $file = fopen( 'users/'  . $output_file, "wb");
        fwrite($file, base64_decode($bin[1]));
        fclose($file);
       $data['thumbnail']  = $output_file;
        unset($data['name']);
        unset($data['path']);
       return $data;
    }
}
