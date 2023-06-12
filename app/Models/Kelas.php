<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    public function mapels(): HasMany
    {
        return $this->hasMany(Mapel::class);
    }

    public function siswas(): HasMany
    {
        return $this->hasMany(Siswa::class, 'idClass');
    }
}
