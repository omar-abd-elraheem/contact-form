let userErorr  = true,
    emailErorr = true;


// username input
$(function(){
    
    
  
    $('.username').blur(function(){
        if($(this).val().length <= 3) {
            $(this).css('border', '1px solid #931a25')
            $(this).parent().find('.custom-alert').fadeIn(300);
            $(this).parent().find('.asterix').fadeIn(100);
            userErorr = true;
        }else{
            $(this).css('border', '1px solid #61b15a')

            $(this).parent().find('.custom-alert').fadeOut(300);

            $(this).parent().find('.asterix').fadeOut(100);
            userErorr = false;
        }
        
    });
});


// Email input
$(function(){
    $('.mail').blur(function(){
        if($(this).val() == "") {
            $(this).css('border', '1px solid #931a25')
            $(this).parent().find('.custom-alert').fadeIn(300);
            $(this).parent().find('.asterix').fadeIn(100);
            emailErorr = true;
        }else{
            $(this).css('border', '1px solid #61b15a')

            $(this).parent().find('.custom-alert').fadeOut(300);

            $(this).parent().find('.asterix').fadeOut(100);
            emailErorr = false;
        }
        
    });
});



       
            
               $('.contact-form').submit(function(e){
                if(userErorr === true || emailErorr === true){
                    e.preventDefault();
                    $('.username , .mail').blur();
                    
                };
                });
