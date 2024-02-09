<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profileImage(){
        if($this->image) {
            $imagePath = $this->image;
        }else{
            $imagePath = 'profile/bbxLGxjTNEac5Jieuybxvgzf7DGhLNICxT0gtSYF.png' ;
        }

        return "/storage/" . $imagePath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
