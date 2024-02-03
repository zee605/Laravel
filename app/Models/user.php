<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'user'; // Ganti dengan nama tabel Anda
    protected $fillable = ['id', 'nama', 'email', 'alamat', 'notlp', 'foto'];
}
