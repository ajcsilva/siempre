<section class="py-24">
  <div class="mx-auto max-w-6xl px-4">
    <div class="grid gap-12 sm:grid-cols-[40%_60%]">
      <div>
        <h2 class="font-joly-headline text-[clamp(2.25rem,1.7283rem+2.6087vw,3.75rem)] font-bold leading-none">
          {{ get_sub_field('header') }}
        </h2>
        <div class="prose">
          {!! get_sub_field('copy') !!}
        </div>
      </div>
      <div>
        <div class="mx-auto max-w-lg">
          {!! gravity_form(get_sub_field('form')['id'], false, true, false, false, true) !!}
        </div>
      </div>
    </div>
  </div>
</section>
