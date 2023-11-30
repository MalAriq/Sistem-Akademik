<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $table = "provinsi";

    protected $primaryKey = "kode_prov";

    protected $fillable = [
        'kode_prov',
        'nama_prov'
    ];
}
