@extends("master")

@section("content")

<form action="/destinations/{{$destination->id}}/update" method="post" class="form-floating">
    @csrf
    @method("put")
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatinginput" placeholder="Asia Heritage" name="name" value="{{$destination->name}}">
        <label for="floatinginput">Nama Destinasi</label>
    </div>
    <div class="form-floating">
        <textarea name="description" id="" class="form-control" placeholder="Description">{{$destination->description}}></textarea>
        <label for="floatinginput">Description</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatinginput" placeholder="Pekanbaru" name="location"value="{{$destination->location}}">
        <label for="floatinginput">Lokasi</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatinginput" placeholder="100000" name="ticket_price"value="{{$destination->ticket_price}}">>
        <label for="floatinginput">Harga Tiket</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatinginput" placeholder="08.00 - 17.00" name="working_hours"value="{{$destination->working_hours}}">>
        <label for="floatinginput">Jam Operasional</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatinginput" placeholder="Senin - Minggu" name="working_days"value="{{$destination->working_days}}">>
        <label for="floatinginput">Hari Operasional</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form> 
   
    
@endsection