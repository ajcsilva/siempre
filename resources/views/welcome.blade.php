@extends('layouts.app')

@section('content')
  @push('styles')
    <link
      href="https://unpkg.com/@highlightjs/cdn-assets@11.7.0/styles/github.min.css"
      rel="stylesheet"
    >
    <style>
      main p code {
        padding: 0.075rem 0.25rem;
        background: var(--wp--preset--color--indigo-500);
        color: white;
      }

      main td code {
        padding: 0.075rem 0.25rem;
        background: var(--wp--preset--color--gray-200);
        color: black;
      }
    </style>
  @endpush

  <h1 class="mb-6 flex items-center gap-6 text-4xl font-bold">
    <x-icon-radicle class="h-24 w-24" />
    <b>Welcome to Radicle</b>
  </h1>

  <p class="my-6"><x-button href="https://roots.io/radicle/docs/installation/">Radicle Docs</x-button></p>
  <p class="my-6">This route is used for demonstration purposes. It is registered from <code>routes/web.php</code> and
    the template is located at <code>resources/views/welcome.blade.php</code>.</p>

  <h2 class="my-6 text-2xl font-bold">Components</h2>
  <p class="my-6">Components live in the <code>resources/views/components</code> directory.</p>

  <h3
    class="my-4 text-xl font-bold"
    id="buttons"
  >Buttons</h3>
  <p class="my-4">The <code>core/button</code> block is rendered with the <code>x-button</code> Blade component.</p>

  <x-table
    :columns="['Attribute', 'Default', 'Options']"
    :rows="[
        ['<code>variant</code>', '<code>primary</code>', '<code>primary</code>, <code>outline</code>'],
        [
            '<code>size</code>',
            '<code>base</code>',
            '<code>xs</code>, <code>sm</code>, <code>base</code>, <code>lg</code>',
        ],
        ['<code>element</code>', '<code>a</code>', '<code>a</code>, <code>button</code>'],
    ]"
  />

  <div class="my-6 bg-gray-100 p-6">
    <pre class="mb-6"><code class="language-blade">&lt;x-button href="#"&gt;Button&lt;/x-button&gt;</code></pre>
    <x-button href="#">Button</x-button>

    <pre class="my-6"><code class="language-blade">&lt;x-button variant="outline" href="#"&gt;Button&lt;/x-button&gt;</code></pre>
    <x-button
      href="#"
      variant="outline"
    >Button</x-button>
  </div>

  <h3
    class="my-6 text-xl font-bold"
    id="modals"
  >Modals</h3>
  <p class="my-4">The <code>radicle/modal</code> block is rendered with the <code>x-modal</code> Blade component.</p>

  <div class="relative my-6 bg-gray-100 p-6">
    <pre class="mb-6"><code class="language-blade">&lt;x-modal title="Modal Title"&gt;
    &lt;x-slot name="button"&gt;Open modal&lt;/x-slot&gt;
    Example modal
&lt;/x-modal&gt;</code></pre>

    <x-modal title="Modal Title">
      <x-slot name="button">Open modal</x-slot>
      Example modal
    </x-modal>
  </div>

  @push('scripts')
    <script
      defer
      src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"
    ></script>
    <script
      defer
      src="https://unpkg.com/highlightjs-blade/dist/blade.min.js"
    ></script>
    <script>
      document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre code').forEach((el) => {
          hljs.highlightElement(el);
        });
      });
    </script>
  @endpush
@endsection
