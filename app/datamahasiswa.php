<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datamahasiswa extends Model
{
    protected $table = 'employees';
    protected $fillable = ['name', 'age', 'region'];
    public $timestamps = false;
}
