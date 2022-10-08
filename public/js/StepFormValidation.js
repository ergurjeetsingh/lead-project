function nextPrev(n)
	{
    //deactivate all tabs then activate n tab
   // alert(n);
   var elements = document.getElementsByClassName("tab");

   for (var i = 0; i < elements.length; i++){
   	elements[i].style.display = "none";
   }

   eval(document.getElementsByClassName("tab"+n))[0].style.display="block";
}


/* Step Form Validation Start Here*/
jQuery(document).ready(function($){
    $("form").on('click', '#validate_btn', function () {
    $('.error').css("display","none");
        var tabno = $(this).attr('value'); 

        var rd = $('.tab.tab'+(tabno-1)+' input[name=radio'+ tabno +']').length;
        var chk = $('.tab.tab'+(tabno-1)+' input[type="checkbox"]').length;
        
        if(rd > '1' || chk != '0'){
            if ($('.tab.tab'+(tabno-1)+' input[name=radio'+ tabno +']:checked').length) {
               $(this).parent().find('#nextBtn').trigger('click');
            }
            else if ($('.tab.tab'+(tabno-1)+' input[type="checkbox"]:checked').length) {
               $(this).parent().find('#nextBtn').trigger('click');
            }
            else {
                //alert('Choose At least 1 Option');
                $('.error').css("display","block");
                $('.error').text("Choose At least 1 Option");
            }
        }
        else {
            
            
            if($('.tab.tab'+(tabno-1)+' input[name^="pincode"]').val() == '')
            {
                $('.error').css("display","block");
                $('.error').text("Please fill in zip code");
                
            }else
            {
            
            $(this).parent().find('#nextBtn').trigger('click');
            
            }
            
            
            
            /*if ($('.tab.tab'+(tabno-1)+' input[name="pincode"]').val() == '') {
                $('#service .error').css("display","block");
                $('#service .error').text("pincode required");
                
            }
            else {  
                var zip = $('.tab.tab'+(tabno-1)+' input[name="pincode"]').val();
                var zipRegex = /^\d{5,6}$/;
                if (!zipRegex.test(zip)) {   alert('pincode is invalid');}
                else { $(this).parent().find('#nextBtn').trigger('click');}
                
            }*/
        }
	});
});

jQuery(document).ready(function($){
    $("form").on('focus', '.main_div_innr.radio_other input[type="text"]', function () {
        $(this).parent().find('input:radio').prop('checked', true);
    });
    $("form").on('focus', '.main_div_innr.checkbox_other input[type="text"]', function () {
        $(this).parent().find('input:checkbox').prop('checked', true);
    });
});

/* Step Form Validation End Here*/