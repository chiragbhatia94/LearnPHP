            function validate()
            {
                //flag=true;
                pass=frm1.pass1;
                if(pass.value=="")
                {
                    alert("Password Required ");
                   pass.focus();
                   return false;
                }else
                {
                    //var reg=/[A-Z]/;
                    //var reg=/^[A-Z]/;
                    //var reg=/[A-Z]+$/;
                    //var reg=/^[A-Z]+$/;
                    //var reg=/^[A-Za-z0-9_]+$/;
                    //var reg=/^\d+$/;
                    //var reg=/\d{2}/;
                    //var reg=/\s/;
                    //var reg=/\w/;
                    var reg=/^\w+([.+-]+\w+)*@\w+([+-.]+\w+)*.\w+$/;
                    if(reg.test(pass.value))
                    {
                    alert("valid ");
                }else
                {
                    alert("Invalid");
                    
                }
                   pass.focus();
                }
                
                return false;
                //return  
            }
