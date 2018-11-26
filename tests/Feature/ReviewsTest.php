<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReviewsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_unauthorized_use_cannot_add_review()
    {
        $host = factory('App\User')->create(['role' => 1]);
        $volunteer = factory('App\User')->create(['role' => 2]);
        $review = factory('App\Review')->make(['owner_id' => $volunteer->id, 'user_id' => $host->id]);

        $response = $this->post("/reviews/$host->id/create", $review->toArray());
        $response->assertRedirect('/login');
    }
    
    public function test_authorized_user_can_add_a_review()
    {
        $host = factory('App\User')->create(['role' => 1]);
        $volunteer = factory('App\User')->create(['role' => 2]);
        $this->be($volunteer);

        $review = factory('App\Review')->make(['owner_id' => $volunteer->id, 'user_id' => $host->id]);

        $response = $this->post("/reviews/$host->id/create", $review->toArray());

        $response->assertStatus(201);
        $this->assertDatabaseHas('reviews', $review->toArray());
    }
}
