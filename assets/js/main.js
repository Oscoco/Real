/*===== SHOW NAVBAR  =====*/ 
const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)

    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
        toggle.addEventListener('click', ()=>{
            // show navbar
            nav.classList.toggle('show')
            // change icon
            toggle.classList.toggle('bx-x')
            // add padding to body
            bodypd.classList.toggle('body-pd')
            // add padding to header
            headerpd.classList.toggle('body-pd')
        })
    }
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE  =====*/ 
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
    if(linkColor){
        linkColor.forEach(l=> l.classList.remove('active'))
        this.classList.add('active')
    }
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

// show user account control
var menu = document.getElementById("menu");

        
function toggleMenu() {
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
    }
}

window.onclick = function (event) {
    var dropdownWrapper = document.getElementById('dropdown-wrapper');
    if (!dropdownWrapper.contains(event.target) && !menu.classList.contains('hidden')) {
        menu.classList.add('hidden');
    }
}



// MODAL LONG OUT

var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
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
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    

// MODAL modal-open-delete

// var openmodaldelete = document.querySelectorAll('.modal-open-delete')
//     for (var i = 0; i < openmodaldelete.length; i++) {
//       openmodaldelete[i].addEventListener('click', function(event){
//     	event.preventDefault()
//     	toggleModal()
//       })
//     }

//     const over = document.querySelector('.modal-over')
//     overlay.addEventListener('click', toggleModal)

//     var closedelete = document.querySelectorAll('.modal-close')
//     for (var i = 0; i < closedelete.length; i++) {
//       closedelete[i].addEventListener('click', toggleModal)
//     }

//     document.onkeydown = function(evt) {
//       evt = evt || window.event
//       var isEscape = false
//       if ("key" in evt) {
//     	isEscape = (evt.key === "Escape" || evt.key === "Esc")
//       } else {
//     	isEscape = (evt.keyCode === 27)
//       }
//       if (isEscape && document.body.classList.contains('modal-active')) {
//     	toggleModal()
//       }
//     };

//     function toggleModal () {
//       const body = document.querySelector('body')
//       const modal = document.querySelector('.modal-clore')
//       modal.classList.toggle('opacity-0')
//       modal.classList.toggle('pointer-events-none')
//       body.classList.toggle('modal-active')
//     }

