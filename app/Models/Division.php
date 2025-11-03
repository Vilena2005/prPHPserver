<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['division_name', 'division_type'];

    public function abonents()
    {
        return $this->hasMany(Abonent::class);
    }
}
