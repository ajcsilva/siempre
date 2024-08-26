<form
  class="search-form"
  role="search"
  method="get"
  action="{{ home_url('/') }}"
>
  <label>
    <span class="sr-only">
      {{ _x('Search for:', 'label', 'radicle') }}
    </span>

    <input
      name="s"
      type="search"
      value="{{ get_search_query() }}"
      placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'radicle') !!}"
    >
  </label>

  <x-button>{{ _x('Search', 'submit button', 'radicle') }}</x-button>
</form>
