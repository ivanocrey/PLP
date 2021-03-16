<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_lokasi2 extends Model
{
    use HasFactory;
    protected $table = 'sub_lokasi2';
    protected $primaryKey = 'sub_id2';
    protected $fillable = ['id_lokasi','nilai_1','keterangan_1'];
}
