<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medal extends Model
{
    use HasFactory;
    public $table = 'awards_awards';

    public function player()
    {
        $this->belongsTo(Player::class, 'player_id');
    }
}
