<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Umum2 extends Model
{
    use HasFactory;
    protected $table = 'sub_umum2';
    protected $primaryKey = 'sub_id2';
    protected $fillable = ['id_umum','nilai_1','keterangan_1'];
}
