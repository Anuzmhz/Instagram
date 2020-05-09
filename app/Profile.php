<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = [];
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image :'profile/nlcVDZWvKvETflpOvBebECY72kxB4yacH0nasfsH.jpeg';
        return '/storage/' .  $imagePath;
    }
    public function user(){
        return $this->belongsTo(User::class); //App\User does the same function as User::class
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
}
