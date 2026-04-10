@extends("master")

@section('content')
<div class="container py-4">

    <div class="card shadow-lg border-0">
        <div class="row g-0">

            {{-- Optional gambar (kalau ada field image) --}}
            {{-- 
            <div class="col-md-5">
                <img src="{{ asset('storage/'.$destination->image) }}" 
                     class="img-fluid h-100 object-fit-cover rounded-start" 
                     alt="{{ $destination->name }}">
            </div> 
            --}}

            <div class="col-md-12">
                <div class="card-body p-4">

                    <h2 class="fw-bold mb-3">
                        🌍 {{ $destination->name }}
                    </h2>

                    <p class="text-muted mb-4">
                        {{ $destination->description }}
                    </p>

                    <div class="row mb-3">
                        <div class="col-md-6 mb-2">
                            <strong>📍 Lokasi:</strong><br>
                            <span class="badge bg-secondary">
                                {{ $destination->location }}
                            </span>
                        </div>

                        <div class="col-md-6 mb-2">
                            <strong>📅 Hari Buka:</strong><br>
                            <span class="badge bg-primary">
                                {{ $destination->working_days }}
                            </span>
                        </div>

                        <div class="col-md-6 mb-2">
                            <strong>⏰ Jam Operasional:</strong><br>
                            {{ $destination->working_hours }}
                        </div>

                        <div class="col-md-6 mb-2">
                            <strong>💰 Harga Tiket:</strong><br>
                            <span class="text-success fw-bold fs-5">
                                Rp {{ number_format($destination->ticket_price, 0, ',', '.') }}
                            </span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">
                            ← Kembali
                        </a>
                        <a href="{{ url('destination') }}" class="btn btn-primary">
                            Lihat Semua Destinasi
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection