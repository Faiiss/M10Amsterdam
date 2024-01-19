<?php

// app/Models/Project.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'tekst',
        'link',
        'category',
        'start_date',
        'end_date',
        // Add more fields as needed
    ];
}
