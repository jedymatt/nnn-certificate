<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'display_name',
        'validation_key',
        'issue_date',
    ];

    protected $casts = [
        'issue_date' => 'date',
    ];
}
