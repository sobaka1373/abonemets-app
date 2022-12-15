<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonements extends Model
{
    use HasFactory;
    protected $fillable = ['user_name', 'plan_id'];
    public $timestamps = true;
}
