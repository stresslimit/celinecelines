
import Splide from '@splidejs/splide'; // https://splidejs.com/  https://github.com/Splidejs/splide


window.addEventListener('DOMContentLoaded', (e) => {

  externalLinks()

  // slider banner
  if (document.querySelector('.splide')) {
    const collection = document.getElementsByClassName('splide')
    for (let item of collection) {
      if (item.id) {
        new Splide(`#${item.id}`).mount()
        console.log(`#${item.id}`)
      }
    }
  }

})


function externalLinks() {
  let a = document.querySelectorAll('a')
  a.forEach((el) => {
    if (el.host != window.location.host) el.target = '_blank'
  });
}
