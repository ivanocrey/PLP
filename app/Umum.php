<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umum extends Model
{
    use HasFactory;
    protected $table = 'umum';
    protected $primaryKey = 'id_umum';
    protected $fillable = ['judul'];
}
