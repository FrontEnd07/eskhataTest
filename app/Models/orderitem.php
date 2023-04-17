<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderitem extends Model
{
    public $timestamps = true;
    protected $table = 'orderitem';
    use HasFactory;
}
