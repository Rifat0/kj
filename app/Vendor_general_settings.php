<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor_general_settings extends Model
{
    protected $fillable = [
        'storeLogo', 'storeIcon'
    ];
}