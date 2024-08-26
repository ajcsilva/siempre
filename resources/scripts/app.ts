import alpine from 'alpinejs';

/**
 * See https://stackoverflow.com/a/24004942/11784757
 */
const debounce = (func, wait, immediate = true) => {
  let timeout;
  return () => {
    const args = arguments;
    const callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(function () {
      timeout = null;
      if (!immediate) {
        func.apply(this, args);
      }
    }, wait);
    if (callNow) func.apply(this, args);
  };
};

/**
 * Append the child element and wait for the parent's
 * dimensions to be recalculated
 * See https://stackoverflow.com/a/66172042/11784757
 */
const appendChildAwaitLayout = (parent, element) => {
  return new Promise((resolve) => {
    const resizeObserver = new ResizeObserver((entries, observer) => {
      observer.disconnect();
      resolve(entries);
    });
    resizeObserver.observe(element);
    parent.appendChild(element);
  });
};

const sleep = async (time = 100) => {
  return new Promise((resolve) => {
    setTimeout(() => {
      resolve();
    }, time);
  });
};

document.addEventListener('alpine:init', () => {
  alpine.data(
    'marquee',
    ({ speed = 1, spaceX = 0, dynamicWidthElements = false }) => ({
      dynamicWidthElements,
      async init() {
        await sleep();

        if (this.dynamicWidthElements) {
          const images = this.$el.querySelectorAll('img');
          // If there are any images, make sure they are loaded before
          // we start cloning them, since their width might be dynamically
          // calculated
          if (images) {
            await Promise.all(
              Array.from(images).map((image) => {
                return new Promise((resolve) => {
                  if (image.complete) {
                    resolve();
                  } else {
                    image.addEventListener('load', () => {
                      resolve();
                    });
                  }
                });
              }),
            );
          }
        }

        // Store the original element so we can restore it on screen resize later
        this.originalElement = this.$el.cloneNode(true);
        const originalWidth = this.$el.scrollWidth + spaceX * 4;
        // Required for the marquee scroll animation
        // to loop smoothly without jumping
        this.$el.style.setProperty('--marquee-width', originalWidth + 'px');
        this.$el.style.setProperty(
          '--marquee-time',
          ((1 / speed) * originalWidth) / 100 + 's',
        );
        this.resize();
        // Make sure the resize function can only be called once every 100ms
        // Not strictly necessary but stops lag when resizing window a bit
        window.addEventListener(
          'resize',
          debounce(this.resize.bind(this), 100),
        );
      },
      async resize() {
        // Reset to original number of elements
        this.$el.innerHTML = this.originalElement.innerHTML;

        // Keep cloning elements until marquee starts to overflow
        let i = 0;
        console.log(this.$el);
        // console.log(`parent: ${this.$el.parentElement.offsetWidth}`);
        // console.log(`element: ${this.$el.offsetWidth}`);

        while (this.$el.scrollWidth <= this.$el.clientWidth) {
          if (this.dynamicWidthElements) {
            // If we don't give this.$el time to recalculate its dimensions
            // when adding child nodes, the scrollWidth and clientWidth won't
            // change, thus resulting in this while loop looping forever
            await appendChildAwaitLayout(
              this.$el,
              this.originalElement.children[i].cloneNode(true),
            );
          } else {
            this.$el.appendChild(
              this.originalElement.children[i].cloneNode(true),
            );
          }
          i += 1;
          i = i % this.originalElement.childElementCount;
          console.log(`this.$el.scrollWidth: ${this.$el.scrollWidth}`);
          console.log(`this.$el.clientWidth: ${this.$el.clientWidth}`);
        }

        // Add another (original element count) of clones so the animation
        // has enough elements off-screen to scroll into view
        let j = 0;
        while (j < this.originalElement.childElementCount) {
          this.$el.appendChild(
            this.originalElement.children[i].cloneNode(true),
          );
          j += 1;
          i += 1;
          i = i % this.originalElement.childElementCount;
        }
      },
    }),
  );
});

Object.assign(window, { Alpine: alpine }).Alpine.start();

import.meta.webpackHot?.accept(console.error);
