<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_lokasi1 extends Model
{
    use HasFactory;
    protected $table = 'sub_lokasi1';
    protected $primaryKey = 'sub_id1';
    protected $fillable = ['nilai','keterangan'];
}
