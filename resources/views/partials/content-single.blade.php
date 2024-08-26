<article @php(post_class('h-entry'))>
  <header>
    <h1 class="p-name mb-6 text-4xl font-bold">
      {!! $title !!}
    </h1>

    @include('partials.entry-meta')
  </header>

  <div class="e-content mb-8">
    @php(the_content())
  </div>

  @if ($pagination)
    <footer>
      <nav
        class="page-nav"
        aria-label="Page"
      >
        {!! $pagination !!}
      </nav>
    </footer>
  @endif

  @php(comments_template())
</article>
