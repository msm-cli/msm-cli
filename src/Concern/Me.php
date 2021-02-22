<?php

namespace MSM\Concern;

trait Me
{

    public function scopeMe($query, $guard= 'api')
    {
        return $query->where('user', auth($guard)->id());
    }
}
