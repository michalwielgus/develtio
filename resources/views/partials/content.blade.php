<div class="max-w-screen-xl mx-auto pb-64">
  <div class="grid gap-64">
    <article @php(post_class())>
      <header>
        <h2 class="entry-title">
          <a href="{{ get_permalink() }}">
            {!! $title !!}
          </a>
        </h2>

        @include('partials.entry-meta')
      </header>

      <div class="entry-summary">
        @php(the_excerpt())
      </div>
    </article>
    <article @php(post_class())>
      <header>
        <h2 class="entry-title">
          <a href="{{ get_permalink() }}">
            {!! $title !!}
          </a>
        </h2>

        @include('partials.entry-meta')
      </header>

      <div class="entry-summary">
        @php(the_excerpt())
      </div>
    </article>
    <article @php(post_class())>
      <header>
        <h2 class="entry-title">
          <a href="{{ get_permalink() }}">
            {!! $title !!}
          </a>
        </h2>

        @include('partials.entry-meta')
      </header>

      <div class="entry-summary">
        @php(the_excerpt())
      </div>
    </article>
    <article @php(post_class())>
      <header>
        <h2 class="entry-title">
          <a href="{{ get_permalink() }}">
            {!! $title !!}
          </a>
        </h2>

        @include('partials.entry-meta')
      </header>

      <div class="entry-summary">
        @php(the_excerpt())
      </div>
    </article>
  </div>
</div>