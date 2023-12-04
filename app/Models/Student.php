<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'email' , 'age'];

    public function getIsAnAdultAttribute(): bool
    {
        return $this->age >= 21;
    }

}
