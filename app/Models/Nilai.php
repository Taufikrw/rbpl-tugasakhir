<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    use HasFactory;

    protected $fillable = [
        'taskName',
        'idSiswa',
        'idMapel',
        'idKelas',
        'value',
    ];

    public function siswas(): BelongsTo
    {
        return $this->belongsTo(Siswa::class, 'idSiswa');
    }
    
    public function mapels(): BelongsTo
    {
        return $this->belongsTo(Mapel::class, 'idMapel');
    }
    
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'idKelas');
    }
}
