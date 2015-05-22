<?php namespace TORUSlimpium\Models;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model {

    public function assignments()
    {
        return $this->hasMany('TORUSlimpium\Models\Assignment');
    }

    public function attachments()
    {
        return $this->hasMany('TORUSlimpium\Models\Attachment');
    }

    public function getAgeAttribute()
    {
        return \Carbon\Carbon::parse($this->birthdate)->age;
    }

    public function getFullNameAttribute()
    {
        return $this->first_name.' '.$this->second_name.' '.$this->first_last_name.' '.$this->second_last_name;
    }

    public function getShortNameAttribute()
    {
        return $this->first_name.' '.$this->first_last_name;
    }

}