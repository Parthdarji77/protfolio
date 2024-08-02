<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Try Make This Portfolio</title>
    <script src="https://kit.fontawesome.com/b84eb46058.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif ;
    box-sizing: border-box;
}
html{
    scroll-behavior: smooth;
}
body{
    background-color: #080808;
    color: white;
} 
#header{
    width: 100%;
    height: 110vh;
    background-image: url(images/final.jpg);
    background-size: cover;
    background-position: center;

}
.container{
     padding: 10px 10%;

}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.logo{
    width: 140px;
}
nav ul li {
    display: inline-block;
    list-style: none;
    margin: 10px  20px;
}
nav ul li a{
    color: white;
    text-decoration: none;
    font-size: 15px;
    position: relative;

}
nav ul li a::after{
    content: '';
    width: 0%;
    height: 3px;
    background: #ff004f;
    position: absolute;
    left: 0;
    bottom: -6px;
    transition: 0.4s;
}
nav ul li a:hover::after{
    width: 100%;

}
.header-Text{
    margin-top: 20%;
    font-size: 30px;
    font-family: Arial, Helvetica, sans-serif;
}
.header-Text h1{
    font-size: 60px;
    margin-top: 20px;

}
.header-Text h1 span{
    color: Red;
}
 /*-----------about------------- */
 #about{
    padding: 80px 0;
    color: #ababab;
 }
 .row{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
 }
 .about-col-1{
    flex-basis: 35%;
 }
  .about-col-1 img{
    width: 100%;
    border-radius: 15px;
  }
  .about-col-2{
     flex-basis: 60%;
  }
  .sub-title{
    font-size: 60px;
    font-weight: 600;
    color: white;
  }
  .text{
      font-size: 18px;
      font-family: 'Roboto', sans-serif;
  }
  .tab-titles{
    display: flex;
    margin: 20px 0 40px;
  }
  .tab-links{
    margin-right: 50px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    position: relative;
}
.tab-links::after{
    content: '';
    width: 0;
    height: 3px;
    background: #ff0000;
    position: absolute;
    left: 0;
    bottom: -8px;
    transition: 0.5s;
}
.tab-links.active-link::after{
    width: 50%;

}
.tab-contents ul li{
    list-style: none;
    margin: 10px 0;
}
.tab-contents ul li span{
    color: #b54747;
    font-size: 16px;
}
/*--------------------Services------------------------*/
#services{
    padding:  30px 0;
}
.services-list{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(150px, 1fr));
    grid-gap: 40px;
    margin-top: 50px;
    color: white;
    font-size: 15px;
   
}
.p{
    font-family: Arial, Helvetica, sans-serif;
    color: whitesmoke;
}
.services-list div{
    background: #262626;
    padding: 40px;
    font-size: 13px;
    font-weight: 300;
    border-radius: 10px;
    transition: background 0.5s , transform  0.5s;
}
.services-list div i{
    font-size: 50px;
    margin-bottom: 30px;
}
.services-list div h2{
    font-size: 30px;
    font-weight: 500;
    margin-bottom: 15px;
}
.services-list div a{
    text-decoration: none;
    color: #fff;
    font-size: 12px;
    margin-top: 20px;
    display: inline-block;
}
.services-list div:hover{
    background: #ff0000;
    transform: translateY(-10px);
}
/*-------portfolio--------*/

