<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function format()
    {
        return [
            'customer_id' => $this->id,
            'name' => $this->name,
            'merchant_name' => $this->user->name,
            'merchant_email' => $this->user->email,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
