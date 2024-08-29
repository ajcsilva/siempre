<div class="section py-24">
  <div class="mx-auto max-w-6xl px-4">
    <h2 class="font-joly-headline text-[clamp(2.25rem,1.7283rem+2.6087vw,3.75rem)] font-bold leading-none">
      {{ get_sub_field('header') }}
    </h2>
    <div class="mt-16 grid max-w-6xl gap-x-24 gap-y-16 sm:grid-cols-2">
      @foreach (get_sub_field('features') as $feature)
        <div class="flex items-start gap-4">
          <div class="flex items-center justify-center rounded-full bg-blue-100 p-2.5">
            <x-icon
              class="h-6 w-6 shrink-0 fill-blue-500 text-blue-500"
              :name="$feature['icon']"
            />
          </div>
          <div>
            <h3 class="text-2xl font-bold">
              {{ $feature['header'] }}
            </h3>
            <p class="mt-2.5 leading-normal">
              {{ $feature['copy'] }}
            </p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>
