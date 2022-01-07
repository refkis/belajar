<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengadu extends Model
{
    protected $table   = 'pengadu';
    protected $guarded = ['id'];
   
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getAvatar() {
        if(!$this->avatar_pengadu){
            return asset ('images/default_pengadu.jpg');
        }
            return asset ('images/'.$this->avatar_pengadu);
    }
}
