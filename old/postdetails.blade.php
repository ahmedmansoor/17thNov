@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Image Details</h1>
            <div class="card">
                <!-- table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">name</th>
                            <th scope="col">detail</th>
                            <th scope="col">image</th>
                            <th scope="col">create by</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">{{$post->name}}</th>
                            <td>{{$post->detail}}</td>
                            <td><img src="{{asset('/storage/postfolder/'.$post->image)}}" width="40" height="40"></td>
                            <td>{{$post->users->name}}</td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection