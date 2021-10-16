<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    public function typeCompony() {
        return $this->belongsTo(Compony::class, 'compony_id', 'id');
    }
}


