<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function create_new_category()
    {
        $response = $this->post('/categories', [
            'name'  => 'Category 1',
        ]);

        $response->assertStatus(201);
    }
}
