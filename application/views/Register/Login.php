<style>
.input-group {
 position: relative;
}

.input {
 border: solid 1.5px #9e9e9e;
 border-radius: 1rem;
 background: none;
 padding: 1rem;
 font-size: 1rem;
 color: #273036;
 transition: border 150ms cubic-bezier(0.4,0,0.2,1);
}

.user-label {
 position: absolute;
 left: 15px;
 color: #e8e8e8;
 pointer-events: none;
 transform: translateY(1rem);
 transition: 150ms cubic-bezier(0.4,0,0.2,1);
}

.input:focus, input:valid {
 outline: none;
 border: 1.5px solid #1a73e8;
}

.input:focus ~ label, input:valid ~ label {
 transform: translateY(-50%) scale(0.8);
 background-color: #f3f4f5;
 padding: 0 .2em;
 color: #2196f3;
}
@keyframes animate {
    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }
    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }
}

.background {
    position: fixed;
    width: 50%;
    height: 100%;
    top: 0;
    left: 0;
    margin: 0;
    padding: 0;
    background: #0b4da2;
    overflow: hidden;
}
.background li {
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 11s linear infinite;
}




.background li:nth-child(0) {
    left: 33%;
    width: 175px;
    height: 175px;
    bottom: -175px;
    animation-delay: 1s;
}
.background li:nth-child(1) {
    left: 62%;
    width: 207px;
    height: 207px;
    bottom: -207px;
    animation-delay: 5s;
}
.background li:nth-child(2) {
    left: 53%;
    width: 294px;
    height: 294px;
    bottom: -294px;
    animation-delay: 1s;
}
.background li:nth-child(3) {
    left: 78%;
    width: 296px;
    height: 296px;
    bottom: -296px;
    animation-delay: 5s;
}
.background li:nth-child(4) {
    left: 49%;
    width: 167px;
    height: 167px;
    bottom: -167px;
    animation-delay: 14s;
}
.login{
    border-radius: 50px;
background: #e0e0e0;
box-shadow:  35px 35px 70px #bebebe,
             -35px -35px 70px #ffffff;
}
@media screen all (max-width: 768px)
{
    .login{
    border-radius: 50px;
    background: #e0e0e0;
    z-index:5
    /* box-shadow:  35px 35px 70px #bebebe, */
             /* -35px -35px 70px #ffffff; */
}   
}
</style>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-md-6 ">
      <div style="font-family: monoton;" class="text-light my-5">
        <h1 style="font-family: satisfy;" class="text-light my-5" id="welcome">Welcome!</h1>
        <br>
        <br>
        <ul class="background">
          <div class="container mt-5 align-items-center">
            <div class="row">
              <div class="col-md-8 mx-auto text-center">
                <h1 id="voting" class="text-light mx-auto mt-5 pt-5 text-center">SIMPLE <br>MAJORITY <br> SYSTEM</h1>
                <img src="data:image/jpg;base64,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" height="100" width="100"/>
              </div>
            </div>
          </div>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-12 col-md-6 " style="z-index: 9;">
    <div class="mt-5 pt-5">
        <div class="container p-5 bg-light login pt-5" style="border-radius: 2rem; width: 60%; ">
        <form action="<?php echo base_url('register/index');?>" method="POST" enctype="multipart/form-data">
            <h4 id="subhead juustify-content align-items-center">Log-In</h4>
            <p>Voters only</p>
          <div class="mb-3 input-group">
            <input required="" name="name" type="text" name="text" autocomplete="on" class="input form-control">
            <label class="user-label">First Name</label>
          </div>
          <div class="mb-3 input-group">
            <input required="" type="password" name="password" autocomplete="on" class="input password form-control">
            <label name="password" class="user-label">Password</label>
          </div>
          <div class="mb-3 form-check">
            <input onclick="showpassword()" type="checkbox" class="password">
            <label>Check My Password</label>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        New User? <a href="<?php echo base_url('Register/signup');?>">Register Here</a>
      </div>
      <br><br>
      </div>
    </div>
  </div>
</div>

    <script>
     $(document).ready(function(){              
                    $("#welcome").fadeIn(4000);
                    $("#voting").fadeIn("slow");
                    $("#intro").fadeIn(3000);
                     });
                     function showpassword()
                     {
                        let pword = document.querySelector(".password")
                        if(pword.type === "password")
                        {
                            pword.type = "text";
                        }else{
                            pword.type = "password";
                        }
                     }
    </script>
</body>



