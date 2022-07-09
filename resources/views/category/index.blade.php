@extends('layouts.main')

@section('content')

<div id="main-wrapper" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 471.5px;">
        <div class="main section" id="main" name="Main Posts">
            <div class="widget Blog" data-version="2" id="Blog1">
                <div class="blog-posts hfeed container index-post-wrap">
                    <div class="grid-posts">

                        @foreach($categories as $category)

                        <div>
                            <a href="{{ route('category.post.index', $category->id) }}">
                                {{ $category->title }}
                            </a>
                        </div>

                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
