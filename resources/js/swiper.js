import EmblaCarousel from 'embla-carousel'

import {
    setupPrevNextBtns,
    disablePrevNextBtns
} from "./nextswipper";
import "../css/embla.css";

const wrap = document.querySelector(".carousel__activites");
const viewPort = wrap.querySelector(".carosel__viewport");
const prevBtn = wrap.querySelector(".embla__button--prev");
const nextBtn = wrap.querySelector(".embla__button--next");
const embla = EmblaCarousel(viewPort, {
    slidesToScroll: 4,
    skipSnaps: true,
    loop: true
});
const disablePrevAndNextBtns = disablePrevNextBtns(prevBtn, nextBtn, embla);

setupPrevNextBtns(prevBtn, nextBtn, embla);

embla.on("select", disablePrevAndNextBtns);
embla.on("init", disablePrevAndNextBtns);
