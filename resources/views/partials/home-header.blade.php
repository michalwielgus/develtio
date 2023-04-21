<div class="hero" style="background-image: url(@if( get_field( 'hero_background' ) ) {!! the_field( 'hero_background' ) !!} @else @asset('images/hero.png') @endif )">
  <div class="hero__wrapper flex flex-col-reverse items-center lg:flex-row lg:items-end px-6 max-w-screen-xl mx-auto h-full md:gap-40">
    <div class="hero__text flex flex-wrap items-center" data-aos="fade-up">
      <h1>
        @if( get_field( 'hero_title' ) )
          {!! the_field( 'hero_title' ) !!}
        @else 
          Ubezpieczenie majątkowe
        @endif
      </h1>
      <p>
        @if( get_field( 'hero_subtitle' ) )
          {!! the_field( 'hero_subtitle' ) !!}
        @else 
          Skontaktuj się z nami i skorzystaj ze specjalnej oferty!
        @endif
      </p>
    </div>
    <div class="hero__form" data-aos="fade-up">
      <p class="hero__form-title">
        @if( get_field( 'form_cta' ) )
          {!! the_field( 'form_cta' ) !!}
        @else 
          Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę
        @endif
      </p>
      @if( get_field( 'form_shortcode' ) )
        @php
          echo do_shortcode( get_field( 'form_shortcode' ) );
        @endphp
      @else 
        Nie ma formularza
      @endif
    </div>
  </div>
</div>