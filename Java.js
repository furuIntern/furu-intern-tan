                "use strict"
                var submit      = document.getElementById("submit");
                var test        = document.getElementsByClassName("Need_Test");
                var i           = 0;
                var display     = document.getElementsByClassName("invalid");
                var border      = document.getElementsByClassName("border");
                var email       = document.getElementById("email")
                submit.addEventListener("click", Test_form);
                email.addEventListener("click",Test_email);
                function Test_form()
                {
                    for(i = 0; i < test.length;i++){
                        
                        if(test[i].value === "" ){
                            border[i].style.border = " 1px solid red ";
                            display[i].style.display = "inline";
                        }
                        else{
                            border[i].style.border = " 1px solid green";
                            display[i].style.display = "none";
                        }
                    }
                }
                function Test_email()
                {   
                    if(email.value === "")
                    {
                        
                    }
                }

