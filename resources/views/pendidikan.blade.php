@extends('layouts.app')

@section('title', 'Halaman Riwayat Pendidikan')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Riwayat Pendidikan</h1>
        <p>{{ $nama }} &bull; NIM: {{ $nim }}</p>
    </div>

    <div class="card-body">
        <h2 style="font-size: 1.25rem; font-weight: 700; margin-bottom: 1.5rem; color: #1e293b;">
            Jejak Pendidikan Formal
        </h2>

        <div class="timeline">
            @foreach($riwayat_pendidikan as $item)
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <span class="timeline-badge">{{ $item['badge'] ?? $item['jenjang'] }}</span>
                        <h3 class="timeline-title">{{ $item['sekolah'] }}</h3>
                        <p class="timeline-year">Periode: <strong>{{ $item['tahun'] }}</strong></p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="action-container">
            <a href="{{ url('/profil') }}" class="btn btn-secondary">
                &larr; Kembali ke Profil
            </a>
        </div>
    </div>
</div>
@endsection
