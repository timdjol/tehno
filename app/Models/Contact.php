<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['phone', 'email', 'phone2', 'graph', 'address', 'whatsapp', 'telegram', 'instagram', 'facebook'];
}
