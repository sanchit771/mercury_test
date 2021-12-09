<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Hotel;
use App\Models\Review;

class HotelTableTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_hotel_table()
    {
        $getHotel = Hotel::all();
        $expectedCount = 50;
        /** Checking row count */
        $this->assertCount(
            $expectedCount,
            $getHotel, "Hotel Table contains only 50 records"
        );
    }
}
