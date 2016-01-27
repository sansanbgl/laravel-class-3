<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dosen extends Model
{

    use SoftDeletes;
    protected $table   = 'dosen';
    public $timestamps = false;

    protected $fillable = ['nip', 'nama', 'pangkat'];
}
