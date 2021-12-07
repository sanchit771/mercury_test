<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Review extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $table = 'reviews';

    /** disable timestamps */
    public $timestamps = false;

    /** hide coloumns */
    protected $hidden = ['id','hotel_id']; 
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
}
