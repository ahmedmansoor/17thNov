@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(isset($posts))
            @if(Count($posts)>0)
            @foreach($posts as $post)
            <div class="card">
                {{$post->name}}
                <br>
                @foreach($post->comments as $comment)

                {{$comment->comment}}<br>
                @endforeach


            </div>
            @endforeach
            @else
            <h1>No data found </h1>
            @endif
            @endif
        </div>
        {{ Auth::user()->id }}
    </div>
</div>
@endsection