{{--
  Template Name: Custom Template
--}}

<header>
  <div class="navbar max-w-screen-xl mx-auto flex flex-wrap items-end justify-between p-6">
    <div class="navbar__logo">
      <a href="/"><img src="@asset('images/logo.png')" width="242" height="83" alt="{!! $siteName !!}"></a>
    </div>
    <nav class="navbar__nav hidden w-full lg:block lg:w-auto">
      <ul>
        <li>
          <a href="/test/">o nas</a>
        </li>
        <li>
          <a href="#">oferta</a>
        </li>
        <li>
          <a href="#">towarzystwa ubezpieczeń</a>
        </li>
        <li>
          <a href="#">dołącz do nas</a>
        </li>
        <li>
          <a href="#">przydatne materiały</a>
        </li>
        <li>
          <a href="#">oddziały</a>
        </li>
      </ul>
    </nav>
    <button class="navbar__burger lg:hidden">
      <span></span>
    </button>
  </div>
  <div class="hero" style="background-image: url(@asset('images/hero.png'))">
    <div class="hero__wrapper flex flex-col-reverse items-center lg:flex-row lg:items-end px-6 max-w-screen-xl mx-auto h-full md:gap-40">
      <div class="hero__text flex flex-wrap items-center" data-aos="fade-up">
        <h1>Ubezpieczenie majątkowe</h1>
        <p>Skontaktuj się z nami i skorzystaj ze specjalnej oferty!</P>
      </div>
      <div class="hero__form" data-aos="fade-up">
        <p class="hero__form-title">Podaj dane kontaktowe, a my przygotujemy najlepszą ofertę</p>
        <form>
          <input type="text" name="name" placeholder="Imię i nazwisko" required>
          <input type="email" name="email" placeholder="Adres e-mail" required>
          <input type="text" name="phone" placeholder="Nr telefonu">
          <div class="flex gap-6">
            <input type="text" name="city" placeholder="Miejscowość">
            <input type="text" name="postalcode" placeholder="Kod pocztowy">
          </div>
          <div class="flex gap-6">
            <input type="checkbox" name="gpdr" id="gpdr">
            <label for="gpdr">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</label>
          </div>
          <input class="btn btn--orange mx-auto" type="submit" value="Wyślij">
        </form>
      </div>
    </div>
  </div>
</header>
<main>
  <section class="details-section" style="background-image: url(@asset('images/details.png'))">
    <div class="max-w-screen-xl mx-auto p-6">
      <div class="details-section__content"  data-aos="fade-up">
        <header>
          <h2 class="details-section__title">Ubezpieczenia majątkowe</h2>
          <p class="details-section__subtitle">Co obejmują?</p>
        </header>
        <div class="details-section__description">
          <p class=""><strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</strong></p>
          <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
        </div>
        <div class="details-section__cta">
          <a href="#" class="btn btn--orange">Zamów ubezpieczenie</a>
        </div>
      </div>
    </div>
  </section>
</main>
<footer class="footer">
  <div class="max-w-screen-xl mx-auto p-6 grid md:grid-cols-2 lg:grid-cols-4">
    <div class="footer__widget-area pb-24 lg:pb-0">
      <h4 class="widget-title">O nas</h4>
      <ul>
        <li>
          <a href="#">Strona główna</a>
        </li>
        <li>
          <a href="#">O nas</a>
        </li>
        <li>
          <a href="#">Dołącz do nas</a>
        </li>
        <li>
          <a href="#">Zostań agentem</a>
        </li>
        <li>
          <a href="#">Kariera</a>
        </li>
      </ul>
    </div>
    <div class="footer__widget-area pb-24 lg:pb-0">
      <h4 class="widget-title">Ubezpieczenia</h4>
      <ul>
        <li>
          <a href="#">Ubezpieczenia mienia, nieruchomości</a>
        </li>
        <li>
          <a href="#">Ubezpieczenia osobowe</a>
        </li>
        <li>
          <a href="#">Ubezpieczenia rolne</a>
        </li>
        <li>
          <a href="#">Ubezpieczenie OC</a>
        </li>
        <li>
          <a href="#">Zobacz pełną ofertę</a>
        </li>
      </ul>
    </div>
    <div class="footer__widget-area pb-24 md:pb-0">
      <h4 class="widget-title">Pomoc</h4>
      <ul>
        <li>
          <a href="#">Oddziały/Kontakt</a>
        </li>
        <li>
          <a href="#">Towarzystwa ubezpieczeniowe</a>
        </li>
        <li>
          <a href="#">Przydatne materiały</a>
        </li>
        <li>
          <a href="#">Informacje Administracyjne</a>
        </li>
        <li>
          <a href="#">Polityka cookies</a>
        </li>
      </ul>
    </div>
    <div class="footer__widget-area">
      <h4 class="widget-title">Infolinia</h4>
      <a href="tel:#" class="text-orange font-md text-bold">+48 22 311 1234</a>
      <a id="api-button" class="mt-6 btn btn--orange" style="display: block; color: #ffffff">Pobierz piwo z API :)</a>
    </div>
  </div>
</footer>
