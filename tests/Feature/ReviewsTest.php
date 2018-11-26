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
        $host = factory('App\Host')->create();
        $volunteer = factory('App\Volunteer')->create();

        $review = factory('App\Review')->make(['owner_id' => $volunteer->id, 'user_id' => $host->id]);

        $response = $this->post("/reviews/$host->id/create", $review->toArray());
        $response->assertRedirect('/login');
    }
    
    public function test_authorized_user_can_add_a_review()
    {
        $host = factory('App\Host')->create();
        $volunteer = factory('App\Volunteer')->create();
        $this->be($volunteer);

        $review = factory('App\Review')->make(['owner_id' => $volunteer->id, 'user_id' => $host->id]);

        $response = $this->post("/reviews/$host->id/create", $review->toArray());

        $response->assertStatus(201);
        $this->assertDatabaseHas('reviews', $review->toArray());
    }

    public function test_authorized_user_can_edit_a_review()
    {
        $this->withoutExceptionHandling();

        $host = factory('App\Host')->create();
        $volunteer = factory('App\Volunteer')->create();

        $this->be($volunteer);

        $review = factory('App\Review')->create(['owner_id' => $volunteer->id, 'user_id' => $host->id]);
        $review->body = 'new body';

        $response = $this->put("/reviews/$review->id/", $review->toArray());

        $response->assertStatus(200);
        $this->assertDatabaseMissing('reviews', $review->toArray());
    }
   
    public function test_authorized_user_can_delete_a_review()
    {
        $host = factory('App\Host')->create();
        $volunteer = factory('App\Volunteer')->create();
        $this->be($volunteer);

        $review = factory('App\Review')->create(['owner_id' => $volunteer->id, 'user_id' => $host->id]);

        $response = $this->delete("/reviews/$review->id/");

        $response->assertStatus(200);
        $this->assertDatabaseMissing('reviews', $review->toArray());
    }
}
