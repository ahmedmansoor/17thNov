@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- create form -->
                <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="text" name="postname">
                    <input type="text" name="detail">
                    <input type="file" name="image">
                    <input type="submit" value="SUBMIT">
                </form>
                <!-- table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">name</th>
                            <th scope="col">detail</th>
                            <th scope="col">image</th>
                            <th scope="col">create by</th>
                            <th scope="col">view</th>
                            <th scope="col">edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post->name}}</th>
                            <td>{{$post->detail}}</td>
                            <td><img src="{{asset('/storage/postfolder/'.$post->image)}}" width="40" height="40"></td>
                            <td>{{$post->users->name}}</td>
                            <td><a href="{{route('post.show',['id'=>$post->id])}}">View</a></td>
                            <td><a href="{{route('post.edit',['id'=>$post->id, 'mansoor'=>0])}}">Edit</a></td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection