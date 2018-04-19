<?php

namespace App\Models;
use \Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'users';

    protected $fillable = [
        'username',
        'password',
        'email',
        'first_name',
        'last_name',
        'location',
    ];

    public function getName()
    {
        if($this->first_name && $this->last_name){
            return '{ucfirst($this->first_name)} {ucfirst($this->last_name)}';

        }elseif($this->first_name){
            return ucfirst($this->first_name);
        }
        return null;
    }

    public function getNameOrUserName()
    {
        return ucfirst($this->getName()) or ucfirst($this->username);
    }

    public function getFirstNameOrUserName()
    {
        if($this->first_name)
        {
            return ucfirst($this->first_name);
        }
        return ucfirst($this->username);     
    }
}
