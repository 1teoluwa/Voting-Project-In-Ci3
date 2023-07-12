<style>
 /* Custom CSS styles for responsiveness */
 @media (max-width: 576px) 
 {
    .container 
        {
        padding-left: 15px;
        padding-right: 15px;
        }

        .vh-100 
        {
            height: auto !important;
        }

        .login 
        {
            width: 100% !important;
        }
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
    width: 100vw;
    height: 100vh;
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
    animation: animate 10s linear infinite;
}




.background li:nth-child(0) {
    left: 11%;
    width: 155px;
    height: 155px;
    bottom: -155px;
    animation-delay: 1s;
}
.background li:nth-child(1) {
    left: 58%;
    width: 296px;
    height: 296px;
    bottom: -296px;
    animation-delay: 2s;
}
.background li:nth-child(2) {
    left: 14%;
    width: 173px;
    height: 173px;
    bottom: -173px;
    animation-delay: 4s;
}
.background li:nth-child(3) {
    left: 44%;
    width: 115px;
    height: 115px;
    bottom: -115px;
    animation-delay: 4s;
}
.background li:nth-child(4) {
    left: 58%;
    width: 185px;
    height: 185px;
    bottom: -185px;
    animation-delay: 11s;
}
.background li:nth-child(5) {
    left: 31%;
    width: 137px;
    height: 137px;
    bottom: -137px;
    animation-delay: 12s;
}
.background li:nth-child(6) {
    left: 43%;
    width: 311px;
    height: 311px;
    bottom: -311px;
    animation-delay: 28s;
}
.background li:nth-child(7) {
    left: 2%;
    width: 181px;
    height: 181px;
    bottom: -181px;
    animation-delay: 28s;
}
.background li:nth-child(8) {
    left: 80%;
    width: 188px;
    height: 188px;
    bottom: -188px;
    animation-delay: 28s;
}
.background li:nth-child(9) {
    left: 35%;
    width: 275px;
    height: 275px;
    bottom: -275px;
    animation-delay: 25s;
}
.background li:nth-child(10) {
    left: 88%;
    width: 178px;
    height: 178px;
    bottom: -178px;
    animation-delay: 43s;
}
.background li:nth-child(11) {
    left: 26%;
    width: 290px;
    height: 290px;
    bottom: -290px;
    animation-delay: 42s;
}
.background li:nth-child(12) {
    left: 60%;
    width: 190px;
    height: 190px;
    bottom: -190px;
    animation-delay: 50s;
}
.background li:nth-child(13) {
    left: 51%;
    width: 102px;
    height: 102px;
    bottom: -102px;
    animation-delay: 61s;
}
.background li:nth-child(14) {
    left: 6%;
    width: 124px;
    height: 124px;
    bottom: -124px;
    animation-delay: 1s;
}
.background li:nth-child(15) {
    left: 26%;
    width: 190px;
    height: 190px;
    bottom: -190px;
    animation-delay: 48s;
}
.background li:nth-child(16) {
    left: 65%;
    width: 154px;
    height: 154px;
    bottom: -154px;
    animation-delay: 45s;
}
.background li:nth-child(17) {
    left: 11%;
    width: 171px;
    height: 171px;
    bottom: -171px;
    animation-delay: 29s;
}
.background li:nth-child(18) {
    left: 15%;
    width: 196px;
    height: 196px;
    bottom: -196px;
    animation-delay: 15s;
}
.background li:nth-child(19) {
    left: 64%;
    width: 192px;
    height: 192px;
    bottom: -192px;
    animation-delay: 35s;
}
.background li:nth-child(20) {
    left: 80%;
    width: 302px;
    height: 302px;
    bottom: -302px;
    animation-delay: 90s;
}
</style>
<body>
    <div class="container-fluid">
        <ul class="background">
            <div class="row">
                <div class="col-sm-6 vh-100">
                    <div style="font-family: monoton;" class="container my-5">
                    <div class="row mt-5 p-5 py-5">
                      <img class="col-3"src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQEAZABkAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsN
                      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
                      08oe6UtktFaxvmUpdKNKK2Q6SWrSMs43M3hLMnNsSL9hnu8V38jdew9h02XT8TJxyzzn4eEes9fJOdBoK6WvetxtP9eEPRCVsuAAAAAAAAAAAAAAAAAAAAAAAAAAAAAWfNWVcPzhg82G4lD2sD+bXJyfG7ZzV2VP8AeRYa3RYdoYZwZ43xP8xPxjxW+fBTUUnHkjgiXnzIeIZAxhadxO1rv4ur22pwZM35OTdNvI0ZtTZebZeb8PJxieU9Jj/34wgWr0l9Jfu25dJ+LGzDLF96FCzit2CnTgfZtTuRkcUacXOVdirixXz3jFijfaeUPdKWyWitY3zKUuk+k9bIdJLVpGWcbmbwlmTm2JPYZ7vFd/I3XsPYdNl0/Eyccs85+HhHrPVOdBoK6WvetxtP9eEPRCVsuAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAFnzTlbD84YPNh2JQpLBJzRycnxu2c1dlT/eRYa3RYdoYZwZ43xP8xPxjxW+fBTUUnHkjginm3TLGcq5liwj/AI77rrT+FOWFvKwnu8FTdF7u/u5mkdfsbVaHVRpu73u9+WY/+v8Avxjp5IJqNFlwZYxbt+/l4/7qkBpRpRWyHRS1aRlnG5m8JZk5pEnsM93iu/kbS2HsOmzKfiZOOWec/Dwj1nr5JZoNBXS171uNp/
                      rwh6IStlwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAODomPc1zmorm82qqc025HmaxMxMvm6HM9PoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                      AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//9k=" 
                      height="100" width="100"/>
                        <h1 class="text-light col-9 align-items-center">SIMPLE <br>MAJORITY <br> SYSTEM</h1>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="col-sm-6 ">
                    <div class="container align-items-center bg-light mt-5 my-5 login" style="border-radius: 2rem; width:65%;">
                        <div class="row align-items-center">
                            <h3 class="col-auto text-light">SIGN-UP</h3>
                        </div>
                        <!-- Name and Mobile -->
                        <form method="POST" action="<?php echo base_url('register/signup')?>" enctype="multipart/form-data">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Name" name="name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email" name="email">
                                </div>
                            </div>

                            <div class="row g-3 align-items-center">
                                <div class="col-md-6 my-4">
                                    <input type="password" placeholder="Password" class="form-control password" name="password">
                                </div>
                                <div class="col-md-6 my-4">
                                    <input type="password" placeholder="Confirm Password" class="form-control cpassword" name="cpassword">
                                </div> 
                            </div>

                            <div class="mb-3 my-2">
                                <select name="std" class="form-select m-auto">
                                    <option>Select Category</option>
                                    <option value="party" name="party">Party</option>
                                    <option value="voter" name="voter">Voter</option>
                                </select>
                            </div>

                            <div class="container my-4">
                                <div class="upload col-auto">  
                                    <p class="my-3">Upload Image: (jpg/jpeg, png, and img files only)<input class="upload" type="file" name="image"></p>
                                </div>
                            </div>
                            <button type="submit" name="register" class="btn btn-primary col-12">Sign-up</button>
                            <p class="my-2">Have an account already? <a href="<?php echo base_url('Register/index')?>">Login</a></p>
                        </form>
                    </div> 
                </div> 
            </div>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    
</body>
