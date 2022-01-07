<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table   = 'komentar';
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(user::class);
    }
    public function aduan() {
        return $this->belongsTo(aduan::class);
    }
}
