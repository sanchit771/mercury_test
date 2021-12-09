<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Hotel;
use App\Models\Review;
use HotelsTableDataSeeder;
use ReviewsTableDataSeeder;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class DataTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_data_error()
    {
        /** Running DB seed for both tables */
        $this->seed(HotelsTableDataSeeder::class);
        $this->seed(ReviewsTableDataSeeder::class);
        $this->assertTrue(true);
    }
}
