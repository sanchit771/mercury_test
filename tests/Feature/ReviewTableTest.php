<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Hotel;
use App\Models\Review;

class ReviewTableTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_review_table()
    {
        $getReview = Review::all();
        $expectedCount = 50;
        /** Checking row count */
        $this->assertCount(
            $expectedCount,
            $getReview, "Review Table contains only 50 records"
        );
    }
}
