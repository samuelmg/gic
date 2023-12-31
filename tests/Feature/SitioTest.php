<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SitioTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_ruta_raiz_se_muestra(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_pagina_inicio_se_muestra():void {
        $response = $this->get(route('inicio'));
        $response->assertStatus(200)
            ->assertSeeText('Página de Inicio');
    }

    public function test_pagina_contacto_se_muestra():void {
        $response = $this->get(route('contacto'));
        $response->assertStatus(200);
    }

    /** @test */
    public function ruta_post_de_contacto_redirecciona_a_inicio():void {
        $response = $this->post(route('contacto.post'));
        $response->assertRedirectToRoute('inicio');
    }
}
