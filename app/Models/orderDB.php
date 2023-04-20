<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class orderDB extends Model
{
    protected $table = 'orderdb';
    protected $keyType = 'uuid';
    public $incrementing = false;
    public $timestamps = true;
    use HasFactory;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $uuid = Str::uuid();
            $uuidParts = explode('-', $uuid->toString());
            $leastSignificantBits = hexdec(substr($uuidParts[3], -4)) + hexdec(substr($uuidParts[4], 0, 4));
            $uniqueInteger = $leastSignificantBits & 0xFFFF;
            $model->number = $uniqueInteger;
        });
    }
}
