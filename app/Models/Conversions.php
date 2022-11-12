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

class Conversions extends Model
{
    protected $table = 'conversions';

    public $timestamps = true; //by default timestamp false

    protected $fillable = ['room_id','sender_id','message_type','message','reported','extra_fields','status'];

    protected $hidden = [
         'created_at',
    ];
}
