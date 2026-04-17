@extends('master')

@section('content')

    <div class="container">
        <div class="card shadow-lg border-0 rounded-4 mt-5">
            <div class="card-body p-4">
                <h3 class="mb-4 text-center">Detail Atraksi</h3>

                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="reviewer_name" value="{{ $review->reviewer_name }}" readonly>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">comment</label>
                    <textarea class="form-control" id="description" name="comment" rows="4" readonly>{{ $review->comment }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="destination" class="form-label">Atraksi</label>
                    <input type="text" class="form-control" id="destination" name="reviewer_name" value="{{ $review->attraction->name }}" readonly>
                </div>

                <a href="{{route('Review.index')}}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>




@endsection