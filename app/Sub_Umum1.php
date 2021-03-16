<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Umum1 extends Model
{
    use HasFactory;
    protected $table = 'sub_umum1';
    protected $primaryKey = 'sub_id1';
    protected $fillable = ['id_umum','nilai','keterangan'];
}
