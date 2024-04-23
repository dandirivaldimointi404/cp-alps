<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'tb_testimoni';
    protected $primaryKey = 'id_testimoni';
    protected $fillable = ['gambar', 'nama_kota', 'nama_client','project','testimoni','latitude','longitude'];
}
