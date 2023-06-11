<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;
use App\Models\Nilai;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kelas(): HasMany
    {
        return $this->hasMany(Kelas::class);
    }

    public function nilais(): HasMany
    {
        return $this->hasMany(Nilai::class);
    }
}
