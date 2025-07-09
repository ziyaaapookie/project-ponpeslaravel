<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AgendaTest extends TestCase
{
    public function testAgendaHalamanBisaDiakses()
    {
        $response = $this->get('/agenda');
        $response->assertStatus(200);
    }
}
