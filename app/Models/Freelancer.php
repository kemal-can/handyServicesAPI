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

class Freelancer extends Model
{
    protected $table = 'freelacer';

    public $timestamps = true; //by default timestamp false

    protected $fillable = ['uid','name','cover','served_category','lat','lng','hourly_price','gallery','descriptions',
    'total_experience','cid','zipcode','rating','total_rating','verified','available','have_shop','popular','in_home','status','extra_field'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];

    protected $casts = [
        'uid' => 'integer',
        'total_experience' => 'integer',
        'cid' => 'integer',
        'total_rating' => 'integer',
        'verified' => 'integer',
        'available' => 'integer',
        'have_shop' => 'integer',
        'popular' => 'integer',
        'in_home' => 'integer',
        'status' => 'integer',
    ];
}
