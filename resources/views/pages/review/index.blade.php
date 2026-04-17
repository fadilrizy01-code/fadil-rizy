@extends('master')

@section('content')
<div class="glass">

    {{-- ALERT SUCCESS --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">

    <h3 class="fw-bold text-primary mb-1">Data Review</h3>

    <form method="GET" action="{{route('Review.index')}}" class="d-flex gap-2">
        <input type="text" name="search" class="form-control" placeholder="Search...">
        <button class="btn btn-secondary">Search</button>
    </form>

    <a href="{{route('Review.create')}}" class="btn btn-success">
        +Add
    </a>

</div> 
    
    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>nama</th>
                    <th>komen</th>
                   <th>action</th>

                </tr>   
            </thead>
            <tbody>
    @foreach($review as $d)
    <tr>
        <td>{{$d->id}}</td>
        <td>{{ $d->reviewer_name }}</td>
        <td>{{ $d->comment }}</td>
        
        <td>
            <div class="d-flex gap-2 justify-content-center">

                <a href="{{route('Review.detail',$d->id) }}" 
                   class="btn btn-info btn-sm">
                    detail
                </a>
                <form action="{{route('Review.delete',$d->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin hapus {{$d->name}}?')">
                        Delete
                    </button>
                </form>

                <a href="{{route('Review.edit',$d->id) }}" 
                   class="btn btn-warning btn-sm">
                    Edit
                </a>
            </div>
        </td>
    </tr>
    @endforeach
</tbody>

<div class="mt-3 d-flex justify-content-center">
    {{ $review->links('pagination::bootstrap-5') }}
</div>

</div>
@endsection 

@push('scripts')
<script>
    let alertElement = document.querySelector('.alert');

    if (alertElement){
        setTimeout(() => {
            alertElement.style.transition = "opacity 1s ease-out";
            alertElement.style.opacity = "0";

            setTimeout(() => {
                alertElement.remove();
            }, 1000);

        }, 3000); // tampil 3 detik
    }
</script>
@endpush