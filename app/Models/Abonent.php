<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Abonent extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    public $timestamps = false;

    protected $fillable = ['surname', 'name', 'patronym', 'birth_date', 'phone', 'division_id'];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}

