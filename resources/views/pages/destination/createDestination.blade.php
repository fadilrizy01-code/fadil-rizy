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

<form action="/destinations" method="post" class="form-floating">
    @csrf

<div class="form-floating mb-3">
    <input type="file" class="form-control" id="floatinginput" placeholder="image" name="image" value="{{old('image')}}" accept=".jpg,.jpeg,.png">
    <label for="floatinginput">Gambar Destinati</label>
    @error('image')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror    
    </div>    

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatinginput" placeholder="Asia Heritage" name="name">
        <label for="floatinginput">Nama Destinasi</label>
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating">
        <textarea name="description" id="" class="form-control" placeholder="Description"></textarea>
        <label for="floatinginput">Description</label>
        @error('description')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatinginput" placeholder="Pekanbaru" name="location">
        <label for="floatinginput">Lokasi</label>
        @error('location')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatinginput" placeholder="100000" name="ticket_price">
        <label for="floatinginput">Harga Tiket</label>
        @error('tiket_price')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatinginput" placeholder="08.00 - 17.00" name="working_hours">
        <label for="floatinginput">Jam Operasional</label>
        @error('working_hours')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatinginput" placeholder="Senin - Minggu" name="working_days">
        <label for="floatinginput">Hari Operasional</label>
        @error('working_days')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> 
   
@endsection