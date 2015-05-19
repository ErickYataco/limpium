<?php namespace TORUSlimpium\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model {


    public function scopePhotos($query)
    {
        return $query->whereIn('type',[1,2]);
    }

    public function scopeProfile($query)
    {
        return $query->where('type',1);
    }

    public function scopeFace($query)
    {
        return $query->where('type',2);
    }

}