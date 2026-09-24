@extends('layouts.app')

@section('title', 'Biodata Pemilik Website')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="avatar-circle">RF</div>
        <h1>Selamat Datang di Website Saya</h1>
        <p>Biodata Pemilik Website</p>
    </div>

    <div class="card-body">
        <div class="info-grid">
            <div class="info-item">
                <div class="info-label">NIM</div>
                <div class="info-value">{{ $nim }}</div>
            </div>

            <div class="info-item">
                <div class="info-label">Nama</div>
                <div class="info-value">{{ $nama }}</div>
            </div>

            <div class="info-item">
                <div class="info-label">Email</div>
                <div class="info-value">{{ $email ?? 'rizkifahrizal773@gmail.com' }}</div>
            </div>

            <div class="info-item">
                <div class="info-label">No HP</div>
                <div class="info-value">{{ $no_hp ?? '085771311710' }}</div>
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