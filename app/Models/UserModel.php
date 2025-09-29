<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    /// Nome da tabela no banco de dados
    protected $table = 'users';
    /// Atributos que não podem ser mass assigned, ou seja, que não podem ser preenchidos em massa
    protected $guarded = ['id'];
    /// Atributos que podem ser mass assigned, ou seja, que podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];
    /// Atributos que devem ser ocultados quando o modelo é convertido para um array ou JSON
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /// Atributos que devem ser convertidos para outros tipos
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    /// Relacionamento com o modelo User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /// Mutator para criptografar a senha antes de salvar no banco de dados
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    /// Listar todos os usuários
    public static function list()
    {
        return self::all();
    }
}
