@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')

        <div class="row">
            <h3> Edit Profile </h3>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row mb-3">
                    <label for="title" class="col-md-4 col-form-label text-md-start"> Title </label>
                    
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}"  autocomplete="title" autofocus>
                    
                    @error('title')
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
                    <label for="description" class="col-md-4 col-form-label text-md-start">  Description </label>
                    
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}"  autocomplete="description" autofocus>
                    
                    @error('description')
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
                    <label for="url" class="col-md-4 col-form-label text-md-start">  URL </label>
                    
                    <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}"  autocomplete="url" autofocus>
                    
                    @error('url')
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
                    <label for="image" class="col-md-4 col-form-label text-md-start"> Profile Image </label>                    
                    <input type="file" class="form-control-file" id="image" name="image" >
                    
                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            {{-- <input type="submit" class="btn btn-primary"> </input> --}}
            <button type="submit" class="ml-5 w-25 btn btn-primary" > Save Profile </button>
        </div>



    </form>
</div>
@endsection
