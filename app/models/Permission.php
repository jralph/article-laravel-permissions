<?php

class Permission extends Eloquent {

    /**
     * A permission will have many associated users.
     */
    public function users()
    {
        return $this->hasMany('User')->withTimestamps();
    }

}