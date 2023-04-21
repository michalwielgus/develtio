<main>
  <section class="details-section"  style="background-image: url(@if( get_field( 'details_background' ) ) {!! the_field( 'details_background' ) !!} @else @asset('images/details.png') @endif )">
    <div class="max-w-screen-xl mx-auto p-6">
      <div class="details-section__content"  data-aos="fade-up">
        <header>
          <h2 class="details-section__title">
            @if( get_field( 'details_title' ) )
              {!! the_field( 'details_title' ) !!}
            @else 
              Ubezpieczenia majątkowe
          @endif
          </h2>
          <p class="details-section__subtitle">
            @if( get_field( 'details_subtitle' ) )
              {!! the_field( 'details_subtitle' ) !!}
            @else 
              Co obejmują?</p>
            @endif
        </header>
        <div class="details-section__description">
            @if( get_field( 'details_description' ) )
              {!! the_field( 'details_description' ) !!}
            @else 
              <p class=""><strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</strong></p>
              <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
            @endif
          </div>
        <div class="details-section__cta">
            @if( get_field( 'details_cta_link' ) )
              @php
                $link = get_field( 'details_cta_link' );
                echo '<a href="'. $link['url'] . '" class="btn btn--orange">'. $link['title'] . '</a>';
              @endphp
            @else 
              <a href="#" class="btn btn--orange">Zamów ubezpieczenie</a>
            @endif
        </div>
      </div>
    </div>
  </section>
</main>