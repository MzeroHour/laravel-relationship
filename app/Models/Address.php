<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'country'];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class, 'user_id');
    }

}
