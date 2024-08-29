<section class="bg-gray-100 py-24">
  <h2 class="font-joly-headline text-center text-[clamp(2.25rem,1.7283rem+2.6087vw,3.75rem)] font-bold leading-none">
    {{ get_sub_field('header') }}
  </h2>

  @if (have_rows('body'))
    @while (have_rows('body'))
      @php the_row() @endphp
      @if (get_row_layout() == 'price_table')
        <div class="mt-12 flex flex-col items-center gap-1 sm:flex-row sm:items-end sm:justify-center">
          <div class="font-joly-headline text-6xl font-bold">
            {{ get_sub_field('price') }}
          </div>
          <div class="font-medium text-slate-600">
            {{ get_sub_field('subscript') }}
          </div>
        </div>
        <ul class="mx-auto mt-8 max-w-md divide-y px-4">
          @foreach (get_sub_field('items') as $item)
            <li class="flex items-center py-3">
              <div class="w-12 shrink-0">
                <x-icon
                  @class(['h-8 w-8', 'text-slate-600' => $item['icon'] == 'checkmark'])
                  :name="$item['icon']"
                />
              </div>
              <div class="font-medium">
                {{ $item['item'] }}
              </div>
            </li>
          @endforeach
        </ul>
      @elseif(get_row_layout() == 'divider')
        <div class="mt-16 text-center text-sm font-bold uppercase tracking-wider text-slate-700">
          {{ get_sub_field('text') }}
        </div>
      @endif
    @endwhile
  @endif
</section>
