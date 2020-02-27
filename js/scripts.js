$(function(){
   $('nav.mobile').click(function(){
       // menu mobile!
       var listaMenu = $('nav.mobile ul');
       var icone = $('.botao-menu-mobile').find('i');
           
 if(listaMenu.is(':hidden') == true){
      icone.removeClass('fas fa-bars');
      icone.addClass('fas fa-times');
      listaMenu.slideToggle();
    }
       else{
        icone.removeClass('fas fa-times');
        icone.addClass('fas fa-bars');
        listaMenu.slideToggle();
       }     

   })
})
