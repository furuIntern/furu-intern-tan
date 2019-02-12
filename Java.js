                "use strict"
                var submit      = document.getElementById("submit");
                var test        = document.getElementsByClassName("need_Test");
                var i           = 0;
                var display     = document.getElementsByClassName("invalid");
                var border      = document.getElementsByClassName("check");
                var email       = document.getElementById("email")
                var check       = document.getElementsByClassName("choose") 
                submit.addEventListener("click",test_form);
                submit.addEventListener("click",test_Email);
                submit.addEventListener("click",choose);
                function test_form()
                {
                    for(i = 0; i < test.length;i++){
                        
                        if(test[i].value.trim() === "" ){
                            border[i].style.border = " 2px solid red ";
                            display[i].style.visibility = "visible";
                        }
                        else{
                            border[i].style.border = " 2px solid green";
                            display[i].style.visibility = "hidden";
                        }
                    }
                }
                function test_Email()
                {   
                    if(email.value.trim() === "")
                    {
                        document.getElementById("email").style.border = "2px solid red";
                        document.getElementById("Checked_Gmail").style.visibility = "visible";
                    }
                    else{
                        document.getElementById("email").style.border = "2px solid green";
                        document.getElementById("Checked_Gmail").style.visibility = "hidden";
                    }
            
                }
                function choose(){
                    for(var i = 0 ; i < check.length ; i++){
                        if(check[i].value == "Choose..."){
                            check[i].style.border = "2px solid red";
                        }
                        else{
                            check[i].style.border = "2px solid green";
                        }
                    }
                
                }
                function radio(){
                    document.getElementsByClassName("radiobox").style.color = "green";
                }      

