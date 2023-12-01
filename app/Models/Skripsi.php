<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IRS;

class Skripsi extends Model
{
    protected $table = 'skripsi';

    protected $primaryKey = 'id_skripsi';

    public $timestamps = false;

    protected $fillable = [
        'id_skripsi',
        'status_skripsi',
        'nilai_skripsi',
        'lama_studi',
        'tanggal_sidang',
        'berkas_skripsi',
        'id_mhs',
        'persetujuan',
        'semester'
    ];

    public function irs()
    {
        return $this->belongsTo(IRS::class, 'ID_IRS'); // Adjust the foreign key column name as needed
    }

    public function khs()
    {
        return $this->hasMany(KHS::class, 'nim', 'nim'); // Sesuaikan dengan kunci asing yang digunakan
    }
}
