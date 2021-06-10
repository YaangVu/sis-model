<?php


namespace YaangVu\SisModel\App\Models;


use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

interface User extends AuthenticatableContract, AuthorizableContract
{

}
