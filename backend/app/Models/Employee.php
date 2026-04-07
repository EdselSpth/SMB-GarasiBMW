<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'employees_id';
    protected $guarded = [];

    public function attendances()
    {
        return $this->hasMany(Attendance::class, 'employee_id', 'employees_id');
    }

    public function payrolls()
    {
        return $this->hasMany(Payroll::class, 'employees_id', 'employees_id');
    }
}
