<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['website_title','slogan','logo_top','logo_bottom','favicon','address','phone','email','facebook','twitter','youtube','instagram','linkedin','google_map','created_by','updated_by'];
}
