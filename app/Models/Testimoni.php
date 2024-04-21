<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    // use HasFactory;
    protected $table = 'tb_testimoni';
    protected $primaryKey = 'id_testimoni';
    public $incrementing = false;
    protected $fillable = ['gambar', 'nama_kota', 'nama_client','project','testimoni','latitude','longitude'];
    public $timestamps = false;
}
