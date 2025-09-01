<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'account_number',
        'account_name',
        'ifsc_code',
    ];
}
