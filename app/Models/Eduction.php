<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Eduction extends Model
{
    use HasFactory;
    protected $table='eductions';
    protected $fillable = ['user_id','course','passing_year','school','grade','university'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
