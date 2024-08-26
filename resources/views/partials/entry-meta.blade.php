<time
  class="dt-published"
  datetime="{{ get_post_time('c', true) }}"
>
  {{ get_the_date() }}
</time>

<p class="mb-3">
  <span>{{ __('By', 'radicle') }}</span>
  <a
    class="p-author h-card"
    href="{{ get_author_posts_url(get_the_author_meta('ID')) }}"
  >
    {{ get_the_author() }}
  </a>
</p>
