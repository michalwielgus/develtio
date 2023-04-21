<footer class="footer">
  <div class="max-w-screen-xl mx-auto p-6 grid md:grid-cols-2 lg:grid-cols-4">
    <div class="footer__widget-area pb-24 lg:pb-0">
      @php(dynamic_sidebar( 'sidebar-footer-1' ) )
    </div>
    <div class="footer__widget-area pb-24 lg:pb-0">
      @php(dynamic_sidebar( 'sidebar-footer-2' ) )
    </div>
    <div class="footer__widget-area pb-24 md:pb-0">
      @php(dynamic_sidebar( 'sidebar-footer-3' ) )
    </div>
    <div class="footer__widget-area">
      @php(dynamic_sidebar( 'sidebar-footer-4' ) )
      <a id="api-button" class="mt-6 btn btn--orange" style="display: block; color: #ffffff">Pobierz piwo z API :)</a>
    </div>
  </div>
</footer>