<?php namespace TORUSlimpium\Models;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model {

    public function account()
    {
        return $this->belongsTo('TORUSlimpium\Models\Account');
    }

    public function workplace()
    {
        return $this->belongsTo('TORUSlimpium\Models\Workplace');
    }

	public function assignments()
	{
		return $this->hasMany('TORUSlimpium\Models\Assignment');
	}

	public function assignmentsCount()
	{
		return $this->hasOne('TORUSlimpium\Models\Assignment')
			->join('attendances', 'attendances.assignment_id', '=', 'assignments.id')
			->where('day_attendance',date("Y-m-d"))
			->selectRaw('contract_id, count(*) as aggregate')
			->groupBy('contract_id')
			->orderBy('aggregate','desc');
	}

	public function getAssignmentsCountAttribute()
	{
		// if relation is not loaded already, let's do it first
		if ( ! array_key_exists('assignmentsCount', $this->relations))
			$this->load('assignmentsCount');

		$related = $this->getRelation('assignmentsCount');

		// then return the count directly
		return ($related) ? (int) $related->aggregate : 0;
	}




}