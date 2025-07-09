<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GaleriTest extends TestCase
{
    public function testGaleriHalamanBisaDiakses()
    {
        $response = $this->get('/galeri');
        $response->assertStatus(200);
    }
}
