const Favorite = document.querySelector('.heart');

document.querySelector('.heart').addEventListener('click', () => {
    Favorite.classList.toggle('heart-click');
});

const Save = document.querySelector('.bi-bookmark-fill');

document.querySelector('.bi-bookmark-fill').addEventListener('click', () => {
    Save.classList.toggle('bi-bookmark-fill-click');
});

const loadmore = document.querySelector('#loadmore');

let currentItems = 2;
    loadmore.addEventListener('click', (e) => {
      const elementList = [...document.querySelectorAll('.list .list-element')];
          for (let i = currentItems; i < currentItems + 2; i++) {
              if (elementList[i]) {
                  elementList[i].style.display = 'block';
              }
          }
      currentItems += 2;
        
      // Load more button will be hidden after list fully loaded
          if (currentItems >= elementList.length) {
              event.target.style.display = 'none';
          }
    });