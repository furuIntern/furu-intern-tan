                var submit      = document.getElementById("submit");
                var test        = document.getElementsByClassName("Need_Test");
                var i           = 0;
                submit.addEventListener("click", demo);
                function demo()
                {
                    for(i = 0; i <= test.length;i++){
                        
                        if(test[i].value === ""){
                            document.getElementsByClassName("invalid")[i].style.display = "inherit";
                            document.getElementsByClassName("border")[i].style.border = " 1px solid red"
                        }
                        else{
                            document.getElementsByClassName("border")[i].style.border = " 1px solid green";
                            document.getElementsByClassName("invalid")[i].style.display = "none";
                        }
                    }
                    
                }
