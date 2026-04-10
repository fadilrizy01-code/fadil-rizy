@extends("master")


@section('content')
<div class="container">
    <a href="/destinations/create" class="btn btn-succes"><button>Add Destination</button></a>
    <center><h1>Daftar Destinasi</h1></center>
    <table class="table table-dark table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Location</th>
                <th>Price</th>
                <th>Working Hours</th>
                <th>Working Days</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($destinations as $d)
            <tr>
                <td><a href="destination/{{$d->id}}">{{$d->id}}</a></td>
                <td>{{$d->name}}</td>
                <td>{{$d->description}}</td>
                <td>{{$d->location}}</td>
                <td>{{$d->ticket_price}}</td>
                <td>{{$d->working_hours}}</td>
                <td>{{$d->working_days}}</td>
                <td>
                        <a href="/detaildestinasi/{{ $d->id }}" class="btn btn-info btn-sm me-1" title="Lihat Detail">
                            Detail
                        </a> 
                        <a href="/destinations/{{$d->id}}/edit" class="btn btn-warning">edit</a>           
                    <form action="/destination/{{$d->id}}" method="post" style="display:inline; ">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure delete{{$d->name}}?')">
                            Delete</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody> 
    </table>        

</div>

@endsection