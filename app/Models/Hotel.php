<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Review;

class Hotel extends Model
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
    protected $table = 'hotels';

    /** hide coloumns */
    protected $hidden = ['id']; 

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    /** Has Many relation with Review Model */
    public function review()
    {
        return $this->hasMany('App\Models\Review','hotel_id','id');
    }

    /** Fetch Hotel Data with Review If any */
    public function getSingleHotelWithReview($hotelId){
        $getSingleHotel = self::select('id','hotel_name','hotel_rating')
        ->where('id',$hotelId)
        ->where('hotel_status','active')
        ->with(['review'])
        ->first();

        /** Checking if data exist in DB based on particular id*/
        if($getSingleHotel){
            return ['status'=>'success','data'=>$getSingleHotel,'message'=>'hotel_listed'];
        }else{
            return ['status'=>'error','data'=>[],'message'=>'not_available'];
        }
    }

    /** Setting accessor to get proper hotel ratings */
    public function getHotelRatingAttribute($value)
    {
        if($value<=1){
            $text = 'Star';
        }else{
            $text = 'Stars';
        }
       return $this->attributes['hotel_rating'] = $value." ".$text;
    }
    
}
