@props(['name' => ''])

@if (have_rows($name))
  @while (have_rows($name))
    @php the_row() @endphp
    @includeIf('flexible.' . get_row_layout())
  @endwhile
@endif
