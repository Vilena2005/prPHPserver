<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonent extends Model
{
    use HasFactory;
}
class Subscriber extends Model
{
    public $timestamps = false;
    protected $fillable = ['surname', 'name', 'patronym', 'birth_date', 'phone'];

//    public function division()
//    {
//        return $this->belongsTo(Division::class);
//    }
}
