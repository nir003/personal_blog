<?php
/**
 * Created by PhpStorm.
 * User: Nirjhor
 * Date: 7/27/2018
 * Time: 2:24 AM
 */
?>

{{--Bootstrap Default navbar --}}
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item   {{Request::is('/') ? "active" : ""}}">
                    <a class="nav-link" href="{{url('/')}}">Home </a>
                </li>
                <li class="nav-item {{Request::is('about') ? "active" : ""}}">
                    <a class="nav-link" href="{{url('about')}}">About</a>
                </li>
                <li class="nav-item {{Request::is('contact') ? "active" : ""}}">
                    <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
                <li class="nav-item {{Request::is('posts/create') ? "active" : ""}}">
                    <a class="nav-link" href="{{url('posts/create')}}">New Post</a>
                </li>
                <li class="nav-item {{Request::is('posts') ? "active" : ""}}">
                    <a class="nav-link" href="{{url('posts')}}">All Post</a>
                </li>
                <li class="nav-item {{Request::is('categories') ? "active" : ""}}">
                    <a class="nav-link" href="{{url('categories')}}">All Post</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
            {{--            <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>--}}
        </div>
    </nav>
</div>

