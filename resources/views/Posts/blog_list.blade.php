@extends('layouts.blog_app')

@section('blog_content')
<!-- Header Section Begin -->
<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="/"><h1>jong's laravel Blog</h1></a>
        </div>
        <div class="nav-menu">
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="active"><a href="/posts">Posts</a>
                        <ul class="sub-menu">
                            <li><a href="/posts">ViewPosts</a></li>
                            <li><a href="/posts/create">Create</a></li>
                        </ul>
                    </li>
            </nav>
            <!-- <div class="nav-right search-switch">
                <i class="fa fa-search"></i>
            </div> -->
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->

<div style="text-align: center; margin-top:5%; margin-bottom:5%;">
@foreach($postlist as $post)
<div  style="margin: auto;">
    <a href="/posts/{{ $post->id }}">
    <h2>{{ $post->title }}</h2>
    <p style="text-align: center">{{ $post->body }}</p>
    </a>
</div>
@endforeach

</div>
@endsection
