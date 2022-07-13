<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessageControllerTest extends TestCase
{
    /**
     * Test showMessage Endpoint
     *
     * @return void
     */
    public function test_show_message_with_slug()
    {
        $response = $this->get('/api/showMessage?slug=good');

        $response->assertStatus(200);
        $response->assertSeeText('data');
    }

    public function test_show_message_no_slug()
    {
        $response = $this->get('/api/showMessage', ['Accept' => 'application/json']);

        $response->assertStatus(422);
        $response->assertSeeText('The given data was invalid');
    }
}
