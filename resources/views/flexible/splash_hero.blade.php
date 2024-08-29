<section
  class="hero flex items-center bg-blue-800 pb-52 pt-32 text-white"
  style="
    background: 
      radial-gradient(circle at bottom right, rgb(46 150 255) 0%, rgba(255, 255, 255, 0) 70%), 
      rgba(30, 64, 175, 1);
  "
>
  <div class="container">
    <div @class([
        'prose max-w-none md:prose-2xl text-white',
        'prose-headings:font-joly-headline prose-headings:leading-none prose-headings:text-[clamp(2.25rem,1.4674rem+3.913vw,4.5rem)] prose-headings:font-bold prose-headings:tracking-tighter prose-headings:text-white prose-headings:mb-0',
        'prose-p:leading-normal prose-p:max-w-2xl',
    ])>
      {!! get_sub_field('copy') !!}
    </div>
  </div>
</section>
