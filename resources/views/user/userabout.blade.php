<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TINY TRESSERS--About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL('user/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">


</head>
<body>
    <style>
        a:hover{
        transform: scale(1.1);
    }
        a{
        transition: transform .5s;
    }
    </style>
<div class="header">
<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="/"><img src="{{URL('imagess/logo2.png')}}" alt="logo" width="125px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="/" class="activee">Home</a></li>
                <!-- <li><a href="product.php" class="activee">Products</a></li> -->
                <li><a href="about" class="activee active">About</a></li>
                <li><a href="account" class="activee">Account</a></li>
                <li><a href="contact" class="activee">Contact</a></li>
            </ul>
        </nav>
        <a href="cart"><img src="{{URL('user/imagess/cart.png')}}" alt="cart" width="30px" height="30px"></a>
        <img src="{{URL('user/imagess/menu.png')}}" class="menu-icon"
        onclick ="menutoggle()">
    </div>
</div>

<!-- <div class="head">
    <h1>Hello...All About Us!!!</h1>
</div>
 <div class="due">
    <p>TINY TRESSERS</p>
    <p>Version 1.1.1</p>
    <p>Build 15.02.60.103</p><br>
    <p>©2021-2022,tinytressers.com,Inc. or its affiliates</p>
 </div> -->
 <div class="container">
    <h1 class="text-center mt-4">About and Team Section</h1>
    <br>
    <p class="text-center">WE SEE OUR CUSTOMERS AS INVITED GUESTS TO A PARTY. AND WE ARE THE HOSTS. IT'S OUR JOB EVERY DAY TO MAKE EVERY IMPORTANT ASPECT OF THE CUSTOMER EXPERIENCE A LITTLE BIT BETTER.</p>
    <div class="row mb-4">
        <div class="col-lg-12">
            <h2 class="text-center mb-5 mt-3">Our Team</h2>
        </div>
        <a href="https://www.linkedin.com/in/kaustav-ghosh-b8a8b3222" class="col-sm-6 col-lg-4 mb-4 text-center"><div><img class="rounded-circle img-fluid d-block mx-auto" src="{{URL('user/imagess/user1.jpeg')}}" style="width: 200px;">
            <h3 class="mt-2 text-dark">Kaustav Ghosh</h3>
            <h5 class="my-1 text-dark">Frontend & Backend <br>Developer</h5>
        </div></a>
        <a href="https://www.linkedin.com/in/subhodeep-moitra-b17749181/" class="col-sm-6 col-lg-4 mb-4 text-center"><div><img class="rounded-circle img-fluid d-block mx-auto" src="{{URL('user/imagess/user2.jpeg')}}"style="width: 200px;">
            <h3 class="mt-2 text-dark">Subhodeep Moitra</h3>
            <h5 class="my-1 text-dark">Backend Developer & Database Administrator</h5>
        </div></a>
        <a href="https://www.linkedin.com/in/aditya-das-513883222" class="col-sm-6 col-lg-4 mb-4 text-center"><div><img class="rounded-circle img-fluid d-block mx-auto" src="{{URL('user/imagess/user3.jpg')}}"style="width: 200px;">
            <h3 class="mt-2 text-dark">Aditya Das</h3>
            <h5 class="my-1 text-dark">Backend Developer & Database Administrator</h5>
        </div></a>
        <a href="https://www.linkedin.com/in/anwesha-chatterjee-18488a224" class="col-sm-6 col-lg-4 mb-4 text-center"><div><img class="rounded-circle img-fluid d-block mx-auto" src="{{URL('user/imagess/user_1.jpg')}}"style="width: 200px;">
            <h3 class="mt-2 text-dark">Anwesha Chatterjee</h3>
            <h5 class="my-1 text-dark">Frontend Developer & Unit <br> Tester</h5>
        </div></a>
        <a href="https://www.linkedin.com/in/deblina-banerjee-a89940182/" class="col-sm-6 col-lg-4 mb-4 text-center"><div><img class="rounded-circle img-fluid d-block mx-auto" src="{{URL('user/imagess/user_2.jpg')}}"style="width: 200px;">
            <h3 class="mt-2 text-dark">Deblina Banerjee</h3>
            <h5 class="my-1 text-dark">Frontend & Backend <br>Developer</h5>
        </div></a>
        <a href="https://www.linkedin.com/in/priti-debnath-482678232" class="col-sm-6 col-lg-4 mb-4 text-center"><div><img class="rounded-circle img-fluid d-block mx-auto" src="{{URL('user/imagess/user_3.jpg')}}"style="width: 200px;">
            <h3 class="mt-2 text-dark">Priti Debnath</h3>
            <h5 class="my-1 text-dark">Frontend Developer & Manual <br> Tester</h5>
        </div></a>
    </div>
</div>










 <div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3 class="sizeb">Download Our App</h3>
                <p>Download App for Android ios mobile phone.</p>
                <div class="app-logo">
                    <img src="{{URL('imagess/play_store.png')}}" alt="image">
                    <img src="{{URL('imagess/app_store.png')}}" alt="image">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="{{URL('imagess/logo3.png')}}" alt="logo">
                <p>Our Purpose Is To Make The Pleasure and Benefits of Your Baby Accessible to the Many</p>
            </div>
            <div class="footer-col-3">
                <h3 class="size">Useful Links</h3>
                <ul class="sizec">
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Discount</li>

                </ul>
            </div>
            <div class="footer-col-4">
                <h3 class="sizea">Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">© Copyright <script>document.write(new Date().getFullYear())</script> - TINY TRESSERS</p>
    </div>
</div>

<!-- ----------js for toggle menu----------- -->
<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px";
        }
    }
</script>

<script>
    // Add active class to the current button (highlight it)
    var header = document.getElementById("MenuItems");
    var btns = header.getElementsByClassName("activeee");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
      });
    }
    </script>



</body>
</html>
