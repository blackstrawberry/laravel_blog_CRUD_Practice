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
                            <li><a href="/create">Create</a></li>
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

<div style=" display: flex; align-items: center; height: 500px;">
<div  style="margin: auto;"><h2>First laravel Project!</h2></div>
</div>
@endsection
