<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = [
        'user_id',
        "doctor_id",
        "date",
        "time"
    ];
    public function client(){
        return $this->belongsTo(User::class);
    }
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    use HasFactory;
}
