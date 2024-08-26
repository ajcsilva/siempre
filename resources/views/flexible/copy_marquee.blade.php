<section
  class="copy-marquee flex min-h-screen flex-col"
  style="background: 
    linear-gradient(33deg, rgba(242,196,12,0) 20%, rgba(255, 255, 255, 0.4) 50%, rgba(254,35,2,0) 80%),
    linear-gradient(180deg, rgba(242,196,12,1) 18%, rgba(251,118,13,1) 52%, rgba(254,35,2,1) 75%),
    url(https://grainy-gradients.vercel.app/noise.svg);"
>
  <div class="overflow-hidden py-2">
    <ul
      class="marquee inline-flex max-w-full space-x-4 whitespace-nowrap py-3"
      x-data="marquee({ speed: 0.33, spaceX: 4 })"
    >
      <li class="underline">Element 1</li>
      <li>Element 2</li>
      <li>Absolutely Huge Element 3</li>
      <li>Element 4</li>
      <li>Element 5</li>
    </ul>
  </div>

  <div class="flex flex-1 items-center">
    <div class="container">
      @if (have_rows('body'))
        @while (have_rows('body'))
          @php the_row() @endphp
          @if (get_row_layout() == 'copy')
            <div @class([
                'prose-xl text-[#1e1e1e] font-bold leading-normal',
                '[&_p]:mx-auto [&_p]:max-w-3xl [&_p]:uppercase [&_p]:tracking-wider',
                '[&_a]:text-indigo-500 [&_strong]:text-white',
                '[&_img]:mx-auto',
            ])>
              {!! get_sub_field('copy') !!}
            </div>
          @elseif(get_row_layout() == 'copy_column')
            <div class="mt-6 flex justify-center gap-8">
              @foreach (get_sub_field('copy_column') as $column)
                <div
                  class="relative w-full max-w-[20rem] rounded p-4 pl-12 text-sm font-medium leading-tight tracking-wide text-[#1e1e1e]"
                >
                  <x-icon
                    class="absolute left-3 top-4 w-6 fill-[#1e1e1e]"
                    :name="$column['icon']"
                  />
                  {!! $column['copy'] !!}
                </div>
              @endforeach
            </div>
          @elseif(get_row_layout() == 'icons')
            <div class="mt-6 flex justify-center gap-4">
              @foreach (get_sub_field('icons') as $icon)
                <a
                  class="block hover:[&_svg]:fill-black"
                  href="{{ $icon['link'] }}"
                >
                  <x-icon
                    class="h-6 w-6 fill-[#1e1e1e] transition"
                    :name="$icon['icon']"
                  />
                </a>
              @endforeach
            </div>
          @endif
        @endwhile
      @endif
    </div>
  </div>

  <div class="text-sm font-medium uppercase leading-none tracking-wide">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut praesentium accusantium quod nobis, quibusdam
    perspiciatis soluta ipsam fuga
  </div>
</section>
