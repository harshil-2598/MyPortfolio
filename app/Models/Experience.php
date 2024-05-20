<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Experience extends Model
{
    use HasFactory;
    protected $table = 'experiences';
    protected $fillable = [
        'user_id','job_title',
        'employer','city',
        'country','start_date',
        'end_date','current_work',
        'description','uniqid',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
