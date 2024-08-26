@props(['title', 'class' => null])

<div
  class="{{ $class }} relative"
  x-data="{ open: false }"
  @toggle.window="open = !open"
  x-effect="document.body.classList.toggle('overflow-hidden', open)"
  :aria-expanded="open"
  x-on:keydown.escape="open = false"
>
  @if (isset($button))
    <x-button
      class="{{ $button->attributes->get('class') }}"
      @click="open = !open"
    >
      {{ $button }}
    </x-button>
  @endif

  <div
    class="fixed right-0 top-0 z-50 h-screen w-full bg-black/50"
    x-cloak
    x-data=""
    x-show="open"
  >
    <div
      class="absolute left-4 right-4 top-4 z-30 mx-auto max-w-4xl bg-white p-3"
      x-on:click.away="open = false"
    >
      <h4 class="relative mb-4 flex items-center">
        <span class="text-lg font-bold">{{ $title }}</span>

        <div class="z-40 ml-auto">
          <button
            class="ml-3"
            @click="open = !open"
            x-on:click.stop
          >
            <x-heroicon-o-x-mark class="h-5 w-5" />
          </button>
        </div>
      </h4>
      {{ $slot }}
    </div>
  </div>
</div>
