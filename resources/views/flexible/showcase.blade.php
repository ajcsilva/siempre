<section class="bg-gray-100">
  <div class="mx-auto max-w-6xl -translate-y-32 px-4">
    <div class="mb-4 text-center text-sm font-medium uppercase tracking-wide text-blue-100">
      {{ get_sub_field('eyebrow') }}
    </div>
    <div class="grid max-w-6xl overflow-hidden rounded-xl bg-white shadow md:grid-cols-[60%_40%]">
      <div class="order-2 flex h-full flex-col justify-center p-6 md:order-1 md:p-12">
        <div class="flex flex-wrap gap-2.5">
          @foreach (get_sub_field('labels') as $label)
            <div class="grow-0 rounded-full bg-blue-100 px-2 py-1 text-[10px] font-bold text-blue-800">
              {{ $label['label'] }}
            </div>
          @endforeach
        </div>
        <h2 class="mt-2 text-4xl font-bold md:text-6xl">
          {{ get_sub_field('header') }}
        </h2>
        <div class="prose mt-4 font-medium leading-normal text-slate-800 sm:text-lg">
          {!! get_sub_field('copy') !!}
        </div>
        <div class="mt-8 flex flex-col flex-wrap items-center gap-y-4 sm:flex-row sm:items-start">
          @foreach (get_sub_field('stats') as $stat)
            <div class="flex-1 text-center sm:text-left">
              <div class="text-3xl font-bold">{{ $stat['stat'] }}</div>
              <div class="mt-1 text-xs font-bold uppercase leading-none tracking-wide text-blue-900">
                {{ $stat['label'] }}
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="order-1 md:order-2">
        @if (get_sub_field('image'))
          {!! wp_get_attachment_image(get_sub_field('image')['ID'], 'large', false, ['class' => 'block']) !!}
        @endif
      </div>
    </div>
  </div>
</section>
