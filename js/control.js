jQuery(function(){
    jQuery(".sp-only").on("click",function(){
      jQuery(".sp-menu").slideToggle();
      jQuery(".icon-menu").toggle();
      jQuery(".icon-close").toggle();
      return false;
    })
  })