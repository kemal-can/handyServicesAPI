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

class Favourites extends Model
{
    protected $table = 'favourite';

    public $timestamps = true; //by default timestamp false

    protected $fillable = ['uid','freelancer_uid','status','extra_field'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
