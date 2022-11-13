const app = {

ini : function(){
    const menuhamb = document.querySelector(".hamb");
    menuhamb.addEventListener('click', app.handleClickNavBar)

  //  const navContact = document.querySelector('.contact')
    //navContact.addEventListener('click', app.handleClickContact)
},

mainPage: function(){

},

handleClickNavBar : function(){
    const navlinks = document.querySelector('.nav-links');
    navlinks.classList.toggle('mobile-menu')

},

//handleClickContact : function(evt){
    
  //  evt.preventDefault();

//const formModal = document.querySelector('.form')
//formModal.classList.toggle('form-modal')

//}

}


document.addEventListener('DOMContentLoaded', app.ini);