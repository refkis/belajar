<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pejabat extends Model
{
    protected $table   = 'pejabat';
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getAvatar() {
        if(!$this->avatar_pejabat){
            return asset ('images/default_pejabat.jpg');
        }
            return asset ('images/'.$this->avatar_pejabat);
    }




}
