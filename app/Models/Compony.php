<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compony extends Model
{
    use HasFactory;
    public function componyContact() {
        return $this->belongsTo(Contact::class, 'contact_id', 'id');
    }
    public function componyTypes() {
        return $this->hasMany(Type::class, 'compony_id', 'id');
    }
}
