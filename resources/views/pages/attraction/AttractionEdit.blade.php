@extends('master')

@section('content')

@if ($errors->any()) {
    <div class="alert alert-danger">
        <ul class=" mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
}
    
@endif
<div class="glass">

    <h3 class="fw-bold mb-4">Edit Attraction</h3>

    <form action="{{route('Attraction.update',$Attraction->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control"
                    value="{{ $Attraction->name }}" required>
                    @error('name')
                        <div class="text-danger">{{$message}}</div>
                        
                    @enderror
            </div>

            <div class="col-md-6 mb-3">
    <label>description</label>
    <input type="text" name="description" class="form-control"
        value="{{ $Attraction->description }}" required>
        @error('decription')
            <div class="text-danger">{{$message}}</div>
            
        @enderror
</div>


        <div class="d-flex justify-content-between mt-4">
            <a href="/users" class="btn btn-secondary btn-custom">← Back</a>
            <button type="submit" class="btn btn-success btn-custom">
                Update Attraction
            </button>
        </div>

    </form>

</div>
@endsection