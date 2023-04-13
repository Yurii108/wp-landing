document.addEventListener('DOMContentLoaded', function() {
  function toggleActiveClass(event) {
    event.preventDefault();
    const link = event.target;
    link.classList.toggle("active")
  }
  
  const links = document.querySelectorAll('.card-list__link');
  
  links.forEach(link => {
    link.addEventListener('click', toggleActiveClass);
  });
});



