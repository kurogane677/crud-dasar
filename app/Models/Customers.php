<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    // use HasFactory;

    //Mass Asignment data yang boleh diisi
    protected $fillable = ['nama', 'alamat', 'telp', 'email'];

    //Mass Asignment data yang TIDAK boleh diisi
    // protected $guearded = ['field'];
}
