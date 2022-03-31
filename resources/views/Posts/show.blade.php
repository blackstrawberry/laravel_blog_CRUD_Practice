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
<div style="difplay: flex; text-align: center; margin: 10% 15% 10% 15%;  justify-content: center;">
<div  style="margin: auto;">
    <h2>{{ $post->title }}</h2>
    <hr>
    <p style="height: 200px; display:flex; flex-direction: column; justify-content: center; align-item:center;">{{ $post->body }}</p>
    <!-- <button type="button"  onclick="location.href='/posts/{{ $post->id }}/edit'" >수정하기</button> -->
    <div style="display: flex; justify-content: center;">
        <form class="contact-form">
            <button type="button"  onclick="location.href='/posts/{{ $post->id }}/edit'" >수정하기</button>
        </form>
        <form action="/posts/{{ $post->id }}" class="contact-form" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" style="margin-left:10px;">삭제하기</button>
        </form>
    </div>
</div>
</div>
@endsection
