<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $fillable = [
        'created_by',
        'title',
        'description',
        'status',
        'tech_stack',
        'ends_at',
    ];

    public function casts() {
        return [
            'tech_stack' => 'array'
        ];
    }
}
