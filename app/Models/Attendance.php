<?php namespace TORUSlimpium\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model {

    /**
     * roles() many-to-many relationship method
     *
     * @return QueryBuilder
     */
    public function assignment()
    {
        return $this->belongsTo('TORUSlimpium\Models\Assignment');
    }
}