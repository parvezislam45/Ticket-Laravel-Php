<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['user_id', 'name', 'address', 'state', 'city', 'country', 'journey_date', 'category', 'phone',  'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
