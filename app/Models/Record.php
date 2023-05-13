<?php

namespace App\Models;

use Database\Factories\RecordsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    
    protected $table = 'records';

    protected $fillable = [
        'title',
        'description',
    ];

    protected static function newFactory()
    {
        return new RecordsFactory();
    } 
}
