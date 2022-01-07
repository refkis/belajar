<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Aduan extends Model
{
    protected $table='aduan';
    protected $guarded=['id'];
    
    public function user() {
        return $this->belongsTo(user::class);
    }

    public function komentar() {
        return $this->hasMany(komentar::class);
    }

    public function getFoto() {
        if(!$this->foto_aduan) {
        return asset ('images/foto_kejadian.jpg');
        }
        return asset ('images/'.$this->foto_aduan);
    }

    public function status() {
        return $this->hasMany(status::class);
    }

    // public function last()
    // {
    //     $status = status::orderBy('id', 'desc')->take(1)->get();
    //     dd$status;
    // }

}
