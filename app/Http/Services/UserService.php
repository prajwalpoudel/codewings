<?php


namespace App\Http\Services;


use App\Models\User;

class UserService extends BaseService
{

    public function model()
    {
        return User::class;
    }
}
