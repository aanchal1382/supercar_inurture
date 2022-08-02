<!-- <div class="container-fluid  bg-dark text-light">
    <p class="text-center mb-5">Copyright iDiscuss Coding Forums 2021 | All Rights Reserved</p>
</div> -->


<style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+2&display=swap');
body{
    line-height: 1.5;
    font-family: 'Baloo 2', cursive;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    /* max-width: 700px; */

 margin: auto;
}
.row{
    display: flex;
    flex-wrap: wrap;
}
.footer-col ul{
    list-style: none;
}
.footer{
    background-color:black ;
    /* padding-left: 200px;
    padding-right: 200px; */
}
.footer-col{
    width: 33% ;
    padding: 50px 15px;
    /* padding-bottom:90px ; */
    
}

.footer-col img{
    /* margin-left:20px; */
    width: 205px;
}

.footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 35px;
    margin-right: 40px;
    font-weight: 500;
    position: relative;
}
.footer-col h4 ::before{
    content: ' ';
    position: absolute;
    left: 0;
    bottom: -10px;
   height: 2px;
   box-sizing: border-box;
   width: 50px;
}
.footer-col ul li:not(:last-child){
    margin-bottom: 10px;
}
.footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    display: block;
}
.footer-col ul li a:hover{
    color:#41b9e4;
    padding-left: 4px;
}
.footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    /* padding: 2px 2px 2px 2px; */
    background-color:#41303e ;
    border: 1px solid white;
    margin: 2px 2px 2px 2px;
    text-align: center;
    line-height: 40px;
    border-radius:50%;
    margin-top: 8px;
    
color: violet;
font-size: x-large;
}

.footer-col .social-links a:hover{
    color:#41b9e4;
    border: 1px solid #41b9e4;;

}

.row2 h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
margin-bottom: 4px;
    font-weight: 500;
    position: relative;
}

.center{
    text-align: center;
    color: #ffffff;
    /* padding-bottom: 20px; */
}


@media(max-width:767px){
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
    }
}



@media(m-width:574px){
    .footer-col{
        width: 100%;
    
    }
}


</style>

<div class="footer">
    <div class="container">
        <div class="row">

            <div class="footer-col">
                <img src="car6.jpg" alt="">
                <div class="social-links ml-2">
                
                    <a href="/www.facebook.com"target="blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    
                </div>
            </div>

               <div class="footer-col">
                   <h4><b>Company</b></h4>
                   <ul>
                       <li><a href="#">How it Works</a></li>
                       <li><a href="#">Policies</a></li>
                       <li><a href="#">About Us</a></li>
                       <li><a href="#">Contact us</a></li>
                       <li><a href="#">Privacy</a></li>
                       
                    </ul>
                </div>
            <div class="footer-col">
                <h4><b>Get in Touch</h4></b></h4>
                <ul>
                    <li><a href="#"><p>Call us</p><p>1800-3-900</p></a></li>
                    <li><a href="#"><p>Email us</p><p>SuperCars@gmail.com</p></a></li>
                </ul>
            </div>
        </div>
        <hr>
        <br>
       
        <div class="center">
         &copy; SuperCars.com. All Rights Reserved
        </div>