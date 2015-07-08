<?php namespace TORUSlimpium\Models;

use TORUSlimpium\Models\Attachment;
use TORUSlimpium\Models\Assignment;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model {




	public function assignments()
	{
		return $this->hasMany(Assignment::class);
	}


	public function attachments()
	{
		return $this->hasMany(Attachment::class);
	}


	public function getAgeAttribute()
	{
		return \Carbon\Carbon::parse($this->birthdate)->age;
	}


	public function getFullNameAttribute()
	{
		return $this->first_name . ' ' . $this->second_name . ' ' . $this->first_last_name . ' ' . $this->second_last_name;
	}


	public function getShortNameAttribute()
	{
		return $this->first_name . ' ' . $this->first_last_name;
	}

}