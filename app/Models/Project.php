<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'client_name', 'summary'];

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
