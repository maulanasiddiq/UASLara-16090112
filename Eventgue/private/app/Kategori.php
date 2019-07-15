<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori_event';
    protected $primaryKey = 'id';
    protected $fillable = [
      'nama'
    ];

    public function event() {
        return $this->hasMany('App\Event', 'kategori_id');
      }
}
