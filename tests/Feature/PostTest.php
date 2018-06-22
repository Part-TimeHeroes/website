<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PostTest extends TestCase
{
    use DatabaseMigrations;

    public function a_user_can_browser_posts()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }
}
