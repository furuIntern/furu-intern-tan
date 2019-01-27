$(document).ready(function(){
    $("#button").click(function(){
        $("input").each(function(){
            if($(this).val().trim()==="")
            {
                $(this).css("border","2px solid red")
                $().css("visibility","visible")
            }
            else{
                $(this).css("border","2px solid green")
                $(".invalid").css("visibility","hidden")
            }
        })
        $("#country").each(function(){
            if($(this).val() == "Choose...")
            {
                $(this).css("border","2px solid red")
            }
            else{
                $(this).css("border","2px solid green") 
            }
        })
            $("#state").each(function(){
                if($(this).val() == "Choose...")
                {
                    $(this).css("border","2px solid red")
                }
                else{
                    $(this).css("border","2px solid green") 
                }
            })
    
    })
})