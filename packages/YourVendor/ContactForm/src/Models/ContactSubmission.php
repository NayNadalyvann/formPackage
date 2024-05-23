<?php

namespace YourVendor\ContactForm\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = ['name', 'email', 'message'];
}
