<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Hotel;
use App\Models\Review;

class FetchTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_find_hotel()
    {
        $response = $this->json('GET','api/hotel/1');
        
        /** Write the response in laravel.log */
        \Log::info(1, [$response->getContent()]);

        $this->assertTrue(true);
    }
}
