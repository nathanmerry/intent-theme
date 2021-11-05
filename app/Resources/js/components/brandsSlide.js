window.brandsSlide = function(length) {
  return {
    index: 0,
    slide(direction) {      
      const count = length - 1;

      if (this.index === 0 && direction === -1) {
        this.index = count;
      } else if (this.index === count && direction === 1) {
        this.index = 0;
      } else {
        this.index = this.index + direction;
      }
    },
  };
};
