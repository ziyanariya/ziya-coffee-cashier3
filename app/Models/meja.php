<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meja extends Model
{
    use HasFactory;
    protected $table = 'meja';
    protected $fillable = ['nomor_meja','kapasitas','status'];

}
