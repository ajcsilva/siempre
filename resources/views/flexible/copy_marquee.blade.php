<section
  class="copy-marquee flex min-h-screen flex-col"
  style="background: 
    linear-gradient(33deg, rgba(242,196,12,0) 20%, rgba(255, 255, 255, 0.4) 50%, rgba(254,35,2,0) 80%),
    linear-gradient(180deg, rgba(242,196,12,1) 18%, rgba(251,118,13,1) 52%, rgba(254,35,2,1) 75%),
    url(https://grainy-gradients.vercel.app/noise.svg);"
>
  <div
    class="overflow-hidden py-2"
    style="animation-name: fade-in; animation-duration: 1500ms; animation-delay: 3500ms; animation-fill-mode: both;"
  >
    <ul
      class="marquee inline-flex max-w-full space-x-4 whitespace-nowrap py-3 text-sm font-bold sm:text-base md:text-lg"
      x-data="marquee({ speed: 0.33, spaceX: 4 })"
    >
      @foreach (get_sub_field('top_marquee') as $item)
        <li>{{ $item['item'] }}</li>
      @endforeach
    </ul>
  </div>

  <div class="flex flex-1 items-center py-8">
    <div class="container">
      {!! file_get_contents(asset('images/siempre-animation.svg')->path()) !!}

      @if (have_rows('body'))
        @while (have_rows('body'))
          @php the_row() @endphp
          @if (get_row_layout() == 'copy')
            <div
              style="
              animation-name: fade-in; animation-duration: 1500ms; animation-delay: 3500ms; animation-fill-mode: both;
            "
              @class([
                  'prose max-w-none text-[#1e1e1e] font-bold leading-tight px-4 mx-auto sm:leading-normal sm:prose-xl',
                  '[&_p]:mx-auto [&_p]:max-w-3xl [&_p]:uppercase [&_p]:tracking-wider',
                  '[&_a]:text-indigo-500 [&_strong]:text-white',
                  '[&_img]:mx-auto [&_img]:w-full [&_img]:max-w-5xl',
              ])
            >
              {!! get_sub_field('copy') !!}
            </div>
          @elseif(get_row_layout() == 'copy_column')
            <div
              class="mt-6 flex flex-wrap justify-center md:gap-8"
              style="animation-name: fade-in; animation-duration: 1500ms; animation-delay: 3500ms; animation-fill-mode: both;"
            >
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
            <div
              class="mt-6 flex justify-center gap-4"
              style="animation-name: fade-in; animation-duration: 1500ms; animation-delay: 3500ms; animation-fill-mode: both;"
            >
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

  <div
    class="overflow-hidden py-2"
    style="animation-name: fade-in; animation-duration: 1500ms; animation-delay: 3500ms; animation-fill-mode: both;"
  >
    <ul
      class="marquee inline-flex max-w-full space-x-4 whitespace-nowrap py-3 text-sm font-bold sm:text-base md:text-lg"
      x-data="marquee({ speed: 0.33, spaceX: 4 })"
    >
      @foreach (get_sub_field('bottom_marquee') as $item)
        <li>{{ $item['item'] }}</li>
      @endforeach
    </ul>
  </div>
</section>
