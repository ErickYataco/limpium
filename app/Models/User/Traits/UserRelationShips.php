<?php namespace TORUSlimpium\Models\User\Traits;

trait UserRelationShips {

    /**
     * role() one-to-one relationship method
     *
     * @return QueryBuilder
     */
    public function role()
    {
        return $this->belongsTo('TORUSlimpium\Models\Role');
    }

    public function worker()
    {
        return $this->belongsTo('TORUSlimpium\Models\Worker');
    }

    /**
     * projects one-to-many relationship method
     *
     * @return QueryBuilder
     */
    public function projects()
    {
        return $this->hasMany('App\DB\Project\Project');
    }
}