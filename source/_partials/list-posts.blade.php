<div class="posts">
    @foreach($pagination->items as $post)
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

        <footer class="page-footer">
            <nav class="pagination">

                @if($previous = $pagination->previous)
                    <a class="prev" href="{{ $previous }}">
                        <span class="lnr lnr-arrow-left"></span> Previous
                    </a>
                @endif

                @if($next = $pagination->next)
                    <a class="next" href="{{ $next }}">Next
                        <span class="lnr lnr-arrow-right"></span>
                    </a>
                @endif
            </nav>
        </footer>

</div>