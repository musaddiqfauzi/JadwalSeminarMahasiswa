<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'nim',
        'bidang',
        'dosen_wali',
        'dosen_pembimbing_1',
        'dosen_pembimbing_2',
        'dosen_penguji_1',
        'dosen_penguji_2',
        'borang_ta_1',
        'file_borang_ta_1',
        'transkrip_online',
        'file_transkrip_online',
        'lembaran_plagiasi',
        'file_lembaran_plagiasi',
        'slide_presentasi',
        'file_slide_presentasi',
        'bukti_persetujuan',
        'file_bukti_persutujuan',
        'keterangan'
    ];
}
