<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model{

    protected $guarded = [];

    public function profileImage(){
        return ($this->image) ? '/storage/' . $this->image : 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
