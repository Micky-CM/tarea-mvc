<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'ci', 'birth_date', 'gender', 'email', 'phone', 'address', 'hire_date', 'salary', 'department_id'];

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function position(){
        return $this->belongsTo(Position::class);
    }
}
