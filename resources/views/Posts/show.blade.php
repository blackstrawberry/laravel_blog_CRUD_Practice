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
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/posts">Posts</a>
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
<div  style="margin: auto;">
    <h2>{{ $post->title }}</h2>
    <hr>
    <p style="text-align: center">{{ $post->body }}</p>
    <!-- <button type="button"  onclick="location.href='/posts/{{ $post->id }}/edit'" >수정하기</button> -->
    <form class="contact-form">
        <button type="button"  onclick="location.href='/posts/{{ $post->id }}/edit'" >수정하기</button><button type="button" style="margin-left:10px;">삭제하기</button>
    </form>
    
</div>
</div>
@endsection
