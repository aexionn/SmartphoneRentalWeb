<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $primaryKey = 'device_id';

   /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'brand',
        'model',
        'image',
        'price',
    ];
    
    // protected $casts = [
    //     'condition' => 'string', 
    // ];
}