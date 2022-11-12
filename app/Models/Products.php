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

class Products extends Model
{
    protected $table = 'products';

    public $timestamps = true; //by default timestamp false

    protected $fillable = ['freelacer_id','cover','name','images','original_price','sell_price','discount','cate_id',
    'sub_cate_id','in_home','is_single','have_gram','gram','have_kg','kg','have_pcs','pcs','have_liter','liter','have_ml',
    'ml','descriptions','key_features','disclaimer','exp_date','in_offer','in_stock','rating','total_rating',
    'status','extra_field'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];

    protected $casts = [
        'in_home' => 'integer',
        'is_single' => 'integer',
        'have_gram' => 'integer',
        'have_kg' => 'integer',
        'have_pcs' => 'integer',
        'have_liter' => 'integer',
        'have_ml' => 'integer',
        'in_offer' => 'integer',
        'in_stock' => 'integer',
        'status' => 'integer',
        'rating' => 'decimal:2',
    ];
}
