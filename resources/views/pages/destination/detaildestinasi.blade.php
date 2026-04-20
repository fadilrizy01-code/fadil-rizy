@extends("master")

@section('content')
<div class="container py-5">

    <div class="card shadow border-0 rounded-4 overflow-hidden">
        <div class="row g-0">

            {{-- Gambar --}}
            <div class="col-md-5">
                <img src="{{ asset('storage/images/'.$destination->image) }}" 
                     class="img-fluid h-100 w-100 object-fit-cover"
                     style="min-height: 350px;"
                     alt="{{ $destination->name }}">
            </div>

            {{-- Detail --}}
            <div class="col-md-7">
                <div class="card-body p-4 p-md-5">

                    <h2 class="fw-bold mb-3">
                        🌍 {{ $destination->name }}
                    </h2>

                    <p class="text-muted mb-4">
                        {{ $destination->description }}
                    </p>

                    <div class="row">

                        <div class="col-6 mb-3">
                            <div class="p-3 bg-light rounded-3 h-100">
                                <small class="text-muted">📍 Lokasi</small>
                                <div class="fw-semibold">
                                    {{ $destination->location }}
                                </div>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="p-3 bg-light rounded-3 h-100">
                                <small class="text-muted">📅 Hari Buka</small>
                                <div class="fw-semibold">
                                    {{ $destination->working_days }}
                                </div>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="p-3 bg-light rounded-3 h-100">
                                <small class="text-muted">⏰ Jam Operasional</small>
                                <div class="fw-semibold">
                                    {{ $destination->working_hours }}
                                </div>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="p-3 bg-light rounded-3 h-100">
                                <small class="text-muted">💰 Harga Tiket</small>
                                <div class="fw-bold text-success fs-5">
                                    Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}
                                </div>
                            </div>
                        </div>

                    </div>

                    {{-- Tombol --}}
                    <div class="mt-4 d-flex gap-2">
                        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary rounded-pill">
                            ← Kembali
                        </a>
                        <a href="{{ url('destination') }}" class="btn btn-primary rounded-pill">
                            Lihat Semua
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection