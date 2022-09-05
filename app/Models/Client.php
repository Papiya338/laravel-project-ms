<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['photo','client_name','client_email','gender','mobile_no','company_name','company_address','shipping_address','website','country'];
}
