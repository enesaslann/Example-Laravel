<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use SoftDeletes;
    protected $table= 'project';
    protected $guarded = [];

    public function find_image(){
        return $this->hasOne('App\Models\ProjectImage', 'proje_id', 'id')->orderBy('order', 'asc');
    } 
    public function find_images(){
        return $this->hasMany('App\Models\ProjectImage', 'proje_id', 'id')->orderBy('order', 'asc');
    } 
}
