<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freelance extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'phone_number', 'email_address'];
}
