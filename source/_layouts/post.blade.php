@extends('_layouts.master')

@section('body')
    <div class="single">
        <main class="main">


            <article class="post-single">
                <header class="post-header">
                    <h1 class="post-title">{{ $page->title }}</h1>
                    <div class="post-meta">
                        <span class="post-date">Published: <time>{{ $page->title }}</time></span>
                        <span>&middot;</span>
                        <span class="post-reading-time">{{ $page->title }} min read</span>
                    </div>
                </header>
                <div class="post-content">{!! $page->getContent() !!}</div>
                <footer class="post-footer">

                    {{--        {% if page.taxonomies.tags %}--}}
                    {{--        <ul class="post-tags">--}}
                    {{--            {% for tag in page.taxonomies.tags %}--}}
                    {{--            <li><a href="{{ get_taxonomy_url(kind="tags", name=tag) | safe }}">{{ tag }}</a></li>--}}
                    {{--            {% endfor %}--}}
                    {{--        </ul>--}}
                    {{--        {% endif %}--}}
                </footer>
            </article>
        </main>
    </div>
@endsection