<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;
use App\Models\Nilai;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kelas(): BelongsTo
    {
        return $this->BelongsTo(Kelas::class, 'idClass');
    }

    public function nilais(): HasMany
    {
        return $this->hasMany(Nilai::class, 'idSiswa');
    }

    public function users(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'username');
    }
}
