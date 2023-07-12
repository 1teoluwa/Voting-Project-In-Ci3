        <script>
         let pword = document.querySelector(".password");
         let value = document.querySelector(".value");
         pword.addEventListener("click",function showpassword(){
                     if(value.type == "password"){
                        value.type="text";
                    }else{
                        value.type="password";
                    };
            })
    </script>
</html>