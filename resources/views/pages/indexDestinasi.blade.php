@extends("master")


@section('content')
<div class="container">

    @if (@session("success"))
        <div class="alert alert-success">
            {{ session("success") }}
        </div>
    @endif
    
       <div class="d-flex justify-content-between mb-3">
            <h1>Daftar Destinasi</h1>
            <form action="/destinations" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{request('search') }}
                    ">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
             </div>
        </form>
        </div>

       <a href="/destinations/create" class="btn btn-succes"><button>Add Destination</button></a>

       <div class="mt-3 d-flex justify-content-center">
        {{ $destinations->links('pagination::bootstrap-5')}}

       </div>
       
    
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
                <td>{{ $d->id }}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->description}}</td>
                <td>{{$d->location}}</td>
                <td> Rp {{number_format($d->ticket_price,0,",",".")}}</td>
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
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure delete {{$d->name}}?')">
                            Delete</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody> 
    </table>        

</div>

@endsection

@push('scripts')
<script>

    class alert {
        constructor(message) {
            this.message = message;
        }

        show() {
            alert(this.message);

        }

    }
    let alertElement = document.querySelector('.alert');
    if (alertElement) {
        setTimeout(() => {
            alertElement.style.transition = "opacity 3s ease-out";
            alertElement.style.opacity = "0";
            setTimeout(() => {
                alertElement.remove();
            }, 3000);
    },3000)    

    }
</script>
    
@endpush