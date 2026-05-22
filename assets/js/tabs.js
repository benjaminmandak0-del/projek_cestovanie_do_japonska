document.addEventListener('DOMContentLoaded', function() {
  const urlParams = new URLSearchParams(window.location.search);
  const cat = urlParams.get('cat');
  const catMap = {
    'destinacie': 0,
    'gastronomia': 1,
    'doprava': 2,
    'ubytovanie': 3,
    'kultura': 4
  };
  if (cat && catMap[cat] !== undefined) {
    const tabIndex = catMap[cat];
    const menuItems = document.querySelectorAll('.menu > div');
    const naccItems = document.querySelectorAll('.nacc > li');
    menuItems.forEach((item, index) => {
      item.classList.toggle('active', index === tabIndex);
    });
    naccItems.forEach((item, index) => {
      item.classList.toggle('active', index === tabIndex);
    });
  }
});
