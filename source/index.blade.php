---
pagination:
    collection: posts
    perPage: 3
---
@extends('_layouts.master')

@section('body')
    <div class="profile">
        <section id="wrapper">
            <header id="header">
                <a href="http://localhost:1313/about">
                    <img id="avatar" class="2x"
                         src="https://avatars0.githubusercontent.com/u/17799292?s=460&amp;u=4d2fe6037c513cdb1e5a4287d27056956460d05e&amp;v=4"/>
                </a>
                <h1>{{ $page->title }}</h1>
                <h2>Web Developer</h2>
            </header>
        </section>
    </div>

    <main class="main">
        @include('_partials.list-posts')
    </main>

@endsection
