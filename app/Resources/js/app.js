import "alpinejs";
import LoadAfter from './utils/loadAfter';

import "./components/brandsSlide";
import "./components/cultureSlide";
import "./components/navToggle";
import "./components/onVisible";
import "./components/ContactForm";

const isHidden = (el) => {
  return (el.offsetParent === null)
}

const imgs = Array.from(document.images).filter((img) => {
  if (isHidden(img)) return false;
  return img.getBoundingClientRect().top < screen.height;
});

new LoadAfter(imgs);