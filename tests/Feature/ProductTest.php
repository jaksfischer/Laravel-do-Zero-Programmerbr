<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_a_product()
    {
        $response = $this->post('/products', [
            'name'          => 'Notebook',
            'price'         => 3500,
            'description'   => 'Notebook para testes',
            'category_id'   => 1,
        ]);

        $response->assertStatus(200);
    }
}
