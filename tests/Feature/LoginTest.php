<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    public function testHalamanLoginBisaDiakses()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
        $response->assertSee('Login'); // Sesuaikan dengan kata di halaman login
    }
}
