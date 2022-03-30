@extends('layouts.blog_app')

@section('blog_content')
<!-- Contact Section Begin -->
<section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/posts/{{ $post->id }}" class="contact-form" method="post">
                        @csrf
                        @method('put')
                        <h3>포스팅 수정하기</h3>
                          <div class="row">
                            <div class="col-lg-12">
                                <input id="title" name="title" type="text" placeholder="타이틀" value="{{ $post->title }}" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea id="body" name="body" type="text" placeholder="내용" value="{{ $post->body }}">{{ $post->body }}</textarea>
                            </div>
                        </div>
                        <button type="submit">저장하기</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection