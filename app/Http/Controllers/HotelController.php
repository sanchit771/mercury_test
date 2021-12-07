<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    /** To get single hotel info with review */
    public function getHotelById($hotelId,Hotel $hotel){

        /** Calling model function using dependency injection */
        $hotelData = $hotel->getSingleHotelWithReview($hotelId);

        /** Returning response in json format by calling helper function */
        return apiResponse($hotelData['status'],$hotelData['message'],$hotelData['data']);
    }
}
