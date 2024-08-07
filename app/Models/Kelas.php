<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function guru(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id','id');
    }
}
