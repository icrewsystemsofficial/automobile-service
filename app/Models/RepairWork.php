<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepairWork extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','email','phone','mainwork','otherwork',
    ];
}
