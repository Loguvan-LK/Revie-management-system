<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [   'name', 'status', 'user_id'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
