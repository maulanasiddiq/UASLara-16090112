<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";
    protected $guarded = [];
    protected $primaryKey = 'id';
    protected $fillable = [
      'judul_event',
      'kategori_id',
      'user_id',
      'deskripsi',
      'gambar',
      'tanggal_event',
      'lokasi',
      'status',
    ];

    protected $dates = [
        'tanggal_event'
    ];

    public function kategori(){
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }
}
