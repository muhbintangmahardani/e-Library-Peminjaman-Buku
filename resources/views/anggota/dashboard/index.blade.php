@extends('layouts.stisla.index', [
    'title' => 'Anggota Dashboard',
    'section_header' => 'Anggota Dashboard'
])

@section('content')
<div class="row">

  <!-- CARD UTAMA -->
  <div class="col-12">
    <div class="card card-statistic-2">

      <!-- Statistik -->
      <div class="card-stats">
        <div class="card-stats-items mt-3">
          <div class="card-stats-item">
            <div class="card-stats-item-count">
              {{ count($book_approved) }}
            </div>
            <div class="card-stats-item-label">
              Buku Disetujui
            </div>
          </div>

          <div class="card-stats-item">
            <div class="card-stats-item-count">
              {{ count($book_not_approve) }}
            </div>
            <div class="card-stats-item-label">
              Menunggu Persetujuan
            </div>
          </div>
        </div>
      </div>

      <!-- Icon -->
      <div class="card-icon shadow-primary bg-primary">
        <i class="fas fa-book-reader"></i>
      </div>

      <!-- Konten -->
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Buku Yang Saya Pinjam</h4>
        </div>
        <div class="card-body">
          <h2 class="mb-0">
            {{ count($book_user) }}
          </h2>
        </div>
      </div>

    </div>
  </div>

</div>

<!-- Optional tambahan -->
<div class="row mt-4">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4>Informasi</h4>
      </div>
      <div class="card-body">
        <p class="mb-0 text-muted">
          Dashboard ini menampilkan ringkasan data peminjaman buku Anda.
          Silakan cek menu <strong>Peminjaman</strong> untuk detail lengkap.
        </p>
      </div>
    </div>
  </div>
</div>
@endsection
