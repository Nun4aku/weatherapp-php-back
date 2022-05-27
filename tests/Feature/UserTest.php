<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_moscow()
    {
        $response = $this->get('/api/moscow');
        $response->assertStatus(200);
    }

    public function test_moscow_update()
    {
        $response = $this->get('/api/moscow/update');
        $response->assertStatus(200);
    }

}
