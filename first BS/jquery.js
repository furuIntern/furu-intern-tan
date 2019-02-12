$(document).ready(function(){
    $("#button").click(function(){
        $("input").each(function(){
            if($(this).val().trim()==="")
            {
                $(this).css("border","2px solid red")
                $(this).append="eror"
            }
            else{
                $(this).css("border","2px solid green")
                
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