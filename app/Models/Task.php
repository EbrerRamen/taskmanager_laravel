<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    // Specify which columns can be mass assignmed (for create/update)
    protected $fillable = [
        'title',
        'is_completed',
    ];
}
