@extends('layouts.app')

@section('title', 'Halaman Profil Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="avatar-circle">RF</div>
        <h1>{{ $nama }}</h1>
        <p>NIM: {{ $nim }}</p>
    </div>

    <div class="card-body">
        <h2 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1.25rem; color: #1e293b;">
            Biodata Mahasiswa
        </h2>

        <div class="info-grid">
            <div class="info-item">
                <div class="info-label">Nama Lengkap</div>
                <div class="info-value">{{ $nama }}</div>
            </div>

            <div class="info-item">
                <div class="info-label">Nomor Induk Mahasiswa (NIM)</div>
                <div class="info-value">{{ $nim }}</div>
            </div>

            <div class="info-item">
                <div class="info-label">Alamat Email</div>
                <div class="info-value">
                    <a href="mailto:{{ $email }}">{{ $email }}</a>
                </div>
            </div>

            <div class="info-item">
                <div class="info-label">Nomor Handphone / WhatsApp</div>
                <div class="info-value">
                    <a href="https://wa.me/{{ preg_replace('/^0/', '62', $no_hp) }}" target="_blank">{{ $no_hp }}</a>
                </div>
            </div>
        </div>

        <div class="action-container">
            <a href="{{ url('/pendidikan') }}" class="btn btn-primary">
                Lihat Riwayat Pendidikan &rarr;
            </a>
        </div>
    </div>
</div>
@endsection
