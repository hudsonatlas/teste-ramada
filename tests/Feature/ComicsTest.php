<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ComicsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_success_index_route()
    {
        $response = $this->get('/comics');

        $response->assertStatus(200);
    }
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_success_create_route()
    {
        $response = $this->get('/comics/create');

        $response->assertStatus(200);
    }
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_success_show_route()
    {
        $response = $this->get('/comics/1');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_success_edit_route()
    {
        $response = $this->get('/comics/2/edit');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_success_delete_route()
    {
        $response = $this->get('/comics/2/delete');

        $response->assertStatus(200);
    }
}
