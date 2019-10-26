<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Bio extends Model implements HasMedia
{
    use HasMediaTrait;

public function registerMediaCollections()
{
    $this
        ->addMediaCollection('passport')
        ->singleFile();
        
        $this
        ->addMediaCollection('id_card')
        ->singleFile();
}


}
