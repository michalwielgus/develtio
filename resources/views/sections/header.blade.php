<header>
  <div class="navbar max-w-screen-xl mx-auto flex flex-wrap items-end justify-between p-6">
    <div class="navbar__logo">
      <a href="{{ home_url('/') }}">
        <img 
          src="
            @if ( get_field( 'site_logo', 'options' ) )
              {!! the_field( 'site_logo', 'options' ) !!}
            @else
              @asset('images/logo.png')
            @endif
          " 
          width="242" height="83" alt="{!! $siteName !!}"></a>
    </div>
    <nav class="navbar__nav hidden w-full lg:block lg:w-auto">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
    <button class="navbar__burger lg:hidden">
      <span></span>
    </button>
  </div>
  @if( is_front_page() )
    @include( 'partials.home-header' )
  @endif
</header>