<?php

/*
 * Subject = Materias.
*/

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $fillable = [
        'name',
        'user_id'
    ];
}
