
const handler = (entries) => {
  entries.forEach((entry) => {
    const dataTransition = entry.target.dataset.transition;
    if (!dataTransition) return;

    const transitions = dataTransition.split(' ');
    
    if (entry.isIntersecting) {
      transitions.forEach(transition => {
        if (!entry.target.classList.contains(transition)) {
          entry.target.style.visibility = 'visible';
          entry.target.classList.add(transition)
          observer.unobserve(entry.target);
        }
      })
    }
  });
};

const options = {
  rootMargin: '0px',
  threshold: 0.6
}

let observer = new IntersectionObserver(handler, options);

Array.from(document.querySelectorAll('[data-transition]')).forEach((element) => observer.observe(element));
