@extends('layouts.main')

@section('content')

<div id="main-wrapper" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
        <div class="main section" id="main" name="Main Posts">
            <div class="widget Blog" data-version="2" id="Blog1">
                <div class="blog-posts hfeed container item-post-wrap">
                    <div class="blog-post hentry item-post">
                        <div class="post-item-content">
                            <script type="application/ld+json">
                                {
                                    "@context": "http://schema.org",
                                    "@type": "BlogPosting",
                                    "mainEntityOfPage": {
                                        "@type": "WebPage",
                                        "@id": "https://nitro-soratemplates.blogspot.com/2018/05/successful-analysis-can-become-key-to_23.html"
                                    },
                                    "headline": "Successful analysis can become the key to your business success",
                                    "description": "Lorem Ipsum is simply dummy text of the printing and typesetting  industry. Lorem Ipsum has been the industry\u0026#39;s standard dummy text ever...",
                                    "datePublished": "2018-05-23T20:13:00-07:00",
                                    "dateModified": "2021-11-08T17:02:58-08:00",
                                    "image": {
                                        "@type": "ImageObject",
                                        "url": "https://1.bp.blogspot.com/-cHZ_ZtrRfRA/Xtoi0uZZJLI/AAAAAAAACfw/qNiA0yHdj8I7bsvRCYjJqalxkKm1BJW-gCLcBGAsYHQ/w1200-h630-p-k-no-nu/TY%2BImage%2B%25282%2529.webp",
                                        "height": 630,
                                        "width": 1200
                                    },
                                    "publisher": {
                                        "@type": "Organization",
                                        "name": "Blogger",
                                        "logo": {
                                            "@type": "ImageObject",
                                            "url": "https://lh3.googleusercontent.com/ULB6iBuCeTVvSjjjU1A-O8e9ZpVba6uvyhtiWRti_rBAs9yMYOFBujxriJRZ-A=h60",
                                            "width": 206,
                                            "height": 60
                                        }
                                    },
                                    "author": {
                                        "@type": "Person",
                                        "name": "Sora Blogging Tips"
                                    }
                                }
                            </script>
                            <nav id="breadcrumb"><a href="{{ route('main.index') }}">Home</a><em class="delimiter"></em><a class="b-label" href="https://nitro-soratemplates.blogspot.com/search/label/Business?&amp;max-results=5">Business</a><em class="delimiter"></em><span class="current">Successful analysis can become the key to your business success</span></nav>
                            <script type="application/ld+json">
                                {
                                    "@context": "http://schema.org",
                                    "@type": "BreadcrumbList",
                                    "@id": "#Breadcrumb",
                                    "itemListElement": [{
                                        "@type": "ListItem",
                                        "position": 1,
                                        "item": {
                                            "name": "Home",
                                            "@id": "https://nitro-soratemplates.blogspot.com/"
                                        }
                                    }, {
                                        "@type": "ListItem",
                                        "position": 2,
                                        "item": {
                                            "name": "Business",
                                            "@id": "https://nitro-soratemplates.blogspot.com/search/label/Business"
                                        }
                                    }, {
                                        "@type": "ListItem",
                                        "position": 3,
                                        "item": {
                                            "name": "Successful analysis can become the key to your business success",
                                            "@id": "https://nitro-soratemplates.blogspot.com/2018/05/successful-analysis-can-become-key-to_23.html"
                                        }
                                    }]
                                }
                            </script>
                            <h1 class="post-title">
                                {{ $post->title }}
                            </h1>
                            <div class="post-meta">
                                <span class="post-author"><img alt="Sora Blogging Tips" class="post-author-avatar" src="" target="_blank" title="Sora Blogging Tips">Sora Blogging Tips</a></span>
                                <span class="post-date published" datetime="2018-05-23T20:13:00-07:00">
                                    {{ $date->translatedFormat('F') }}, {{ $date->year }} , {{ $date->format('H:i') }}
                                </span>
                            </div>
                            <div class="post-body post-content">
                                <div class="separator" style="clear: both; text-align: center;">
                                    <a href="https://1.bp.blogspot.com/-cHZ_ZtrRfRA/Xtoi0uZZJLI/AAAAAAAACfw/qNiA0yHdj8I7bsvRCYjJqalxkKm1BJW-gCLcBGAsYHQ/s1600/TY%2BImage%2B%25282%2529.webp" imageanchor="1">
                                        <img border="0" data-original-height="423" data-original-width="640" src="{{ asset('storage/'. $post->main_image) }}">
                                    </a>
                                </div>
                                {!! $post->content !!}
                            </div>
                            <div class="post-labels">
                                <div class="label-head Label">
                                    <a class="label-link" href="https://nitro-soratemplates.blogspot.com/search/label/Business?&amp;max-results=5" rel="tag">Business</a>
                                    <a class="label-link" href="https://nitro-soratemplates.blogspot.com/search/label/Economy?&amp;max-results=5" rel="tag">Economy</a>
                                    <a class="label-link" href="https://nitro-soratemplates.blogspot.com/search/label/Learn?&amp;max-results=5" rel="tag">Learn</a>
                                </div>
                            </div>
                            <div class="post-reactions">
                                <span>Reactions</span>
                                <div class="reactions-inner">
                                    <iframe allowtransparency="true" class="reactions-iframe" frameborder="0" name="reactions" scrolling="no" src=""></iframe>
                                </div>
                            </div>
                            <div class="post-share">
                                <ul class="share-links social social-color">
                                    <li class="facebook"><a class="facebook" href="https://www.facebook.com/sharer.php?u=https://nitro-soratemplates.blogspot.com/2018/05/successful-analysis-can-become-key-to_23.html" onclick="window.open(this.href, 'windowName', 'width=550, height=650, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow"><span>Facebook</span></a></li>
                                    <li class="twitter"><a class="twitter" href="https://twitter.com/share?url=https://nitro-soratemplates.blogspot.com/2018/05/successful-analysis-can-become-key-to_23.html&amp;text=Successful analysis can become the key to your business success" onclick="window.open(this.href, 'windowName', 'width=550, height=450, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow"><span>Twitter</span></a></li>
                                    <li class="pinterest"><a class="pinterest" href="https://www.pinterest.com/pin/create/button/?url=https://nitro-soratemplates.blogspot.com/2018/05/successful-analysis-can-become-key-to_23.html&amp;media=https://1.bp.blogspot.com/-cHZ_ZtrRfRA/Xtoi0uZZJLI/AAAAAAAACfw/qNiA0yHdj8I7bsvRCYjJqalxkKm1BJW-gCLcBGAsYHQ/s1600/TY%2BImage%2B%25282%2529.webp&amp;description=Successful analysis can become the key to your business success" onclick="window.open(this.href, 'windowName', 'width=735, height=750, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow"></a></li>
                                    <li class="linkedin"><a class="linkedin" href="https://www.linkedin.com/shareArticle?url=https://nitro-soratemplates.blogspot.com/2018/05/successful-analysis-can-become-key-to_23.html" onclick="window.open(this.href, 'windowName', 'width=550, height=650, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow"></a></li>
                                    <li class="whatsapp whatsapp-desktop"><a class="whatsapp" href="https://web.whatsapp.com/send?text=Successful analysis can become the key to your business success | https://nitro-soratemplates.blogspot.com/2018/05/successful-analysis-can-become-key-to_23.html" onclick="window.open(this.href, 'windowName', 'width=900, height=550, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow"></a></li>
                                    <li class="whatsapp whatsapp-mobile"><a class="whatsapp" href="https://api.whatsapp.com/send?text=Successful analysis can become the key to your business success | https://nitro-soratemplates.blogspot.com/2018/05/successful-analysis-can-become-key-to_23.html" rel="nofollow" target="_blank"></a></li>
                                    <li class="email"><a class="email" href="mailto:?subject=Successful analysis can become the key to your business success&amp;body=https://nitro-soratemplates.blogspot.com/2018/05/successful-analysis-can-become-key-to_23.html" onclick="window.open(this.href, 'windowName', 'width=500, height=400, left=24, top=24, scrollbars, resizable'); return false;" rel="nofollow"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-footer">
                            <ul class="post-nav">
                                <li class="post-next">
                                    <a class="next-post-link" href="https://nitro-soratemplates.blogspot.com/2018/05/how-good-team-can-positively-influence_23.html" id="Blog1_blog-pager-newer-link" rel="next">
                                        <div class="post-nav-inner"><span>Newer</span>
                                            <p>
                                                How a good team can positively influence your business
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li class="post-prev">
                                    <a class="prev-post-link" href="https://nitro-soratemplates.blogspot.com/2018/05/good-partnerships-can-help-your-company_23.html" id="Blog1_blog-pager-older-link" rel="previous">
                                        <div class="post-nav-inner"><span>Older</span>
                                            <p>
                                                Good partnerships can help your company achieve better results
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="about-author">
                                <div class="avatar-container">
                                    <img alt="Sora Blogging Tips" class="author-avatar" src="//2.bp.blogspot.com/-gpkPtHz0gBk/YXK0ULEF5AI/AAAAAAAAAAQ/cV2tPPMJXQsQcKqnO7-BYd1SIAKAWnGzwCK4BGAYYCw/w100/Sora%2BBlogging%2BTips.jpg">
                                </div>
                                <h3 class="author-name">
                                    <span>Posted by</span><a alt="Sora Blogging Tips" href="https://www.blogger.com/profile/10687789128527805451" target="_blank">
                                        Sora Blogging Tips</a>
                                </h3>
                                <span class="author-description">
                                    <!--Can't find substitution for tag [post.author.aboutMe]-->
                                </span>
                            </div>
                            <div id="related-wrap">
                                <div class="title-wrap">
                                    <h3>Похожие посты</h3>
                                </div>
                                <div class="related-ready">
                                    <ul class="related-posts">

                                        @foreach($relatedPosts as $post)

                                        <li class="related-item item-0">
                                            <div class="post-image-wrap">
                                                <a class="post-image-link" href="{{ route('post.show', $post->id) }}"></a>
                                            </div>
                                            <h2 class="post-title">
                                                <a href="{{ route('post.show', $post->id) }}">
                                                    {{ $post->title }}
                                                </a>
                                            </h2>
                                            <div class="post-meta"><span class="post-tag">Business</span><i>-</i><span class="post-date">May 23, 2018</span></div>
                                        </li>

                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-post-comments comments-system-blogger" style="display: block;">

                        <div class="title-wrap comments-title">
                            <h3>Post a Comment</h3>
                        </div>
                        <section class="comments embed" data-num-comments="0" id="comments">
                            <a name="comments"></a>
                            <h3 class="title">0
                                Comments</h3>
                            <div id="Blog1_comments-block-wrapper">
                            </div>
                            <div class="footer">
                                <div class="comment-form">
                                    <a name="comment-form"></a>
                                    <a href="https://www.blogger.com/comment/frame/4674587706573925964?po=1409561152686896479&amp;hl=en&amp;skin=contempo&amp;blogspotRpcToken=901180" id="comment-editor-src"></a>
                                    <iframe allowtransparency="allowtransparency" class="blogger-iframe-colorize blogger-comment-from-post" frameborder="0" height="78px" id="comment-editor" name="comment-editor" src="https://www.blogger.com/comment/frame/4674587706573925964?po=1409561152686896479&amp;hl=en&amp;skin=contempo&amp;blogspotRpcToken=901180" width="100%" data-resized="true"></iframe>


                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
