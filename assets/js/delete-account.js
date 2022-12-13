
var openmodaldelete = document.querySelectorAll('.modal-open-delete')
    for (var i = 0; i < openmodaldelete.length; i++) {
      openmodaldelete[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }

    const over = document.querySelector('.modal-over')
    overlay.addEventListener('click', toggleModal)

    var closedelete = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closedelete.length; i++) {
      closedelete[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };

    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal-clore')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
