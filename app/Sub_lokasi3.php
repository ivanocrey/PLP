<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_lokasi3 extends Model
{
    use HasFactory;
    protected $table = 'sub_lokasi3';
    protected $primaryKey = 'sub_id3';
    protected $fillable = ['id_lokasi','nilai_2','keterangan_2'];
}
