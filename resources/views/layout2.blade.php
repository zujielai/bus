<!DOCTYPE html>
<html lang="en" >

<head>

 <title>BookBus</title>

 <link rel = "icon" href ="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Bus-logo.svg/1024px-Bus-logo.svg.png" 
        type = "image/x-icon">
  
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'>
  
<style>
.navbar { background-color: #484848; }
.navbar .navbar-nav .nav-link { color: #fff; }
.navbar .navbar-nav .nav-link:hover { color: #fbc531; }
.navbar .navbar-nav .active > .nav-link { color: #fbc531; }

.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <header>
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand text-white" href="http://localhost:8000/checkBusTicketRecord"><i class="fa fa-bus fa-fw mr-1"></i>BookBus</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvbCollapse" aria-controls="nvbCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="nvbCollapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item pl-1">
						<a class="nav-link" href="http://localhost:8000/addSchedule"><i class="fa fa-plus fa-fw mr-1"></i>Add Schedule</a>
					</li>
					<li class="nav-item pl-1">
						<a class="nav-link" href="http://localhost:8000/cancelSchedule"><i class="fa fa-times fa-fw mr-1"></i>Cancel Schedule</a>
					</li>
          
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-check-circle fa-fw mr-1"></i>Check Bus Ticket Record
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="http://localhost:8000/checkBusTicketRecord">CP</a>
                <a class="dropdown-item" href="http://localhost:8000/checkBusTicketRecord2">TNG</a>
              </div>
          </li>
          <li class="nav-item pl-1">
						<a class="nav-link" href="http://localhost:8000/feedback"><i class="fa fa-cogs fa-fw mr-1"></i>Setting</a>
					</li>
		
					
                    <li class="nav-item pl-1">
						<a class="nav-link" href="http://localhost:8000/admin/login"><i class="fa fa-sign-in fa-fw mr-1"></i>Login/Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	</header>
    @yield('content2')
    <footer class="site-footer">  
      <div class="container">
        <div class="row">
          <div class="col-xs-6 col-md-3">
            <h6>Pages</h6>
            <ul class="footer-links">
              <li><a href="">Home</a></li>
              <li><a href="">Bus Ticket</a></li>
              <li><a href="">Cancel Booking</a></li>
              <li><a href="">Check Ticket</a></li>
              <li><a href="">Contact Us</a></li>
              <li><a href="">User Profile</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Area</h6>
            <ul class="footer-links">
              <li><a href="">Johor</a></li>
              <li><a href="">Perak</a></li>
              <li><a href="">Kedah</a></li>
              <li><a href="">Perlis</a></li>
              <li><a href="">Kelantan</a></li>
              <li><a href="">Selangor</a></li>
              <li><a href="">Melaka</a></li>
              <li><a href="">Negeri Sembilan</a></li>
              <li><a href="">Pahang</a></li>
              <li><a href="">Penang</a></li>
              <li><a href="">Terengganu</a></li>
              <li><a href="">Kuala Lumpur</a></li>
            </ul>
          </div>

          <div class="col-sm-12 col-md-6">
            <h6>About Us</h6>
            <p class="text-justify"><i>BookBus</i>  is the world's largest online bus ticket booking service trusted by around 25 million happy customers globally. <i>BookBus</i> offers bus ticket booking through its website, iOS and Android mobile apps for all major routes in Malaysia.</p>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by 
         <a href="#">BookBus</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="https://instagram.com"><i class="fa fa-instagram"></i></a></li>
              <li><a class="linkedin" href="https://youtube.com"><i class="fa fa-youtube-play"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
    </footer>

    
  
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0-next.1/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css'></script>
  
  

</body>

</html>