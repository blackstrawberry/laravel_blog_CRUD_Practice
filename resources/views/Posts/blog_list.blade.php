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

<div style=" display: flex; align-items: center; height: 500px;">
<div  style="margin: auto;"><h2>This is Posts Page.</h2></div>
</div>
@endsection
