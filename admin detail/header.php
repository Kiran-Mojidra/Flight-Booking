
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .dropdoen{
        margin-top: 30px;
      }
    li a{
      text-decoration: none;
color: white;
background-color: #0d1f3a;
    }  
      
      ul li ul.dropdown li {
display: block;
text-decoration: none;
color: white;
padding-left: 10px;
margin-top: 10px;
margin-bottom: 5px;
}
ul li ul.dropdown {
width: 20%;
background: #0d1f3a;
position: absolute;
z-index: 999;
display: none;
text-decoration: none;
color: white;
}
ul li a:hover {
background: #0d1f3a;
text-decoration: none;
color: darkorchid;

}
ul li:hover ul.dropdown {
display: block;
text-decoration: none;
color: white;
}




* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
  }

:root {
	--navbar-bg-color: hsl(0, 0%, 15%);
	--navbar-text-color: hsl(0, 0%, 85%);
	--navbar-text-color-focus: white;
	--navbar-bg-contrast: hsl(0, 8%, 74%);
  }


.container {
	max-width: 1300px;
	padding-left: 1.4rem;
	padding-right: 1.4rem;
	margin-left: 20px;
	margin-right: 30px;
  }
  #navbar {
	--navbar-height: 64px;
	/*position: fixed;*/
	height: var(--navbar-height);
	background-color: #0d1f3a;
	left: 0;
	right: 0;
	box-shadow: 0 2px 4px rgba(4, 21, 45, 0.15);
  }
  .navbar-container {
	display: flex;
	justify-content: space-between;
	height: 100%;
	align-items: center;
  }
  .navbar-item {
	margin: 0.4em;
	width: 100%;
  }
  
  .home-link,
  .navbar-link {
	color: var(--navbar-text-color);
	text-decoration: none;
	display: flex;
	font-weight: 400;
	align-items: center;
  }
  
  .home-link:is(:focus, :hover) {
	color: var(--navbar-text-color-focus);
  }
  
  .navbar-link {
	justify-content: center;
	width: 100%;
	padding: 0.4em 0.8em;
	border-radius: 5px;
  }
  
  .navbar-link:is(:focus, :hover) {
	color: var(--navbar-text-color-focus);
	background-color: #0b192f;
  }
  .navbar-logo {
	background-color: var(--navbar-text-color-focus);
	border-radius: 50%;
	width: 30px;
	height: 30px;
	margin-right: 0.5em;
  }
  #navbar-toggle {
	cursor: pointer;
	border: none;
	background-color: transparent;
	width: 40px;
	height: 40px;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
  }
  .icon-bar {
	display: block;
	width: 25px;
	height: 4px;
	margin: 2px;
	background-color: var(--navbar-text-color);
  }
  #navbar-toggle:is(:focus, :hover) .icon-bar {
	background-color: var(--navbar-text-color-focus);
  }
  #navbar-toggle[aria-expanded="true"] .icon-bar:is(:first-child, :last-child) {
	position: absolute;
	margin: 0;
	width: 30px;
  }
  #navbar-toggle[aria-expanded="true"] .icon-bar:first-child {
	transform: rotate(45deg);
  }
  #navbar-toggle[aria-expanded="true"] .icon-bar:nth-child(2) {
	opacity: 0;
  }
  #navbar-toggle[aria-expanded="true"] .icon-bar:last-child {
	transform: rotate(-45deg);
  }
  #navbar-menu {
	position: fixed;
	top: var(--navbar-height);
	bottom: 0;
	opacity: 0;
	visibility: hidden;
	left: 0;
	right: 0;
  }
  #navbar-toggle[aria-expanded="true"] + #navbar-menu {
	background-color: rgb(6, 27, 57);
	opacity: 1;
	visibility: visible;
  }
  .navbar-links {
	list-style: none;
	position: absolute;
	background-color:#0b1c36;
	display: flex;
	flex-direction: column;
	align-items: center;
	left: 0;
	right: 0;
	margin: 1.4rem;
	border-radius: 5px;
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
  }
  
  #navbar-toggle[aria-expanded="true"] + #navbar-menu .navbar-links {
	padding: 1em;
  }
  @media screen and (min-width: 700px) {
	#navbar-toggle,
	#navbar-toggle[aria-expanded="true"] {
	  display: none;
	}
  
	#navbar-menu,
	#navbar-toggle[aria-expanded="true"] #navbar-menu {
	  visibility: visible;
	  opacity: 1;
	  position: static;
	  display: block;
	  height: 100%;
	  width: 800px;
	}
  
	.navbar-links,
	#navbar-toggle[aria-expanded="true"] #navbar-menu .navbar-links {
	  margin: 0;
	  padding: 0;
	  box-shadow: none;
	  position: static;
	  flex-direction: row;
	  width: 100%;
	  height: 100%;
	}
	
  }
  

    </style>
