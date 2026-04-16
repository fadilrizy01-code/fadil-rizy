@extends('master')

@section('content')
<div class="card m-5 p-3">
    <form action="/users" method="post">
        @csrf

       <div class="form-floating mb-3">
    <input type="text" class="form-control" name="name">
    <label>Nama User</label>
</div>

<div class="form-floating mb-3">
    <input type="email" class="form-control" name="email">
    <label>Email</label>
</div>

<div class="form-floating mb-3">
    <input type="password" class="form-control" name="password">
    <label>Password</label>
</div>

    

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection