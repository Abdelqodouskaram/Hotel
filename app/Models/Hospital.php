<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Hospital extends Model implements HasMedia
{
    use InteractsWithMedia;
    
    protected $fillable = ['name', 'description', 'address_details', 'village_id'];

    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
