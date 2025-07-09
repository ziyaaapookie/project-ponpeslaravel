<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WelcomeTest extends TestCase
{
    public function testHalamanUtamaBisaDiakses()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Selamat Datang'); // Ganti dengan kata unik yang muncul di halaman
    }
}
