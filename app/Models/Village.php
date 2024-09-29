<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'dis_id', 'pro_id'];
    
     public function district()
    {
        return $this->belongsTo('App\Models\District','dis_id','id');
    }
   
     public function province() 
    {
        return $this->belongsTo('App\Models\Province','pro_id','id');
    }
}