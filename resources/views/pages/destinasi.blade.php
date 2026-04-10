@extends("master")

@section('content')

<div class="card m-5 p-3">
    <div class="card-body">
       <div class="bg-primary"><h1>Detail Destinasi</h1></div>

<table class="table table-striped-columns">
        
            <tr>
                <td>Nama: </td>
                <td><p>{{$destinasi['nama']}}</p>  </td>
            </tr>
            <tr>
                <td>Harga: </td>
                <td> <p>{{$destinasi['harga']}}</p> </td>
            </tr>
            <tr>
                <td>Lokasi: </td>
                <td><p>{{$destinasi['lokasi']}}</p> </td>
            </tr>
            <tr>
                <td>Durasi: </td>
                <td><p>{{$destinasi['durasi']}}</p> </td>
            </tr>
            <tr>
                <td>Transportasi: </td>
                <td><p>{{$destinasi['transportasi']}}</p> </td>
            </tr>
            <tr>
                <td>Hotel: </td>
                <td><p>{{$destinasi['hotel']}}</p> </td>
            </tr>
            <tr>
                <td>Rating: </td>
                <td><p>{{$destinasi['rating']}}</p> </td>
            </tr>

            <tr>
                <td>Fasilitas: </td>
                <td>
                @foreach($destinasi['fasilitas'] as $fasilitas)
                    <p>{{$fasilitas}}</p>
                @endforeach
                </td>
            </tr>
        </table>
    </div>
</div>

        






@endsection 


