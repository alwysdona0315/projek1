<?php
// Pada Pendaftaran.php (model)

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = ['nama', 'nim', 'jurusan', 'fakultas', 'total_sks', 'ipk'];
}