<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{    
    protected $table   = 'status';
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(user::class);
    }
    public function aduan() {
        return $this->belongsTo(aduan::class);
    }
}

