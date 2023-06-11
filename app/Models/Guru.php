<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mapel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guru extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function mapels(): HasMany
    {
        return $this->hasMany(Mapel::class);
    }
}
