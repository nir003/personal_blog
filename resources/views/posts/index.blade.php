@extends('main')
@section('title','All Posts')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <h1>All posts</h1>
        </div>
        <div class="col-md-2">
            <a href="{{url('posts/create')}}" class="btn btn-block btn-lg btn-primary">Create new post</a>
        </div>

    </div>
    <div class="row">
        <div class="col-md 12">
            <hr>
        </div>
    </div>


    <div class="row">
        <div class="col-md 12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Title</th>
                <th>Post Body</th>
                <th>Created at</th>
                <th></th>
                </thead>
                @foreach($posts as $post)
                    <tbody>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>
                        <a href="" class="btn btn-default">View</a>
                        <a href="" class="btn btn-primary">Edit</a>
                    </td>
                    </tbody>

                @endforeach
            </table>



        </div>
    </div>

    <center>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6">
                <div class="text-center">
                    {!! $posts->links() !!}
                </div>
            </div>
        </div>

    </center>







@endsection