@extends('layouts.main')

@section('content')

<div id="main-wrapper" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 471.5px;">
        <div class="main section" id="main" name="Main Posts">
            <div class="widget Blog" data-version="2" id="Blog1">
                <div class="blog-posts hfeed container index-post-wrap">
                    <div class="grid-posts">

                        @foreach($posts as $post)

                        <div class="blog-post hentry index-post post-0">
                            <div class="post-image-wrap">
                                <a class="post-image-link" href="{{ route('post.show', $post->id) }}">
                                    <img alt="{{ $post->title }}" class="post-thumb" src="{{ 'storage/' . $post->preview_image }}">
                                </a>
                            </div>
                            <div class="post-info">
                                <h2 class="post-title">
                                    <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
                                    @auth()
                                    <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="border-0 bg-transparent">
                                            @if(auth()->user()->likedPosts->contains($post->id))
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                            @else
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                            @endif
                                        </button>
                                    </form>
                                    @endauth
                                    @guest()
                                    <span>{{ $post->liked_users_count }}</span>
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    @endguest
                                </h2>
                                <div class="post-meta">
                                    <span class="post-tag index-post-tag">
                                        {{ $post->category->title }}
                                    </span><i>-</i>
                                    <span class="post-date published" datetime="2018-05-23T20:17:00-07:00">May 23, 2018</span>
                                </div>
                                <a class="read-more" href="{{ route('post.show', $post->id) }}">Read more</a>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
                <div class="blog-pager container" id="blog-pager">

                    {{ $posts->links() }}

                    <!-- <span class="page-of">Page 1 of 11</span>
                    <span class="page-num page-active">1</span>
                    <a class="page-num" href="#" onclick="getPage(2);return false">2</a>
                    <a class="page-num" href="#" onclick="getPage(3);return false">3</a>
                    <span class="page-num page-dots">...</span>
                    <a class="page-num" href="#" onclick="getPage(11);return false">11</a>
                    <a class="page-num page-next" href="#" onclick="getPage(2);return false"></a> -->
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
