import Component from "./Component";
import gsap from "gsap";

export default class MarqueeText extends Component {

  constructor() {
    super();

  }

  init() {
    const headings = gsap.utils.toArray('.layout_heading');
    const layoutComponent = document.querySelector('.layout_component');

    const triggerStart = "top top";

    const masterTimeline = gsap.timeline({

    scrollTrigger: {
        trigger: layoutComponent,
        start: triggerStart,
        scrub: true,
        markers: false,
        end: () => layoutComponent.offsetHeight + " bottom",
    }
    });

    headings.forEach((heading, i) => {
        
    let yPercentValue;
    
    if (i === 0) {
        yPercentValue = 0;
    } else if (i === 1) {
        yPercentValue = 0;
    } else {
        yPercentValue = -100 * (i - 1);
    }

    gsap.set(heading, { 
        yPercent: yPercentValue, 
        opacity: i === 0 ? 1 : 0
    }); 

    });

    headings.forEach((heading, i) => {

        const delay = i === 0 ? 0 : '-=0.9';
        
        if (i < headings.length - 1) {
        masterTimeline.to(heading, {
            yPercent: i === 0 ? -100 : '-=100',
            opacity: i === 0 ? 0 : 1,
            duration: 1,
            ease: "none"
        }, delay);
    
        if (i > 0) {
            masterTimeline.to(heading, {
            yPercent: '-=100',
            opacity: 0,
            duration: 1,
            ease: "none"
            }, '+=0.2');
        }

        } else {

        masterTimeline.to(heading, {
            yPercent: '-=100', // This moves the last heading from its initial position to -400%
            opacity: 1,
            duration: 1,
            ease: "none"
        }, delay);

        }

    });
  
  }

}
