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

class Appointments extends Model
{
    protected $table = 'appointments';

    public $timestamps = true; //by default timestamp false

    protected $fillable = ['uid','freelancer_id','order_to','distance_cost','address','items','coupon_id','coupon','discount','total','serviceTax','grand_total','pay_method'
    ,'paid','wallet_used','wallet_price','notes','save_date','slot','status','extra_field'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
