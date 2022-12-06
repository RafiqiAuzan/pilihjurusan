import EmblaCarousel from 'embla-carousel'

import {
    setupPrevNextBtns,
    disablePrevNextBtns
} from "./nextswipper";

const wrap = document.querySelector(".carouselActivites");
const viewPort = wrap.querySelector(".carousel__viewport");
const prevBtn = wrap.querySelector(".carousel__button--prev");
const nextBtn = wrap.querySelector(".carousel__button--next");
const embla = EmblaCarousel(viewPort, {
    slidesToScroll: 4,
    skipSnaps: true,
    // loop: true
});
const disablePrevAndNextBtns = disablePrevNextBtns(prevBtn, nextBtn, embla);

setupPrevNextBtns(prevBtn, nextBtn, embla);

embla.on("select", disablePrevAndNextBtns);
embla.on("init", disablePrevAndNextBtns);
