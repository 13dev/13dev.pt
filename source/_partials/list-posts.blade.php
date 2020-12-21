<div class="posts">
    @foreach($posts as $post)
        <article class="post-entry">
            <header class="entry-header">
                <h2>{{ $post->title }}</h2>
            </header>

            @if($post->summary)
            <section class=entry-content>
                {{ $post->summary }}
            </section>
            @endif

            <footer class="entry-footer">
                <time>{{ \Carbon\Carbon::createFromTimestamp($post->date)->format('d M Y') }}</time>
            </footer>
            <a class="entry-link" href="{{ $post->getUrl() }}"></a>
        </article>
    @endforeach

    @if(count($posts) > 3)
        <footer class="page-footer">
            <nav class="pagination">
                @if($page->getPrevious())
                    <a class="prev" href="{{ $page->getPrevious()->getPath() }}">
                        <span class="lnr lnr-arrow-left"></span> Previous
                    </a>
                @endif

                @if($page->getNext())
                    <a class="next" href="{{ $page->getNext()->getPath() }}">Next
                        <span class="lnr lnr-arrow-right"></span>
                    </a>
                @endif
            </nav>
        </footer>
    @endif
</div>