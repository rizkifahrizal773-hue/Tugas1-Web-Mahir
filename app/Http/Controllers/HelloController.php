<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    /**
     * Menampilkan Halaman Profil Mahasiswa
     */
    public function profil()
    {
        // Data Profil Mahasiswa
        $nama = 'Rizki Fahrizal Kurniawan';
        $nim = '2411500545';
        $email = 'rizkifahrizal773@gmail.com';
        $no_hp = '085771311710';

        // Mengirim data ke View 'profil'
        return view('profil', compact('nama', 'nim', 'email', 'no_hp'));
    }

    /**
     * Menampilkan Halaman Riwayat Pendidikan Mahasiswa
     */
    public function pendidikan()
    {
        // Data Mahasiswa
        $nama = 'Rizki Fahrizal Kurniawan';
        $nim = '2411500545';

        // Data Riwayat Pendidikan Mahasiswa
        $riwayat_pendidikan = [
            [
                'jenjang' => 'Pendidikan SD',
                'sekolah' => 'MI Hadiqotunasyiin',
                'tahun' => '2012 - 2018',
                'badge' => 'SD / Sederajat'
            ],
            [
                'jenjang' => 'Pendidikan SMP',
                'sekolah' => 'MTS Nurul Huda',
                'tahun' => '2018 - 2021',
                'badge' => 'SMP / Sederajat'
            ],
            [
                'jenjang' => 'Pendidikan SMA/SMK',
                'sekolah' => 'SMK Yadika 5',
                'tahun' => '2021 - 2024',
                'badge' => 'SMA / SMK'
            ]
        ];

        // Mengirim data ke View 'pendidikan'
        return view('pendidikan', compact('nama', 'nim', 'riwayat_pendidikan'));
    }

    /**
     * Alias method untuk kompatibilitas route sebelumnya
     */
    public function index()
    {
        return $this->profil();
    }

    public function biodata()
    {
        return $this->profil();
    }
}
