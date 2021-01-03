<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'author_id', 'text', 'created_at',
    ];

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->format('Y-m-d H:i:s');
    }
    public function getUpdatedAtAttribute($value){
        return Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    public function author() {
        return $this->hasOne(User::class, 'id', 'author_id');
    }
}
