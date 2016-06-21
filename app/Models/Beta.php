<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beta extends Model
{
    protected $table = 'beta';

    public static function getData()
    {
        $data = Beta::all();
        return $data;
    }

    public static function getSingle()
    {
        $data = Beta::find(1);
        return $data;
    }
    
}
