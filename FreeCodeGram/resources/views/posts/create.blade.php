@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="caption" class="col-md-4 col-form-label text-md-start"> Image Caption </label>
                    
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>
                    
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="image" class="col-md-4 col-form-label text-md-start"> Post image </label>                    
                    <input type="file" class="form-control-file" id="image" name="image">
                    
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            {{-- <input type="submit" class="btn btn-primary"> </input> --}}
            <button type="submit" class="ml-5 w-25 btn btn-primary" > Add New Post </button>
        </div>



    </form>
</div>
@endsection
