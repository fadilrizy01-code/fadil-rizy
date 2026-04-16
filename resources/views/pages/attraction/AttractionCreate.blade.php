@extends('master')

@section('content')
<div class="card m-5 p-3">
    <form action="{{route('Attraction.store')}}" method="post">
        @csrf

       <div class="form-floating mb-3">
    <input type="text" class="form-control" name="name">
    <label>Nama</label>
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" name="description">
    <label>Description</label>
</div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection