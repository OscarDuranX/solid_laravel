<?php


namespace App\Repositories;


use App\User;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends Repository
{

    function model()
    {
       return User::class;
    }
}