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

class ChatRooms extends Model
{
    protected $table = 'chat_rooms';

    public $timestamps = true; //by default timestamp false

    protected $fillable = ['sender_id','receiver_id','last_message','last_message_type','status','extra_fields'];

    protected $hidden = [
         'created_at',
    ];
}
