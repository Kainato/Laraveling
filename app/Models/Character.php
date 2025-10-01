<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
use App\Models\Origin;
use App\Models\Trail;

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
        'nex',
        'pv',
        'pe',
        'san',
    ];

    protected $hidden = [
        'id',
    ];

    public static function list()
    {
        return self::all()->where('deleted_at', null);
    }
    public function user()
    {
        return $this->belongsTo(User::class)->where('deleted_at', null);
    }
    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id')->where('deleted_at', null);
    }
    public function origin()
    {
        return $this->belongsTo(Origin::class, 'origin_id')->where('deleted_at', null);
    }
    public function trail()
    {
        return $this->belongsTo(Trail::class, 'trail_id')->where('deleted_at', null);
    }

}
