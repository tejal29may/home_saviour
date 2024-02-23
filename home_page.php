<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Lora&family=Amatic+SC&family=Mochiy+Pop+P+One&family=Philosopher&display=swap" rel="stylesheet">
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
     <!--aos-->
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!--css-->
   <link rel="stylesheet" href="home_page.css">
    <title>Document</title>
 
       
</head>
<body>
    <!--header-->
    <nav>
        <div class="logo">Home <i class="fas fa-home"></i> Saviour</div>
        <div class="menu">
            <a href="">About Us</a>
            <a href="post_job.html"> Post a Job</a>
            <a href="find job.html"> Find a Job</a>
        </div>
        <div class="dropdown">
                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                   Register
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="signup.html">As a Recruiter</a></li>
                    <li><a class="dropdown-item" href="signup.html">As a Job Seeker</a></li>
                    
                </ul>
        </div>
        <div id="google_element"></div>
    </nav>

    <!--Image slider-->
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/19.png" class="d-block w-100" alt="..." style="height:450px;">
            </div>
            <div class="carousel-item">
            <img src="images/21.png" class="d-block w-100" alt="..." style="height:450px;">
            </div>
            <div class="carousel-item">
            <img src="images/18.png" class="d-block w-100" alt="..." style="height:450px;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div> <br> <br>

    <!--Categories-->
    <h1 class="center" style="font-family: 'Amatic SC', cursive;font-weight:bold; font-size:50px; text-align:center;"> Our major Categories</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-3" data-aos="zoom-in">
                <div class="card" style="width:200px;">
                    <img src="images/categories/8.jpg" class="card-img-top p-2" style="width:200px;height:200px">
                    <div class="card-body">
                       <a href=""  style="text-decoration:none;font-size:25px; margin-left:15px;">Electrician</a>
                    </div>
               </div>
            </div>

            <div class="col-md-3" data-aos="zoom-in">
                <div class="card" style="width:200px;">
                    <img src="images/categories/6.jpg" class="card-img-top p-2" style="width:200px;height:200px">
                    <div class="card-body">
                       <a href=""  style="text-decoration:none;font-size:25px; margin-left:15px;">Plumber</a>
                    </div>
               </div>
            </div>

            <div class="col-md-3" data-aos="zoom-in">
                <div class="card" style="width:200px;">
                    <img src="images/categories/7.jpg" class="card-img-top p-2" style="width:200px;height:200px">
                    <div class="card-body">
                       <a href=""  style="text-decoration:none;font-size:25px; margin-left:15px;">Maid</a>
                    </div>
               </div>
            </div>

            <div class="col-md-3" data-aos="zoom-in">
                <div class="card" style="width:200px;">
                    <img src="images/categories/9.jpg" class="card-img-top p-2" style="width:200px;height:200px">
                    <div class="card-body">
                       <a href=""  style="text-decoration:none;font-size:25px; margin-left:15px;">Watchman</a>
                    </div>
               </div>
            </div>
            
            <div class="col-md-3" data-aos="zoom-in">
                <div class="card" style="width:200px; margin-top:20px;">
                    <img src="images/categories/11.jpg" class="card-img-top p-2" style="width:200px;height:200px">
                    <div class="card-body">
                       <a href=""  style="text-decoration:none;font-size:25px; 
                       margin-left:15px;">Dance Teacher</a>
                    </div>
               </div>
            </div>

            <div class="col-md-3" data-aos="zoom-in">
                <div class="card" style="width:200px; margin-top:20px;">
                    <img src="images/categories/2.jpg" class="card-img-top p-2" style="width:200px;height:200px">
                    <div class="card-body">
                       <a href=""  style="text-decoration:none;font-size:25px; margin-left:15px;">Cook</a>
                    </div>
               </div>
            </div>

            <div class="col-md-3" data-aos="zoom-in">
                <div class="card" style="width:200px; margin-top:20px;">
                    <img src="images/categories/4.jpg" class="card-img-top p-2" style="width:200px;height:200px">
                    <div class="card-body">
                       <a href=""  style="text-decoration:none;font-size:25px; margin-left:15px;">Mechanic</a>
                    </div>
               </div>
            </div>
            

            <div class="col-md-3" data-aos="zoom-in">
                <div class="card" style="width:200px; margin-top:20px;">
                    <img src="images/categories/5.jpg" class="card-img-top p-2" style="width:200px;height:200px">
                    <div class="card-body">
                       <a href=""  style="text-decoration:none;font-size:25px; margin-left:15px; ">Teacher</a>
                    </div>
               </div>
            </div>
            <h6 style="text-align:center; font-size:30px;"> and many more...</h6>
        </div>
    </div> <br> <br>

    <!--Testimonals-->
    <h1 class="center" style="font-family: 'Lora', serif; cursive;font-weight:bold; font-size:40px; text-align:center;">Reviews Of our User</h1>
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-example-generic"></li>
					<li data-slide-to="1" data-target="#carousel-example-generic"></li>
					<li data-slide-to="2" data-target="#carousel-example-generic"></li>
				</ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        
                            <div class="row">
                                <div class="col-md-4">
                                  <div class="single-box">
                                      <div class="img-area">
                                          <img src="images/testimonal/4.jpg" alt="">
                                      </div>
                                      <div class="img-text">
                                          <h2>Aastha Adwani</h2>
                                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, modi quis, dolore debitis quos laboriosam amet ad perferendis corrupti accusamus quae repellendus facilis voluptates commodi inventore tenetur vero assumenda maiores.</p>
                                      </div>
                                  </div>
                                </div>
                                <!---second one-->
                                <div class="col-md-4">
                                  <div class="single-box">
                                      <div class="img-area">
                                          <img src="images/testimonal/8.jpg" alt="">
                                      </div>
                                      <div class="img-text">
                                          <h2>Aastha Adwani</h2>
                                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, modi quis, dolore debitis quos laboriosam amet ad perferendis corrupti accusamus quae repellendus facilis voluptates commodi inventore tenetur vero assumenda maiores.</p>
                                      </div>
                                  </div>
                                </div>
                              <!--third one-->
                              <div class="col-md-4">
                                  <div class="single-box">
                                      <div class="img-area">
                                          <img src="images/testimonal/3.jpg" alt="">
                                      </div>
                                      <div class="img-text">
                                          <h2>Aastha Adwani</h2>
                                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, modi quis, dolore debitis quos laboriosam amet ad perferendis corrupti accusamus quae repellendus facilis voluptates commodi inventore tenetur vero assumenda maiores.</p>
                                      </div>
                                  </div>
                                </div>

                            </div>
                        
                    </div>
                    
                    <!----second slide---->
                    <div class="carousel-item ">
                        
                        <div class="row">
                            <div class="col-md-4">
                              <div class="single-box">
                                  <div class="img-area">
                                      <img src="images/testimonal/4.jpg" alt="">
                                  </div>
                                  <div class="img-text">
                                      <h2>Aastha Adwani</h2>
                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, modi quis, dolore debitis quos laboriosam amet ad perferendis corrupti accusamus quae repellendus facilis voluptates commodi inventore tenetur vero assumenda maiores.</p>
                                  </div>
                              </div>
                            </div>
                            <!---second one-->
                            <div class="col-md-4">
                              <div class="single-box">
                                  <div class="img-area">
                                      <img src="images/testimonal/5.jpg" alt="">
                                  </div>
                                  <div class="img-text">
                                      <h2>Aastha Adwani</h2>
                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, modi quis, dolore debitis quos laboriosam amet ad perferendis corrupti accusamus quae repellendus facilis voluptates commodi inventore tenetur vero assumenda maiores.</p>
                                  </div>
                              </div>
                            </div>
                          <!--third one-->
                          <div class="col-md-4">
                              <div class="single-box">
                                  <div class="img-area">
                                      <img src="images/testimonal/6.jpg" alt="">
                                  </div>
                                  <div class="img-text">
                                      <h2>Aastha Adwani</h2>
                                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, modi quis, dolore debitis quos laboriosam amet ad perferendis corrupti accusamus quae repellendus facilis voluptates commodi inventore tenetur vero assumenda maiores.</p>
                                  </div>
                              </div>
                            </div>

                        </div>
                    
                </div> 
               

                        </div>
                    
                </div> 
              
            </div> 
            </div>
            </div>
        </div>
    </div> 

  <!--footer-->

    <footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 mt-5">
                <h5>Get to Know More of Us</h5>
                <ul>
                    <li>About Us</li>
                    <li>Career</li>
                    <li>Gift A smile with <3</li>
                </ul>
            </div>
            <div class="col-md-3 mt-5">
                <h5>Connect Us</h5>
                <ul>
                    <li>AasthaAdwani@gmail.com</li>
                    <li>TejalMohod@gmail.com</li>
                    <li>JanhaviChandak@gmail.com</li>
                    
                    <li>RutujaFarkade@gmail.com</li>
                </ul>
            </div>
            <div class="col-md-3 mt-5">
                <h5>Reach us at</h5>
                <ul>
                    <li>
                        Address:J.P raod Amravati
                    </li>
                    <li>Mb.123465765869</li>

                </ul>
            </div>
            <div class="col-md-3 mt-5">
                <h5>Let Us Help you</h5>
                <ul>
                    <li>Covid-19</li>
                    <li>Your account</li>

                </ul>
            </div>

        </div>
    </div>
</footer>

<!--Js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script>
    $(document).ready(function(){

        $('.col-md-3').hover(
            // trigger when mouse hover
            function(){
                $(this).animate({
                    marginTop: "-=1%",
                },200);
            },

            // trigger when mouse out
            function(){
                $(this).animate({
                    marginTop: "0%"
                },200);
            }
        );
    });
</script>


<script>
    AOS.init(
        {
            
            duration: 1000,
        }
    );
</script>

<script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate">

</script>
<script>
    function loadGoogleTranslate()
    {
        new google.translate.TranslateElement("google_element");
    }
</script>
</body>
</html>