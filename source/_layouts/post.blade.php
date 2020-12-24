<?php
/** @var TightenCo\Jigsaw\Collection\Collection $posts */
/** @var \App\Items\PostItem $page */

print_r($page->getAllParts());
?>

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
                <div class="post-content">
                    {!! $page->getContent() !!}
                </div>
                <footer class="post-footer">
                    <nav class="pagination">

{{--                        @if($page->getAllParts()->getPrevious())--}}
{{--                            <a class="prev" href="{{ $page->getAllParts()->getNext()->getPath() }}">--}}
{{--                                <span class="lnr lnr-arrow-left"></span> Previous--}}
{{--                            </a>--}}
{{--                        @endif--}}

{{--                        @if($next = $pagination->next)--}}
{{--                            <a class="next" href="{{ $next }}">Next--}}
{{--                                <span class="lnr lnr-arrow-right"></span>--}}
{{--                            </a>--}}
{{--                        @endif--}}
                    </nav>

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