#portfolio{
    padding: 50px 0;
}
.work-list{
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(250px, 1fr));
    grid-gap: 40px;
    margin-top: 50px;
}
.work{
    border-radius: 10px;
    position: relative;
    overflow: hidden;
}
.work img{
     width: 100%;
     border-radius: 10px;
     display: block;
     transition: transform 0.5s;
}
.layer{
    width: 100%;
    height: 0%;
    background:  linear-gradient(rgba(0,0,0,0.6), #ff0000);
    border-radius: 10px;
    color: white;
    position: absolute;
    left: 0;
    bottom: 0;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 40px;
    text-align: center;
    font-size: 14px;
    transition: hegiht 0.3s;
}
.layer h3{
    font-weight: 500;
    margin-bottom: 20px;
}
.layer  a{
     margin-top: 20px;
     color: #ff0000;
     text-decoration: none;
     font-size: 15px;
     line-height: 50px;
     background: #fff;
     width: 60px;
     height: 50px;
     border-radius: 50%;
}
.work:hover img{
    transform: scale(1.1);
}
.work:hover .layer{
    height: 100%;
}
.btn{
    display: block;
    margin: 50px auto;
    width: fit-content;
    border: 1px solid #ff0026;
    padding: 14px 50px ;
    border-radius: 6px;
    text-decoration: none;
    color: white;
    transition: background 0.5s;
}
.btn:hover{ 
    background: #ff0000;
}
/*-------contect---------*/
.contect-left{
    flex-basis: 35%;
}
.contect-right{
    flex-basis: 60%;
}
.contect-left p{
    margin-top: 30px;

}
.contect-left p i{
       color: #ababab;
       margin-right: 15px;
       font-size: 25px;
       transition: transform 0.5s;
}
.contect-left p i:hover{
    color: #ff0026;
   transform: translateY(-10px);
}
.social-icon{
    margin-top: 30px;
}
.social-icon a{
    text-decoration: none;
    font-size: 30px;
    margin-right: 50px;
    color: #ababab;
    display: inline-block;
    transition: transform 0.5s;
}
.social-icon a:hover{
    color: #ff0000;
    transform:  translateY(-5px);
}
.btn2{
    margin: 50px auto;
    width: fit-content;
    border: 1px solid #ff0026;
    padding: 14px 50px ;
    border-radius: 6px;
    text-decoration: none;
    color: white;
    display: inline-block;
    cursor: pointer;
}
.btn2.btn3{
    background: #ff0000;
}
.contect-right form{
    width: 100%;
}
form input, form textarea{
    width: 100%;
    border: 0;
    outline: none;
    background:  #262626;
    padding: 15px;
    margin: 15px 0;
    color: #fff;
    font-size: 15px;
    border-radius: 10px;
}
form btn2{
    padding: 14px;
    font-size: 18px;
    margin-top: 20px;
}
.copyright{
    width: 100%;
    text-align: center;
    padding: 25px 0;
    background: #262626;
    font-weight: 300;
    margin-top: 20px;
}
.copyright i{
   color: red;
}

/*-----------css for small screen--------*/
.l{
    display: none;
}
@media only screen and (max-width: 600px) 
{ 
    #header{
        background-image: url(images/mobile-removebg-preview.png)
    }
    .header-Text{
        margin-top: 100%;
        font-size: 16px;
    }
    .header-Text h1{
        font-size: 30px ;
    }
    .l{
        display: block;
        font-size: 25px;
    }
    nav ul{
        background: #ff0000;
        position: fixed;
        top: 0;
        right: -200px;
        width: 200px;
        height: 100vh;
        padding-top: 50px;
        z-index: 2;
        transition: right 0.5s;
    }
    nav ul li{
        display: block;
        margin: 25px;
    }
    nav ul .l{
        position: absolute;
        top: 25px;
        left: 25px;
        cursor: pointer;
    }
    .sub-title{
        font-size: 14px;
    }
    .about-col-1, .about-col-2{
        flex-basis: 100%;
    }
    .about-col-1{
        margin-bottom: 30px;
    }
    .about-col-2{
        font-size: 14px;
    }
    .tab-links{
        font-size: 16px;
        margin-right: 20px;
    }
    .contect-left,.contect-right{
        flex-basis: 100%;
    }
    .copyright{
        font-size: 14px;
    }
    .services-list{
        flex-basis: 100%;
        font-size: 14px;
        margin-left: 14px;
    }
    .sub-title{
        font-size: 20px;
    }
}
</style>
<div id="header">
    <div class="container">
        <nav>
            <img src="images/logo.png" class="logo">
            <ul id="sidemenu">
                <li><a href="#header">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">My Work</a></li>
                <li><a href="#contect">Contect</a></li>
                <div class="l">
                <i class="fa-solid fa-circle-xmark" onclick="closemenu()"></i>
            </div>
            </ul>
            <div class="l">
            <i class="fa-solid fa-bars" onclick="openmenu()"></i>
        </div>
        </nav>
        <div class="header-Text">
            <p>Thumbnail Designer</p>
            <h1>Hii, I'm <span>Parth</span><br> From Gujarat</h1>
        </div>
    </div>
