<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'customer_id';
    protected $guarded = [];

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class, 'customer_id', 'customer_id');
    }
}
