
 document.addEventListener("DOMContentLoaded", function () {
  const wrappers = document.querySelectorAll('.image-hover-wrapper');

  wrappers.forEach(wrapper => {
    const hoverItem = wrapper.querySelector('.hover-item');

    wrapper.addEventListener('mousemove', function (e) {
      const rect = wrapper.getBoundingClientRect();

      let x = e.clientX - rect.left;
      let y = e.clientY - rect.top;

      
      const minX = rect.width * 0.2;
      const maxX = rect.width * 0.8;
      const minY = rect.height * 0.2;
      const maxY = rect.height * 0.8;

      x = Math.max(minX, Math.min(x, maxX));
      y = Math.max(minY, Math.min(y, maxY));

      hoverItem.style.left = `${x}px`;
      hoverItem.style.top = `${y}px`;
      hoverItem.style.opacity = 1;
    });

    wrapper.addEventListener('mouseleave', function () {
      hoverItem.style.opacity = 0;
    });
  });
});

