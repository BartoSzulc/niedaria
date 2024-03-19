import Component from "./Component";
import Swiper from "swiper";
import { Autoplay, EffectFade, Pagination, Navigation, } from 'swiper/modules';

Swiper.use([Pagination, Autoplay, EffectFade, Navigation]);

export default class Carousels extends Component {

    constructor() {
        super();

        this.aboutSlider = document.querySelector('.home__slider-first') !== null;
      
    }

    init() {
        if (this.aboutSlider) {
            document.querySelectorAll('.swiperVertical').forEach(el => {
                let heroSwiper = new Swiper(el, {
                    simulateTouch: false,
                   
                    slidesPerView: 1,
                    speed: 1000,
                    effect: "fade",
                    fadeEffect: {
                        crossFade: true
                    },
                    autoHeight: true,
                    
                    
                });
            });
        }
        
    }

}