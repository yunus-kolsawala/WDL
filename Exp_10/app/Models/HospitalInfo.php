<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HospitalInfo extends Model
{
    use HasFactory;
    protected $fillable =[
        'id','hospital_name', 'address', 'city', 'state', 'phone', 'landline'
        ,'hospital_id', 'con_person' ,'password', 'email', 'latitude' ,'longitude'
        ,'c_o', 'c_r',  'n_o',	'n_r' 
    ];  

}
