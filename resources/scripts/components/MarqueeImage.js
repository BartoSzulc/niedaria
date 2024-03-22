import Component from "./Component";
import gsap from "gsap";

export default class MarqueeImage extends Component {

    constructor() {
        super();
      
      }
    
      init() {

      let tweenToLeft = gsap.to(".toleft .marquee-image__part", {
        xPercent: -100,
        repeat: -1,
        duration: 7,
        ease: "linear"
      }).totalProgress(0.5);

      // GSAP animation for elements scrolling to the right, using reversed: true to change the direction
      let tweenToRight = gsap.to(".toright .marquee-image__part", {
        xPercent: -100, // Still using a negative value, but reversing the animation
        repeat: -1,
        duration: 7,
        ease: "linear",
        reversed: true // This reverses the animation direction
      }).totalProgress(0.5);

      // Set initial position for both toleft and toright elements
      gsap.set(".toleft, .toright", {xPercent: -25}); // Optimized by combining selectors

      // Event listeners for pausing and resuming animations on mouse enter/leave
      document.querySelectorAll(".toleft, .toright").forEach(element => {
        element.addEventListener("mouseenter", function() {
          // Determine which tween to pause based on the class of the hovered element
          const tween = element.classList.contains("toleft") ? tweenToLeft : tweenToRight;
          tween.pause();
        });

        element.addEventListener("mouseleave", function() {
          // Determine which tween to resume based on the class of the hovered element
          const tween = element.classList.contains("toleft") ? tweenToLeft : tweenToRight;
          tween.resume();
        });
      });

      }
      
    
}