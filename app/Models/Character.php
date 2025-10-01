<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
        'class_id',
        'origin_id',
        'trail_id',
        'strength',
        'agility',
        'intellect',
        'presence',
        'force',
    ];

    protected $hidden = [
        'id',
    ];

    public static function list()
    {
        return self::all();
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
