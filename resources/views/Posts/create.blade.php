@extends('layouts.blog_app')

@section('blog_content')
<!-- Contact Section Begin -->
<section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="/posts" class="contact-form" method="post">
                        <h3>포스팅 작성하기</h3>
                        <div class="row">
                            <div class="col-lg-12">
                                <input id="title" name="title" type="text" placeholder="타이틀" required>
                            </div>
                            <div class="col-lg-12">
                                <input id="body" name="body" type="text" placeholder="내용" required>
                            </div>
                        </div>
                        <button type="submit">저장하기</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection