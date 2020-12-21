<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="text-gray-900 font-sans antialiased">
        @yield('body')
    </body>
</html>




<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <title>{% if page.title %}{{ config.title }} - {{ page.title }}{% else %}{{ config.title }}{% endif %}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="referrer" content="always">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    <meta name="description" content="{{ $page->description }}">
    <title>{{ $page->title }}</title>
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

    <!-- Enable responsiveness on mobile devices-->
    <!-- viewport-fit=cover is to support iPhone X rounded corners and notch in landscape-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, viewport-fit=cover">

    <!-- Standard meta tags -->
    <meta name="author" content="Leo Oliveira">
    <meta name="description" content="Blog from leo Oliveira">

    <!-- Open Graph Tags -->
    <meta property="og:site_name" content="{{ $page->title }}">


{{--    <meta property="og:title" content="{{ $page->title }}">--}}
{{--    <meta property="og:url" content="{{ get_url(path=page.path, trailing_slash=false) }}">--}}
{{--    <meta property="og:description" content="{{ page.summary | markdown(inline=true) }}">--}}

{{--    {% if page.extra.banner_path %}--}}
{{--    <meta property='og:image' content="{{ resize_image(path=page.extra.banner_path, width=1200, height=627, op="fill", format="auto", quality=75) }}"/>--}}
{{--    <meta property='og:image:width' content="1200"/>--}}
{{--    <meta property='og:image:height' content="627"/>--}}
{{--    {% endif %}--}}


{{--    <meta property="og:type" content="article">--}}
{{--    <meta property="article:published_time" content="{{ page.date | date(format="%Y-%m-%d") }}">--}}

{{--    {% if page.updated %}--}}
{{--    <meta property="article:modified_time" content="{{ page.updated | date(format="%Y-%m-%d") }}">--}}
{{--    {% endif %}--}}

{{--    {% if page.extra.author_url %}--}}
{{--    <meta property="article:author" content="{{ page.extra.author_url }}">--}}
{{--    {% endif %}--}}

{{--    {% for tag in page.taxonomies.tags %}--}}
{{--    <meta property="article:tags" content="{{ tag }}">--}}
{{--    {% endfor %}--}}

{{--    {% else %}--}}
{{--    <meta property="og:type" content="website">--}}
{{--    <meta property="og:url" content="{{ get_url(path="", trailing_slash=false) }}">--}}
{{--    {% endif %}--}}

    <!-- Feeds -->
{{--    <link rel="alternate" type={% if config.feed_filename == "atom.xml" %}"application/atom+xml"{% else %}"application/rss+xml"{% endif %} title="RSS" href="{{ get_url(path=config.feed_filename) | safe }}">{% endif %}--}}

    <!-- Google Analytics -->
{{--    <script async src="//www.googletagmanager.com/gtag/js?id={{ config.extra.google_analytics.id }}"></script>--}}
{{--    <script>--}}
{{--        window.dataLayer = window.dataLayer || [];--}}
{{--        function gtag() {--}}
{{--            dataLayer.push(arguments);--}}
{{--        }--}}
{{--        gtag('js', new Date());--}}
{{--        gtag('config', '{{ config.extra.google_analytics.id }}');--}}
{{--    </script>--}}

</head>

<body class="single">

{{--<header class="header">--}}
{{--    <nav class="nav">--}}
{{--        <ul class="menu">--}}
{{--            {% block sidebar_nav %}--}}
{{--            {% for link in config.extra.links %}--}}
{{--            <li><a href="{{ link.url }}">{{ link.name }}</a></li>--}}
{{--            {% endfor %}--}}
{{--            {% endblock sidebar_nav %}--}}
{{--        </ul>--}}
{{--    </nav>--}}
{{--</header>--}}


<div class="profile">
    <section id="wrapper">
        <header id="header">
            <a href="http://localhost:1313/about">
                <img id="avatar" class="2x" src="https://avatars0.githubusercontent.com/u/17799292?s=460&amp;u=4d2fe6037c513cdb1e5a4287d27056956460d05e&amp;v=4">
            </a>
            <h1>{{ $page->title }}</h1>
            <h2>Web Developer</h2>
        </header>
    </section>
</div>

<main class="main">

    <div class="posts">
{{--        for--}}
        <article class="post-entry">
           dfgdf
        </article>
{{--  endfor--}}

        <footer class="page-footer">
            <nav class="pagination">
                <a class="prev" href=""><span class="lnr lnr-arrow-left"></span> Previous</a>
                <a class="next" href="">Next <span class="lnr lnr-arrow-right"></span></a>
            </nav>
        </footer>
    </div>

</main>

<footer class="footer">
    <span>
        &copy; {{ date('Y') }}
        <a href="{{ $page->getUrl() }}">{{ $page->title }}</a>
    </span>
    <span>&middot;</span>
    <span>Powered by <a href="https://jigsaw.tighten.co" rel="noopener" target="_blank">Jigsaw</a>️</span>
</footer>
{% endblock body %}
</body>
</html>
