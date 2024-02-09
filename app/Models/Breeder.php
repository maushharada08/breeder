<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breeder extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot(){
        parent::boot();
        static::created(function($breeder){
            $breeder->user->bProfile()->create([
                'username' => 'breeder' . $breeder->id,
            ]);
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
