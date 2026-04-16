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

    <h3 class="fw-bold text-primary mb-1">User Management</h3>

    <form method="GET" action="{{route('Attraction.index')}}" class="d-flex gap-2">
        <input type="text" name="search" class="form-control" placeholder="Search...">
        <button class="btn btn-secondary">Search</button>
    </form>

    <a href="{{route('Attraction.create')}}" class="btn btn-success">
        Add Attraction
    </a>

</div> 
    
    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>description</th>
                   <th>action</th>

                </tr>   
            </thead>
            <tbody>
    @foreach($Attraction as $d)
    <tr>
        <td>{{$d->id}}</td>
        <td>{{ $d->name }}</td>
        <td>{{ $d->description }}</td>
        
        <td>
            <div class="d-flex gap-2 justify-content-center">

                <form action="{{route('Attraction.delete',$d->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin hapus {{$d->name}}?')">
                        Delete
                    </button>
                </form>

                <a href="{{route('Attraction.edit',$d->id) }}" 
                   class="btn btn-warning btn-sm">
                    Edit
                </a>
            </div>
        </td>
    </tr>
    @endforeach
</tbody>

<div class="mt-3 d-flex justify-content-center">
    {{ $Attraction->links('pagination::bootstrap-5') }}
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