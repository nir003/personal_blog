<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 7/29/2018
 * Time: 5:28 AM
 */
?>

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
                @foreach($categories as $categorie)
                    <tbody>
                    <td>{{$categorie->id}}</td>
                    <td>{{$categorie->category_name}}</td>

                    <td>{{$categorie->created_at}}</td>
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
                    {!! $categories->links() !!} {{--pagination--}}
                </div>
            </div>
        </div>

    </center>







@endsection
