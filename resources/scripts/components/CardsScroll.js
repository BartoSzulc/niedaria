import Component from "./Component";
import gsap from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export default class CardsScroll extends Component {

    constructor() {
        super();
      
      }
    
      init() {
        function setGridHeight() {
          // Get all the .work_card .grid elements inside .home__click
          const grids = document.querySelectorAll('.home__click .work_card .grid');
        
          // Calculate the maximum height
          let maxHeight = 0;
          grids.forEach(grid => {
            const height = grid.offsetHeight;
            if (height > maxHeight) {
              maxHeight = height;
            }
          });
        
          // Set the maximum height for all the elements
          grids.forEach(grid => {
            grid.style.height = `${maxHeight}px`;
          });
        }
        
        // Run the function on window load and resize
        window.addEventListener('load', setGridHeight);
        window.addEventListener('resize', setGridHeight);;

        function calculateDynamicEnd(lastCard) {
            const viewportHeight = window.innerHeight;
            const lastCardHeight = lastCard.offsetHeight;
            const dynamicEnd = `bottom+=${lastCardHeight - viewportHeight} bottom`;
            return dynamicEnd;
        }
        const cardsWrappers = gsap.utils.toArray(".card-wrapper");
        const cards = gsap.utils.toArray(".card");
        
        cardsWrappers.forEach((wrapper, i) => {
            const card = cards[i];
            let scale = 1,
              rotation = 0;
            if (i !== cards.length - 1) {
              scale = 0.85 + 0.025 * i;
            }
          const isLastCard = i === cardsWrappers.length - 1;
        
          gsap.to(card, {
            scale: scale,
            rotationX: rotation,
            transformOrigin: "center center",
            duration: 1,
            ease: "linear",
            scrollTrigger: {
              trigger: wrapper,
              start: "top ",
              end: isLastCard ? () => calculateDynamicEnd(wrapper) : "bottom bottom",

              endTrigger: isLastCard ? wrapper : ".wrapper",
              scrub: true,
              pin: wrapper,
              pinSpacing: false,
              markers: false,
              id: i + 1
            }
          });
        });
        window.addEventListener('resize', () => {
            ScrollTrigger.refresh();
          });
        
      }
      
    
}
