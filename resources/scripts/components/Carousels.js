import Component from "./Component";
import Swiper from "swiper";
import { Autoplay, EffectFade, Pagination, Navigation, } from 'swiper/modules';

Swiper.use([Pagination, Autoplay, EffectFade, Navigation]);

export default class Carousels extends Component {

    constructor() {
        super();
        this.heroSlider = document.querySelector('.home__hero') !== null;
        this.productSlider = document.querySelector('.single__content') !== null;
        this.offerSlider = document.querySelector('.home__offer') !== null;
        this.offerSliderArchive = document.querySelector('.archive__posts') !== null;
      
    }

    init() {
        if (this.heroSlider) {
            document.querySelectorAll('.heroSwiper').forEach(el => {
                let heroSwiper = new Swiper(el, {
                    simulateTouch: false,
                    slidesPerView: 1,
                  
                    speed: 1000,
                    loop: true,
                    
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".heroSwiper__counter",
                        type: 'fraction',
                        
                    },
                });
                if (heroSwiper.slides.length > 1) {
                    const prevBtn = document.querySelector('.heroSwiper__nav--prev');
                    const nextBtn = document.querySelector('.heroSwiper__nav--next');

                    if (prevBtn) {
                        prevBtn.addEventListener('click', () => {
                            heroSwiper.slidePrev();
                            updateNavigation();
                        }, false);
                    }

                    if (nextBtn) {
                        nextBtn.addEventListener('click', () => {
                            heroSwiper.slideNext();
                            updateNavigation();
                        }, false);
                    }
                } else {
                    document.querySelector('.heroSwiper__nav').classList.add('hidden');
                }
            });
        }
        if (this.productSlider) {
            document.querySelectorAll('.boatSwiper').forEach(el => {
                let productSwiper = new Swiper(el, {
                    effect: "fade",
                    speed: 750,
                    fadeEffect: {
                        crossFade: true
                    },
                    simulateTouch: false,
                    slidesPerView: 1,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                  

                });
                if (productSwiper.slides.length > 1) {
                    const prevBtn = document.querySelector('.boatSwiper__nav--prev');
                    const nextBtn = document.querySelector('.boatSwiper__nav--next');

                    if (prevBtn) {
                        prevBtn.addEventListener('click', () => {
                            productSwiper.slidePrev();
                            updateNavigation();
                        }, false);
                    }

                    if (nextBtn) {
                        nextBtn.addEventListener('click', () => {
                            productSwiper.slideNext();
                            updateNavigation();
                        }, false);
                    }
                } else {
                    document.querySelector('.boatSwiper__nav').classList.add('hidden');
                }
            
            });
        }
        if (this.offerSlider) {
            document.querySelectorAll('.offerSwiper').forEach(el => {
                let offerSwiper = new Swiper(el, {
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: true,
                    },
                    speed: 750,
                    loop: true,
                    spaceBetween: 16,
                    simulateTouch: false,
                    slidesPerView: 1,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    breakpoints : {
                        1024: {
                            slidesPerView: 2,
                        
                        }, 
                        1366: {
                            slidesPerView: 3,
                        }

                    }
                });

                if (offerSwiper.slides.length > 1) {
                    const prevBtn = document.querySelector('.offerSwiper__nav--prev');
                    const nextBtn = document.querySelector('.offerSwiper__nav--next');

                    if (prevBtn) {
                        prevBtn.addEventListener('click', () => {
                            offerSwiper.slidePrev();
                            updateNavigation();
                            console.log('prev')
                        }, false);
                    }

                    if (nextBtn) {
                        nextBtn.addEventListener('click', () => {
                            offerSwiper.slideNext();
                            updateNavigation();
                            console.log('next')
                        }, false);
                    }
                } else {
                    document.querySelector('.offerSwiper__nav').classList.add('hidden');
                }
            
            });
        }
        if (this.offerSliderArchive) {
            document.querySelectorAll('.category-slider').forEach(categorySlider => {
                const offerSwipers = categorySlider.querySelectorAll('.offerSwiper');
                offerSwipers.forEach(el => {
                    let offerSwiper = new Swiper(el, {
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: true,
                        },
                        speed: 750,
                        
                        
                        loop: true,
                        spaceBetween: 16,
                        simulateTouch: false,
                        slidesPerView: 1,
                        pagination: {
                            el: el.querySelector(".swiper-pagination"),
                            clickable: true,
                        },
                        breakpoints : {
                            1024: {
                                slidesPerView: 2,
                            
                            }, 
                            1366: {
                                slidesPerView: 3,
                            }
    
                        }
                    });

                    if (offerSwiper.slides.length > 1) {
                        const prevBtn = categorySlider.querySelector('.offerSwiper__nav--prev');
                        const nextBtn = categorySlider.querySelector('.offerSwiper__nav--next');

                        if (prevBtn) {
                            prevBtn.addEventListener('click', () => {
                                offerSwiper.slidePrev();
                                console.log('prev');
                            }, false);
                        }

                        if (nextBtn) {
                            nextBtn.addEventListener('click', () => {
                                offerSwiper.slideNext();
                                console.log('next');
                            }, false);
                        }
                    } else {
                        categorySlider.querySelector('.offerSwiper__nav').classList.add('hidden');
                    }
                });
            });
        }
        
    }

}