</div>
<!------------about------------>

<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="images/user.png">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p class="text"> Hii I'm Parth </p>
                 <p class="text">i am Grapic Designer and i make Youtube Thumbnail,Logo,Social Poster And More Much </p>
            
               <div class="tab-titles">
                 <p class="tab-links active-link">Skills</p>
                </div>  
             <div class="tab-contents">
                <ul>
                    <li><span>Graphic Design</span><br>Make Poster/Thumbnail</li>
                    <li><span>Poster Design</span><br>Make Food/Brand Poster</li>
                    <li><span>Thumbnail Design</span><br>Make Youtube Thumbnail</li>
                </ul>
             </div>
          </div> 
</div>

<!--------------------Services------------------------>
<div id="services">
    <div class="contanier">
        <h1 class="sub-title">Services</h1>
        <div class="services-list">
            <div>
                <i class="fa-solid fa-crop"></i>
                <h2>Graphic Designer</h2>
                <p class="p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500</p>
                <a href="#">Learn More</a>
            </div>
            <div>
                <i class="fa-brands fa-youtube"></i>
                <h2>Thumbnail Designer</h2>
                <p class="p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 </p>
                <a href="#">Learn More</a>
            </div>
            <div>
                <i class="fa-solid fa-signs-post"></i>
                <h2>Poster Designer</h2>
                <p class="p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
</div>
    
    <!------portfolio--------->

    <div id="portfolio">
        <div class="container">
            <h1 class="sub-title">My Work</h1>
        <div class="work-list">
            <div class="work">
                <img src="images/work-1.jpg">
                <div class="layer">
                    <h3>Tech Thumbnail</h3>
                    <p>This Thumbnail Say </p>
                    <a href="#"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/work-2.jpg">
                <div class="layer">
                    <h3>Youtube Thumbnail</h3>
                    <p>This Thumbnail Say </p>
                    <a href="#"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
            <div class="work">
                <img src="images/work-3.jpg">
                <div class="layer">
                    <h3>Gaming Thumbnail</h3>
                    <p>This Thumbnail Say </p>
                    <a href="#"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
        </div>
        <a href="#" class="btn">See More</a>
        </div>
    </div>
  <!--------contect--------->
 <form action="wa.php" Method="POST">
  <div id="contect">
    <div class="container">
        <div class="row">
            <div class="contect-left"> 
                <h1 class="sub-title">Contect me</h1>
                <p><i class="fa-solid fa-paper-plane"></i>Mcpeyt692@gmail.com</p>
                <p><i class="fa-solid fa-phone"></i>8320391624</p>
                <div class="social-icon">
                    <a href="https://www.instagram.com/parth_plays77/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@Parth_XD70"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                </div>
                <a href="images/Information.pdf" download class="btn2 btn3"> Download      <i class="fa-solid fa-circle-down"></i></a>
            </div>
            <div class="contect-right">
                <form>
                    <input type="text" name="Name" placeholder="Your Name" required>
                    <input type="text" name="Email" placeholder="Your Email" required>
                    <textarea name="Message" rows="6" placeholder="Message"></textarea>
                    <button type="submit" class="btn2 btn3">Submit</button>
                </form>
            </div>
        </div>
    </div> 
    <div class="copyright">
        <p>Copyright By Parth. All rights reserved <i class="fa-solid fa-copyright"></i><i class="fa-solid fa-circle-exclamation-check"></i>.</p>
    </div>
  </div>
</form>
  <script>
    var sidemenu = document.getElementById("sidemenu");

    function openmenu(){
        sidemenu.style.right = "0";
    }
    function closemenu(){
        sidemenu.style.right = "-200px";
    }
  </script>
</body>
</html>

