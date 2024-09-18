<?php

namespace QuickContact\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    public $fillable=[
        "email",
        "message",
        "subject"
    ];

    use HasFactory;
    
}
