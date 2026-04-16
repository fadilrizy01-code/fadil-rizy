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
<div class="card m-5 p-3">
    <form action="{{route('Attraction.store')}}" method="post">
        @csrf 
    <div class="col-12">
        <label for="destination_id" class="form-label">Desatination</label>
        <select id="destination_id" name="destination_id" class="form-control"  required>
            <option value="">Pilih Destinasi</option>
            @foreach ($destinations as $destination)
                <option value="{{ $destination->id }}" {{ old ('destination_id') ==
                $destination->id ? 'selected' : '' }}> 
                    {{ $destination->name }}

                </option>
            @endforeach
    </select>
    @error('destination_id')
        <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

       <div class="form-floating mb-3">
    <input type="text" class="form-control" name="name">
    <label>Nama</label>
    @error('name')
            <div class="text-danger">{{$message}}</div>
            
        @enderror
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" name="description">
    <label>Description</label>
    @error('decription')
            <div class="text-danger">{{$message}}</div>
            
        @enderror
</div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection