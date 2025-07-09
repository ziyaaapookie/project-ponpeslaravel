<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GaleriTest extends TestCase
{
    public function testHalamanGaleriBisaDiakses()
    {
        $response = $this->get('/galeri');
        $response->assertStatus(200); // halaman berhasil diakses
        $response->assertSee('Galeri'); // opsional, cek ada tulisan "Galeri" di halaman
    }
}
