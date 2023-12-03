document.addEventListener('DOMContentLoaded', function () {
    var myCarousel = document.querySelector('#carouselExampleControls')
      var myModalEl = document.getElementById('exampleModal')
      
      myModalEl.addEventListener('show.bs.modal', function (event) {
          const trigger = event.relatedTarget
          var bsCarousel = bootstrap.Carousel.getInstance(myCarousel)
          bsCarousel.to(trigger.dataset.bsSlideTo)
      })


      var myCarousel2 = document.querySelector('#carouselExampleControls2')
      var myModalEl2 = document.getElementById('exampleModal2')
      
      myModalEl2.addEventListener('show.bs.modal', function (event) {
          const trigger = event.relatedTarget
          var bsCarousel = bootstrap.Carousel.getInstance(myCarousel2)
          bsCarousel.to(trigger.dataset.bsSlideTo)
      })

});
