@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row " >
        <div class="col-3">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/2048px-Instagram_logo_2016.svg.png" alt="" style="width:120px;">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-center">
                <h3> {{ $user->name }} </h3>
                <div> <a href="{{ route('post.create') }}">Add Post</a> </div>
            </div>
            <div class="d-flex">
                <div class="p-2"><strong> {{$user->posts->count()}} </strong> posts</div>
                <div class="p-2"><strong>23k</strong> followers</div>
                <div class="p-2"><strong>231</strong> following</div>
            </div>
            <div class="pt-3" style="font-weight:bold;">{{ $user->profile->title }}</div>
            <div> {{ $user->profile->description }} </div>
            <div> {{ $user->profile->url }} </div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img class="w-100" src="https://i.pinimg.com/736x/f2/15/72/f215726871e4f437570bb725d26c5ae1.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://static2.bigstockphoto.com/2/3/3/large2/332817877.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://thumbs.dreamstime.com/b/code-logo-digital-company-letter-d-consist-left-curly-brace-right-parenthesis-open-close-brackets-programming-symbols-163651620.jpg" alt="">
        </div>

        @foreach ($user->posts as $post)
            <div class="col-4">
                <a href="/p/{{$post->id}}">
                    <img class="w-100" src="/storage/{{$post->image}}" alt="">
                </a>
            </div>
        @endforeach

    </div>
</div>
@endsection
