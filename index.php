
<?php 
require_once './controllers/ControllerMenu.php';
session_start();
    $controller = new ControllerMenu;
    if(isset($_POST['submit'])){
        $controller->insertContactForm($_POST);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css?v=<?php echo time(); ?>"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Arlind's Portfolio</title>
</head>
<body>
    <!--Header-->
    <header>

<div id="header" class="header">
    <div class="logo">
        <h1 onclick="scrollIn('home')">Arlind's</h1><span onclick="scrollIn('home')">PORTFOLIO</span>
    </div>


        <div class="socialmediaicons">
            <a target="_blank" href="https://www.facebook.com/arlindaliu123" class="fa fa-facebook"></a>
            <a target="_blank" href="https://www.linkedin.com/in/arlind-aliu-393a88204/" class="fa fa-linkedin"></a>
            <a target="_blank" href="https://instagram.com/arlindaliuu"  class="fa fa-instagram"></a>
            <button id="connectbutton" onclick="scrollIn(this.id)">Let's Connect</button>
        </div>
        <div class="menu">
            <div class="menus" id="home" onclick="scrollIn(this.id)">Home</div>
            <div class="menus" id="skills" onclick="scrollIn(this.id)">Skills</div>
            <div class="menus" id="projects" onclick="scrollIn(this.id)">Projects</div>
            <div class="menus" id="aboutme" onclick="scrollIn(this.id)">About Me</div>
            <div class="menus" id="dashboard" onclick="loginRedirect()">Admin Dashboard</div>
        </div>
    </div>
    </header>
    <!--Banner-->
        <section>
        <div id="banner">
            <div class="bannerphoto">
                <div class="half-circle animate__animated animate__bounceInUp"">
                    <img class="slider" src="./assets/img/photo.png"  />
                    <img class="slider" src="./assets/img/photo1.png" />
                </div>
            </div>
            <?php
                $controller = new ControllerMenu;
                $allData = $controller->getUser();
               foreach($allData as $data) : ?>
            
            <div class="bannerbio animate__animated animate__heartBeat">
                <p class="b-paragraph">Hi! I'm <?php echo $data['Emri'] ?> <span id="title"></span></p>

                

                
                <p class="s-b-paragraph">
                 <?php echo $data['Bio']; ?>
                </p>
                
                
            </div>
        </div>
    </section>

    <!--Skills Section-->
    <section id="skillsdiv">
        <h1 class="h1-div">Skills</h1>
        <div class="container">


            <input type="radio" name="slider" class="d-none" id="s1" checked>
            <input type="radio" name="slider" class="d-none" id="s2">
            <input type="radio" name="slider" class="d-none" id="s3">
            <input type="radio" name="slider" class="d-none" id="s4">
            <input type="radio" name="slider" class="d-none" id="s5">
        
            <div class="cards">
              <label  for="s1" id="slide1">
                <div class="card">
                  <div class="image">
                    <img src="./assets/img/meter1.svg" alt="">
                   
                  </div>
                  <div class="infos">
                    <span class="name">Wordpress & WoCommerce
                    </span>
                    
                  </div>
                  <a class="btn-contact">details</a>
                </div>
              </label>
        
              <label for="s2" id="slide2">
                <div class="card">
                  <div class="image">
                    <img src="./assets/img/meter2.svg" alt="">
                  </div>
                  <div class="infos">
                    <span class="name">Java & <br> C#
                    </span>
                  </div>
                  <a class="btn-contact">details</a>
                </div>
              </label>
        
              <label for="s3" id="slide3">
                <div class="card">
                  <div class="image">
                    <img src="./assets/img/meter3.svg" alt="">
                  </div>
                  <div class="infos">
                    <span class="name">SQL & <br> MSSQL
                    </span>
                  </div>
                  <a class="btn-contact">details</a>
                </div>
              </label>
        
              <label for="s4" id="slide4">
                <div class="card">
                  <div class="image">
                    <img src="./assets/img/meter3.svg" alt="">
                  </div>
                  <div class="infos">
                    <span class="name">HTML & <br> CSS
                    </span>
                  </div>
                  <a class="btn-contact">details</a>
                </div>
              </label>
        
              <label for="s5" id="slide5">
                <div class="card">
                  <div class="image">
                    <img src="./assets/img/meter3.svg" alt="">
                  </div>
                  <div class="infos">
                    <span class="name">JavaScript & PHP & ReactJS
                </span>
                  </div>
                  <a class="btn-contact">details</a>
                </div>
              </label>
            </div>
          </div>
        </body>
        </html>
    </section>

    <!--Projects-->
    <section class="animate__animated animate__backInDown" id="projects-div">
        <h1 class="h1-div">Projects</h1>
        <p id="skillsp" class="s-b-paragraph">
            Love to code. Love to waste time on doing projects made me a better coder.
I am presenting some projects that I have done during my short career as a programmer. They are made for school projects, made during the course as Full-Stack Web Developer, and personal projects. You can see them in several different tabs as follows.

        </p>

        <div class="projectstabs">
            <div class="tabs" id="tab-0" onclick="changeTab(this.id)">Project 1</div>
            <div class="tabs" id="tab-1" onclick="changeTab(this.id)">Project 2</div>
            <div class="tabs" id="tab-2" onclick="changeTab(this.id)">Project 3</div>
            <div class="tabs" id="tab-3" onclick="changeTab(this.id)">Project 4</div>
        </div>
        <div class="projects">
            <p id="projectp" class="s-b-paragraph">
                Using Wordpress to create websites was my first step on the programming world. I made some projects earlier but the one who is more special is my official Dropshipping website which is created by Wordpress and WoCommerce. This site is using AliDropship Plugin from which it recieves the product data. You can also check the website clicking on this <a href="https://www.purchasetime.net" target="_blank">link</a> or you can see the photos of website down below.
            </p>
            <div class="grid-container">
                <div class="grid-item">
                    <img src="./assets/img/project-img12.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img13.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img14.PNG" />
                </div>  
                <div class="grid-item">
                    <img src="./assets/img/project-img15.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img16.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img17.PNG" />
                </div>  
              </div>
        </div>
        <div class="projects d-none">
            <p id="projectp" class="s-b-paragraph">
                Improving my coding experience was doing and following Bootcamp 5 course projects which was a big step forward for me. The project in question was created by HTML, Css and JavaScript. It is a website for selling food products. This project will be a real project for one of mine personal clients in the near future.
            </p>
            <div class="grid-container">
                <div class="grid-item">
                    <img src="./assets/img/project-img6.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img7.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img8.PNG" />
                </div>  
                <div class="grid-item">
                    <img src="./assets/img/project-img9.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img10.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img11.PNG" />
                </div>  
              </div>
        </div>
        <div class="projects d-none">
            <p id="projectp" class="s-b-paragraph">
                Corresponding project is made on the third semester. It was an e-commerce website which I have finished implementing technologies that I have learned in school. The front-end is made by using HTML, CSS, JavaScript and back-end using PHP and SQL as a database. You can see some page examples down there.
            </p>
            <div class="grid-container">
                <div class="grid-item">
                    <img src="./assets/img/project-img1.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img2.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img3.PNG" />
                </div>  
                <div class="grid-item">
                    <img src="./assets/img/project-img4.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img5.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img17.PNG" />
                </div>  
              </div>
        </div>
        <div class="projects d-none">
            <p id="projectp" class="s-b-paragraph">
                This is a portfolio site which I created during Bootcamp lessons. It is 
                also hosted which you can check it <a target="_blank" href="https://arlindsportfolio.com">by clickin' here</a>. 
                This portfolio is created using ReactJS and Bootstrap.
            </p>
            <div class="grid-container">
                <div class="grid-item">
                    <img src="./assets/img/project-img18.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img19.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img20.PNG" />
                </div>  
                <div class="grid-item">
                    <img src="./assets/img/project-img21.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img22.PNG" />
                </div>
                <div class="grid-item">
                    <img src="./assets/img/project-img23.PNG" />
                </div>  
              </div>
              
        </div>
    </section>

    <!---About me-->
    <div id="aboutme-div">
        <h1 class="h1-div">About Me</h1>
        <p id="projectp" class="s-b-paragraph">
            <?php echo $data['RethMeje'] ?>
    </div>
    <!---Contact  Form-->
    <div id="contact-div">
        <div class="absolutep">
            <img src="./assets/img/rocket.png" alt="">
        </div>
        <h1 class="h1-div">Get In Touch</h1>
        <form class="contactform" method="POST">
            <input name="emri" type="text" placeholder="First Name"/>
            <input name="mbiemri" type="text" placeholder="Last Name"/>
            <input name="email" type="text" placeholder="Email Address"/>
            <input name="numri" type="text" placeholder="Phone No."/>
            <input name="mesazhi" type="text" placeholder="Message"/>
            <input type="submit" name="submit" type="button" value="Send Message">
        </form>
    </div>
    <!--Footer-->
    <footer>
        <div class="logo">
            <h1 onclick="scrollIn('home')">Arlind's</h1><span onclick="scrollIn('home')">PORTFOLIO</span>
        </div>
        <div class="social-media">
            <a target="_blank" href="https://facebook.com/arlindaliu123" class="fa mt-50 fa-facebook"></a>
            <a target="_blank" href="https://www.linkedin.com/in/arlind-aliu-393a88204/" class="fa mt-50 fa-linkedin"></a>
            <a target="_blank" href="https://instagram.com/arlindaliuu" class="fa mt-50 fa-instagram"></a>
            <p class="s-b-paragraph mtop">Copyright 2022. All Rights Reserved</p>
        </div>
        <?php endforeach; ?>
    </footer>
        <script src="./assets/js/script.js?v=<?php echo time(); ?>"></script>
</body>
</html>