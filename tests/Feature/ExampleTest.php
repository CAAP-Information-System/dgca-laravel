<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testUserCreation()
    {
        $userData = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'organization' => 'Example Org',
            'email' => 'john@example.com',
            'password' => 'password123',
            'gender' => 'male',
            'designation' => 'Engineer',
            'country' => 'US',
            'conference_role' => 'Participant',
        ];

        $response = $this->post('/register', $userData);

        $response->assertStatus(200) // Assuming successful creation returns 200
                 ->assertJson($userData);
    }
}
