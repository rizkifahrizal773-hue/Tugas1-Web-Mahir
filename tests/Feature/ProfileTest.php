<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfileTest extends TestCase
{
    /**
     * Test halaman profil utama
     */
    public function test_halaman_profil_bisa_diakses(): void
    {
        $response = $this->get('/profil');

        $response->assertStatus(200);
        $response->assertSee('Rizki Fahrizal Kurniawan');
        $response->assertSee('2411500545');
        $response->assertSee('rizkifahrizal773@gmail.com');
        $response->assertSee('085771311710');
    }

    /**
     * Test route root (/) menampilkan profil
     */
    public function test_halaman_home_menampilkan_profil(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Rizki Fahrizal Kurniawan');
        $response->assertSee('2411500545');
    }

    /**
     * Test halaman riwayat pendidikan
     */
    public function test_halaman_pendidikan_bisa_diakses(): void
    {
        $response = $this->get('/pendidikan');

        $response->assertStatus(200);
        $response->assertSee('MI Hadiqotunasyiin');
        $response->assertSee('2012 - 2018');
        $response->assertSee('MTS Nurul Huda');
        $response->assertSee('2018 - 2021');
        $response->assertSee('SMK Yadika 5');
        $response->assertSee('2021 - 2024');
    }
}
