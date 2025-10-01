<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'initial_pv',
        'add_pv',
        'initial_pe',
        'add_pe',
        'initial_san',
        'add_san',
    ];

    protected $hidden = [
        'id',
    ];

    public static function list()
    {
        return self::all()->where('deleted_at', null);
    }
}
