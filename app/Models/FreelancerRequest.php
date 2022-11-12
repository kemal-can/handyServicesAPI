<?php
/*
  Authors : mail@kemalcan.net (Kemal CAN)
  Website : https://kemalcan.net/
  App Name : Handy Service Full App Flutter
  This App Template Source code is licensed as per the
  terms found in the Website https://kemalcan.net/license
  Copyright and  © 2022-present mail@kemalcan.net.
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FreelancerRequest extends Model
{
    protected $table = 'freelancer_request';

    public $timestamps = true; //by default timestamp false

    protected $fillable = ['first_name','last_name','email','password','gender','country_code',
    'mobile','cover','served_category','lat','lng','hourly_price','descriptions',
    'total_experience','cid','zipcode','status','extra_field'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];

    protected $casts = [
        'total_experience' => 'integer',
        'cid' => 'integer',
        'status' => 'integer',
    ];
}
