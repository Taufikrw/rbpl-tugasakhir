<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mapel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function gurus(): BelongsTo
    {
        return $this->belongsTo(Guru::class, 'idGuru');
    }

    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'idClass');
    }

    public function nilais(): HasMany
    {
        return $this->hasMany(Nilai::class);
    }
}
