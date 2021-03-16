<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Umum3 extends Model
{
    use HasFactory;
    protected $table = 'sub_umum3';
    protected $primaryKey = 'sub_id3';
    protected $fillable = ['id_umum','nilai_2','keterangan_2'];
}
