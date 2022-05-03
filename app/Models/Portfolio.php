<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    use SoftDeletes;
    protected $table= 'portfolio';
    protected $guarded = [];
}
