<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Encadreur extends Authenticatable
{
    use CrudTrait;
    use HasFactory ;
    

    protected $guard = 'encadreurs';
    
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'password',
        'poste',];
   

    protected $hidden = ['password', 'remember_token'];


    
}
