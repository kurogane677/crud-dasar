<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class customers extends Model
{
    // use HasFactory;

    use SoftDeletes;
    //Mass Asignment data yang boleh diisi
    protected $fillable = ['nama', 'alamat', 'telp', 'email'];

    //Mass Asignment data yang TIDAK boleh diisi
    // protected $guearded = ['field'];
}
