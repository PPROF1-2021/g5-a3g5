jQuery(document).ready(function(){


      jQuery(".acordion").click(function(){
          jQuery(".cuerpo-acordion").slideUp();
          if(jQuery(this).find("i").hasClass("fa-chevron-up"))
          {
              jQuery(this).find("i").removeClass("fa-chevron-up");
          }else{
              jQuery(".acordion").find("i").removeClass("fa-chevron-up"); 
              jQuery(this).find("i").addClass("fa-chevron-up");
          }
          jQuery(this).next(".cuerpo-acordion").stop().slideToggle();
      })
          
  });
  