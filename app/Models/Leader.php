<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','company_name','service_area','miles','zipcode',
        'phone','website','ziplat','ziplong'
    ];
        
}
