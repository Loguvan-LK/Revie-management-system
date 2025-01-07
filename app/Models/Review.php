<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['card_id', 'date', 'time', 'location'];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
