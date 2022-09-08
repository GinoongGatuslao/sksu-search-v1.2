<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    public function employee_information(){
        return $this->hasOne('App\Models\Employee_information');
    }

    public function campus(){
        return $this->belongsTo('App\Models\Campus');
    }

    public function head(){
        return $this->hasOne('App\Models\Employee_information','id','head_id');
    }

    public function oic_1(){
        return $this->hasOne('App\Models\Employee_information','id','oic_1');
    }

    public function oic_2(){
        return $this->hasOne('App\Models\Employee_information','id','oic_2');
    }

    public function oic_3(){
        return $this->hasOne('App\Models\Employee_information','id','oic_3');
    }
}