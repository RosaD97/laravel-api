<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['slug', 'image'];

    public function type() {
        return $this->belongsTo(Type::class);
    }

    public function technologies() {
        return $this->belongsToMany(Technology::class)->withTimestamps();
    }
    
    public function messages() {
        return $this->hasMany(Message::class);
    }
}
