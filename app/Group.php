<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function users ()
    {
        return $this->belongsToMany (User::class, 'user_group', 'group_id');
    }

    public function groups_allowed ()
    {
        return $this
        ->where('name', 'Authors')
        ->orWhere('name', 'Developer')
        ->get();
    }
}
