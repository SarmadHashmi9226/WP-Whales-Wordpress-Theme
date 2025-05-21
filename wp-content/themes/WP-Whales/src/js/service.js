
document.addEventListener('DOMContentLoaded', function () {
    const arrows = document.querySelectorAll('.toggle-arrow');
  
    arrows.forEach(arrow => {
      arrow.addEventListener('click', function () {
        const id = this.getAttribute('data-id');
        const content = document.getElementById(id);
  
        if (content) {
          content.classList.toggle('d-none');
          this.classList.toggle('fa-chevron-up');
          this.classList.toggle('fa-chevron-down');
        }
      });
    });
  });
  