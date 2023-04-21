import domReady from '@roots/sage/client/dom-ready';

/**
 * Application entrypoint
 */
domReady(async () => {
  const burgerButton = document.querySelector('.navbar__burger');

  burgerButton &&
    burgerButton.addEventListener('click', () => {
      const menu = document.querySelector('.navbar__nav');

      menu.classList.toggle('hidden');
      menu.classList.toggle('navbar__nav--active');
      burgerButton.classList.toggle('navbar__burger--active');
    });

  const beerButton = document.querySelector('#api-button');

  beerButton &&
    beerButton.addEventListener('click', async () => {
      const beer = await fetch(
        'https://api.punkapi.com/v2/beers?page=1&per_page=1'
      )
        .then((response) => response.json())
        .catch((error) => {
          console.log(error);
        });

      alert(`Beer name is: ${beer[0].name}`);
    });
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
