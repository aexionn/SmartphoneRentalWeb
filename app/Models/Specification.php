<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $primaryKey = 'spec_id';

   /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'display',
        'processor',
        'ram',
        'storage',
        'camera',
        'battery',
    ];
}
