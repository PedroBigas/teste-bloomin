document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    const options = {
        threshold: 0.5
    };

    const startCount = (entry) => {
        if (entry.isIntersecting) {
            const target = parseInt(entry.target.dataset.target);
            let count = 0;
            const duration = 4000; 
            const steps = 100; 
            const increment = Math.ceil(target / steps);
            const interval = duration / steps; 

            const updateCount = () => {
                count += increment;
                if (count >= target) {
                    entry.target.textContent = target;
                } else {
                    entry.target.textContent = count;
                    setTimeout(updateCount, interval); 
                }
            };

            updateCount();
            observer.unobserve(entry.target);
        }
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(startCount);
    }, options);

    counters.forEach(counter => observer.observe(counter));
});
