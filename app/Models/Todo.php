<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = ['task', 'description', 'datentime','reward', 'step1', 'step2', 'step3', 'step4', 'step5'];
}
