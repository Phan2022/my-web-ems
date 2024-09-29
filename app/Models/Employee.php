<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'sex', 'bod', 'bvill_id', 
    'bdis_id', 'bpro_id', 'address', 'vill_id', 'dis_id', 'pro_id', 'phone',
     'pos_id', 'dpart_id', 'start_date', 'end_date', 'status_id', 'mar_name', 'mar_work', 'mar_address', 
     'mar_phone', 'note', 'picture', 'file',];

     public function position_name()
     {
        return $this->belongsTo('App\Models\Position', 'pos_id', 'id');
     }
     

     public function department_name()
    {
         return $this->belongsTo('App\Models\Department', 'dpart_id', 'id');
    }

    public function bvillname()
    {
         return $this->belongsTo('App\Models\Village', 'bvill_id', 'id');
    }

    public function bdisname()
    {
         return $this->belongsTo('App\Models\District', 'bdis_id', 'id');
    }

    public function bproname()
    {
         return $this->belongsTo('App\Models\Province', 'bpro_id', 'id');
    }
    //

    public function villname()
    {
         return $this->belongsTo('App\Models\Village', 'vill_id', 'id');
    }
    
    public function disname()
    {
         return $this->belongsTo('App\Models\District', 'dis_id', 'id');
    }

    public function proname()
    {
         return $this->belongsTo('App\Models\Province', 'pro_id', 'id');
    }

    public function statusname()
    {
         return $this->belongsTo('App\Models\Status', 'status_id', 'id');
    }
}