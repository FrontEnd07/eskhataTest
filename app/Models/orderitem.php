<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderitem extends Model
{
    protected $table = 'orderitem';
    public $timestamps = true;
    use HasFactory;
}
