// eslint-disable-next-line no-unused-vars
import config from '@config';
import 'airbnb-browser-shims';
import $ from 'jquery';
import Swiper from 'swiper/dist/js/swiper';
import 'prismjs';
import './vendor/*.js';
import '@styles/theme';
import '@images/favicon.ico';
import '@images/intro-bg.png';
import '@images/intro-image.png';
import '@images/testimonials-bg.png';
import '@images/article-bg.jpg';

const $win = $(window);
const $doc = $(document);

$win.on('load', () => {
  /**
   * Slider Initialisation
   */
  if ($('.slider--testimonials').length > 0) {
    new Swiper('.slider--testimonials .swiper-container', {
      loop: true,
      slidesPerView: 2,
      spaceBetween: 40,
      navigation: {
        nextEl: '.slider--testimonials .swiper-button-next',
        prevEl: '.slider--testimonials .swiper-button-prev',
      },
      breakpoints: {
        767: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
      },
    });
  }
});

/**
 * Code.
 */
$('pre:not(.code)').each(function() {
  const language = $(this).find('code:first').attr('class');
  $(this).addClass(`code line-numbers language-${language}`);
});

/**
 * Accordion.
 */
const activeItemClass = 'expanded';
const accordionItemSelector = '.accordion .accordion__head';
const accordionBodySelector = '.accordion__body';

$(accordionItemSelector).on('click', function() {
  $(this)
    .siblings()
    .slideToggle();

  $(this)
    .parent().toggleClass(activeItemClass)
    .siblings().removeClass(activeItemClass)
    .find(accordionBodySelector).slideUp();
});

/**
 * Burger button.
 */
$('.btn-menu').on('click', function (event) {
  event.preventDefault();

  $(this).toggleClass('active');
  $('.wrapper').toggleClass('nav-active');
});
