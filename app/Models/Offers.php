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

class Offers extends Model
{
    protected $table = 'offers';

    public $timestamps = true; //by default timestamp false

    protected $fillable = ['name','short_descriptions','code','type','discount','upto',
    'expire','freelancer_ids','max_usage','min_cart_value','validations','user_limit_validation','status','extra_field'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
