<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 7/27/2018
 * Time: 3:09 PM
 */
?>

@extends('main')

@section('title','create new posts')

{{--@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection--}}


@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" >
            <h1 style="text-align: center">Create A New Post</h1>
            <hr>
            {!! Form::open(['route' => 'posts.store','data-parsley-validate'=>'']) !!}
                <label>Title: </label>
                <input name="title" type="text" class="form-control" required="">

                <label>Post Body: </label>
                <textarea name="body" class="form-control" rows="8" required=""></textarea>

                <input type="submit" class="btn btn-success form-control" value="Create Post" style="margin-top: 20px">
            {!! Form::close() !!}
        </div>
    </div>

@endsection

{{--
@section('script')
    {!! Html::script('js/parsley.min.js') !!}
@endsection--}}
