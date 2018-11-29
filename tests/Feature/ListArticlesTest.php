<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class ListArticlesTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testListArticles()
    {
//        $this->assertTrue(true);
        $response = $this->get('api/articles');
        $response->assertStatus(200);
        $response->assertJson([]);
    }
}