</head>
<body>
    <header id="navbar">
        <nav class="navbar-container container">
          <a href="Index.php" class="home-link"><h2>
            <svg viewBox='410.1386 361.7521 54.723 33.7621' width='50' height='30.84818083803885' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' preserveAspectRatio='none'>
                              <defs></defs>
                              <style>.aLgOaV3zRcolors-0dA7jHsrIh {fill:#B09E80;fill-opacity:0.98;}.aLgOaV3zRcolors-1dA7jHsrIh {fill:#E9E9E9;fill-opacity:1;}.aLgOaV3zRcolors-2dA7jHsrIh {fill:#716551;fill-opacity:1;}</style>
                              
                              <g opacity='1' transform='rotate(0 410.1386 361.7521)'> 
                                  <svg width='54.723' height='33.7621' x='410.1386' y='361.7521' version='1.1' preserveAspectRatio='none' viewBox='0 0 95.217 58.746'> 
                                      <g transform='matrix(1 0 0 1 0 0)' class='aLgOaV3zRcolors-0dA7jHsrIh'>
                                      <g>
                                          <path d='M95.217,0L55.41,29.765c2.006,1.967,3.251,4.708,3.251,7.739c0,5.982-4.847,10.832-10.827,10.836l-0.009,3.396 c0.003,0,0.005,0,0.009,0c0.002,0,0.005,0,0.008,0c1.654-0.003,3.244-0.279,4.73-0.782l1.418,5.306l0.824,0.226l-1.307-4.776 l2.561,5.12l1.307,0.357l-1.554-4.494l2.98,4.886l0.954,0.261l-1.699-3.778l3.57,4.291l1.441,0.395l-7.325-9.309 c0.487-0.31,0.956-0.645,1.403-1.008l4.36,4.361l0.501-0.06l-2.429-3.509l3.206,3.418l3.038-0.357l-3.267-3.494l6.332,3.201 l4.414-0.587l-13.657-5.563c0.216-0.286,0.419-0.581,0.614-0.883l11.944,2.455l0.828-0.569L66.46,45.06l7.497,1.148l2.563-1.762 l-8.614-1.41l10.245,0.289l3.305-2.272H62.04c0.14-0.485,0.256-0.979,0.346-1.482l17.45-1.004l0.86-1.06l-6.431,0.21l6.993-0.903 l2.08-2.563l-10.808,1.326l11.825-2.582l2.938-3.622L62.61,36.188c-0.019-0.513-0.056-1.015-0.113-1.506l21.04-7.449l1.015-1.541 l-7.684,2.426l8.33-3.407l1.862-2.826l-9.383,2.475l10.739-4.534l3.157-4.792L61.699,31.274v0.002 c-0.073-0.199-0.152-0.396-0.235-0.592l26.352-16.576l2.395-4.564l-6.854,4.361l7.505-5.602l1.451-2.766l-13.304,8.761 L93.315,3.624L95.217,0z'></path><path d='M0,0l39.807,29.765c-2.006,1.967-3.251,4.708-3.251,7.739c0,5.982,4.847,10.832,10.827,10.836l0.009,3.396 c-0.003,0-0.005,0-0.009,0c-0.002,0-0.005,0-0.008,0c-1.654-0.003-3.244-0.279-4.73-0.782l-1.418,5.306l-0.824,0.226l1.307-4.776 l-2.561,5.12l-1.307,0.357l1.555-4.494l-2.981,4.886l-0.954,0.261l1.699-3.778l-3.571,4.291l-1.44,0.395l7.326-9.309 c-0.488-0.31-0.957-0.645-1.404-1.008l-4.36,4.361l-0.501-0.06l2.429-3.509l-3.206,3.418l-3.038-0.357l3.266-3.494l-6.332,3.201 l-4.414-0.587l13.657-5.563c-0.216-0.286-0.419-0.581-0.614-0.883l-11.944,2.455l-0.828-0.569l6.572-1.784l-7.497,1.148 l-2.563-1.762l8.614-1.41l-10.245,0.289l-3.305-2.272h19.415c-0.14-0.485-0.255-0.979-0.346-1.482L15.38,38.566l-0.859-1.06 l6.43,0.21l-6.993-0.903l-2.079-2.563l10.807,1.326L10.86,32.995l-2.938-3.622l24.685,6.815c0.019-0.513,0.056-1.015,0.113-1.506 l-21.04-7.449l-1.015-1.541l7.684,2.426l-8.33-3.407l-1.862-2.826l9.383,2.475l-10.74-4.534l-3.157-4.792l29.875,16.241l0,0.002 c0.074-0.199,0.153-0.396,0.236-0.592L7.401,14.108L5.006,9.544l6.855,4.361L4.356,8.304l-1.45-2.766l13.304,8.761L1.901,3.624L0,0 z'>
      
                          </path>
                           </g></g> </svg> </g></svg></svg>
                            UDDAN</h2>
          </a>
          <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="navbar-menu" aria-labelledby="navbar-toggle">
            <ul class="navbar-links">
              <li class="navbar-item"><a class="navbar-link" href="Index.php">Dashboard</a></li>
                <li class="navbar-item">
                   <a href="#">Flight ▾</a>
                      <ul class="dropdown">
                         <li><a href="flightschedule.php">
                          Flight Schedule
                        </a></li>
                        <li><a href="pending_ticket.php">Pending Tickets</a></li>
                        <li><a href="approve_ticket.php">Approved Tickets</a></li>
                        <li><a href="cancle_ticket.php">Cancle Tickets</a></li>
						<li><a href="trefund.php">Refund</a></li>
                      </ul>
                  </li>
     
                  <li class="navbar-item">
                   <a href="#">Hotel ▾</a>
                      <ul class="dropdown">
                         <li><a href="hotel.php">Manage Hotel</a></li>
                        <li><a href="pending_booking.php">Pending Hotel Request</a></li>
                        <li><a href="approve_book.php">Approved Hotel Request</a></li>
                        <li><a href="cancle_book.php">Canceled Hotel Request</a></li>
						<li><a href="hrefund.php">Refund</a></li>
                      </ul>
                  </li>
                   <li class="navbar-item"><a class="navbar-link" href="contact.php">Enquiry</a></li>
				   <?php
if (isset($_SESSION['ausername'])) {
    $username = $_SESSION['ausername'];
    echo "<li class='navbar-item' style='color:white'>Welcome, $username</li>";
    echo "<li class='navbar-item'><a class='navbar-link' href='logout.php'>Logout</a></li>";
}
else
{
	echo " <li class='navbar-item'><a class='navbar-link' href='login.php'>Sign In</a></li>";
}
?>
             
            </ul>
          </div>
        </nav>
      </header>
      
</body>
</html>