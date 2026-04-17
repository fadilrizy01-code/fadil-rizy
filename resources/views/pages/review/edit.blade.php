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
    <form action="{{route('Review.update',$review->id)}}" method="post">
        @csrf 
        @method('put')
    <div class="col-12">
        <label for="attraction_id" class="form-label">Attraction</label>
        <select id="attraction_id" name="attraction_id" class="form-control"  required>
            <option value="">Pilih Destinasi</option>
            @foreach ($Attraction as $attraction)
                <option value="{{ $attraction->id }}" {{ old ('attraction_id')||$review->attraction->id  ==
                $attraction->id ? 'selected' : '' }}> 
                    {{ $attraction->name }}

                </option>
            @endforeach
    </select>
    @error('attraction_id')
        <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

       <div class="form-floating mb-3">
    <input type="text" class="form-control" name="reviewer_name" value="{{$review->reviewer_name}}">
    <label>Nama</label>
    @error('reviewer_name')
            <div class="text-danger">{{$message}}</div>
            
        @enderror
</div>

<div class="form-floating mb-3">
    <input type="text" class="form-control" name="comment" value="{{$review->comment}}">
    <label>comment</label>
    @error('comment')
            <div class="text-danger">{{$message}}</div>
            
        @enderror
</div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('Review.index')}}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection