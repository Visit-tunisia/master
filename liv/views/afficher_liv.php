﻿<?php
session_start();
if($_SESSION["username"]==""){
	header('Location: login.php');

}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons Icon -->

<title>Superb premium HTML5 &amp; CSS3 template</title>

<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="../css/internal.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="../css/simple-line-icons.css" media="all">
<link rel="stylesheet" type="text/css" href="../css/style.css" media="all">
<link rel="stylesheet" type="text/css" href="../css/revslider.css" >
<link rel="stylesheet" type="text/css" href="../css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="../css/flexslider.css">
<link rel="stylesheet" type="text/css" href="../css/jquery.mobile-menu.css">

<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,600,600italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body class="onestepcheckout-index-index inner-page">
<?PHP
        include "../core/livraisonC.php";
        $livraisonC=new livraisonC();
        $livraison=$livraisonC->afficherlivraisons();
        
        //var_dump($listelivraisons->fetchAll());
        ?>
<div id="page"> 
  
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row"> 
            <!-- Header Language -->
            <div class="col-xs-7 col-sm-6">
              <div class="dropdown block-language-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="../images/english.png" alt="language"> English <span class="caret"></span> </a>
                <ul class="dropdown-menu" role="menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="../images/english.png" alt="language"> English </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="../images/francais.png" alt="language"> French </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="../images/german.png" alt="language"> German </a></li>
                </ul>
              </div>
              <!-- End Header Language --> 
              
              <!-- Header Currency -->
              <div class="dropdown block-currency-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                </ul>
              </div>
              <!-- End Header Currency -->
              
              <div class="welcome-msg hidden-xs"> Default welcome msg! </div>
            </div>
            <div class="col-xs-5 col-sm-6"> 
              
              <div class="top-cart-contain pull-right"> 
            <!-- Top Cart -->
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"><a href="#">  My Cart <span class="cart_count">2</span></a></div>
              <div>
                <div class="top-cart-content" style="display: none;">
                  <div class="actions">
                    <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span></button>
                    <a href="#" class="view-cart" ><span>View Cart</span></a> </div>
                  <!--block-subtitle-->
                  <ul class="mini-products-list" id="cart-sidebar">
                    <li class="item first">
                      <div class="item-inner"><a class="product-image" title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" src="../products-images/p4.jpg"></a>
                        <div class="product-details">
                          <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                          <!--access--> <strong>1</strong> x <span class="price">$179.99</span>
                          <p class="product-name"><a href="#">timi &amp; leslie Sophia Diaper Bag...</a></p>
                        </div>
                      </div>
                    </li>
                    <li class="item last">
                      <div class="item-inner"><a class="product-image" title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" src="../products-images/p3.jpg"></a>
                        <div class="product-details">
                          <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                          <!--access--> <strong>1</strong> x <span class="price">$80.00</span>
                          <p class="product-name"><a href="#">JP Lizzy Satchel Designer Diaper Ba...</a></p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <!--actions--> 
                </div>
              </div>
            </div>
            <!-- Top Cart -->
            <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
          
          <div class="top-search">
            <div class="block-icon pull-right"> <a data-target=".bs-example-modal-lg" data-toggle="modal" class="search-focus dropdown-toggle links"> <i class="fa fa-search"></i> </a>
              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button aria-label="Close" data-dismiss="modal" class="close" type="button"><img src="../images/interstitial-close.png" alt="close"> </button>
                    </div>
                    <div class="modal-body">
                      <form class="navbar-form">
                        <div id="search">
                          <div class="input-group">
                            <input name="search" placeholder="Search" class="form-control" type="text">
                            <button type="button" class="btn-search"><i class="fa fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
              <!-- Header Top Links -->
              <div class="toplinks">
                <div class="links">
                
                  <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a></div>
                  <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div>
                  <div class="demo"><a title="Blog" href="blog.html"><span class="hidden-xs">Blog</span></a></div>
                  <!-- Header Company -->
                  
                  <!-- End Header Company -->
                  <div class="login"><a href="login.html"><span class="hidden-xs">Log In</span></a></div>
                  
                </div>
                
              </div>
              <!-- End Header Top Links --> 
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end header --> 
  
  <!-- Navbar -->
  <nav>
    <div class="container">
          <!-- Header Logo -->
          <div class="logo"><a title="Datson" href="index.html"><img alt="Datson" src="../images/logo.png"></a></div>
          <!-- End Header Logo --> 

        <div class="mm-toggle-wrap">
          <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span> </div>
        </div>
     
          <ul class="nav hidden-xs menu-item menu-item-left">
            <li class="level0 parent drop-menu active"><a href="index.html"><span>Home</span></a>
              
            </li>
           
            
            
            </ul>
            
          
       
    </div>
  </nav>
  <!-- end nav --> 
  
  <!-- Main Container -->
  <section class="main-container col2-right-layout bounceInUp animated">
    <div class="main container">
      <div class="row">
        <div class="col-main col-sm-9">
          <div class="page-title">
            <h1>Checkout</h1>
          </div>
          <ol class="one-page-checkout" id="checkoutSteps">
           
            <li id="opc-billing" class="section allow active">
              <div class="step-title"> <span class="number">2</span>
                <h3 class="one_page_heading">Billing Information</h3>
                <!--<a href="#">Edit</a>--> 
              </div>
              <div id="checkout-step-billing" class="step a-item">
             
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
       afficher les  livraisons non traiter
    </div>
    <div class="panel-body">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
            
<td>username</td>
<td>adress</td>
<td>numero</td>
<td>date</td>
<td>supprimer</td>
<td>modifier</td>
            </tr>
        </thead>
        <?PHP
foreach($livraison as $row){
	?>
        <tbody>
           
            <tr>
    <td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['adress']; ?></td>
    <td><?PHP echo $row['numtel']; ?></td>
    <td><?PHP echo $row['date_livraison']; ?></td>
                <td><form method="POST" action="supprimerliv.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierliv.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
            </tr>
           
        </tbody>
        <?PHP
    }
    ?>
    </table>

              </div>
            </li>
                
            
              
           
          
          </ol>
        </div>
      
      </div>
    </div>
  </section>
  <!-- Main Container end --> 
  
  <!-- Brand logo starts  -->
  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="slider-items-products">
        <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="../images/b-logo3.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="../images/b-logo2.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="../images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="../images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="../images/b-logo5.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="../images/b-logo6.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="../images/b-logo1.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"><a href="#"><img src="../images/b-logo4.png" alt="Image"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Brand logo ends  --> 
  
  <!-- Footer -->  <footer>
    <div class="footer-inner">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12 col-lg-8">
            <div class="footer-column pull-left">
              <h4>CUSTOMMER SERVICE</h4>
              <ul class="links">
                <li class="first"><a href="#" title="Contact us">My Account</a></li>
                <li><a href="#" title="About us">Order History</a></li>
                <li><a href="#" title="faq">FAQ</a></li>
                <li><a href="#" title="Popular Searches">Specials</a></li>
                <li class="last"><a href="#" title="Where is my order?">Help Center</a></li>

              </ul>
            </div>
            <div class="footer-column pull-left">
              <h4>Corporation</h4>
              <ul class="links">
                <li class="first"><a title="Your Account" href="#">About us</a></li>
                <li><a title="Information" href="#">Customer Service</a></li>
                <li><a title="Addresses" href="#">Company</a></li>
                <li><a title="Addresses" href="#">Investor Relations</a></li>
                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
               
              </ul>
            </div>
            <div class="footer-column pull-left">
              <h4>Why choose Us</h4>
              <ul class="links">
                <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                <li><a href="#" title="Blog">Blog</a></li>
                <li><a href="#" title="Company">Company</a></li>
                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-lg-4">
            <div class="footer-column-last">
              <div class="newsletter-wrap">
                <h4>Sign up for emails</h4>
                <form id="newsletter-validate-detail" method="post" action="#">
                  <div id="container_form_news">
                    <div id="container_form_news2">
                      <input type="text" class="input-text required-entry validate-email" value="Enter your email address" onFocus=" this.value='' " title="Sign up for our newsletter" id="newsletter" name="email">
                      <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                    </div>
                  </div>
                </form>
              </div>
              <br>
              <div class="social">
                <h4>Follow Us</h4>
                <ul class="link">
                  <li class="fb pull-left"><a href="#"></a></li>
                  <li class="tw pull-left"><a href="#"></a></li>
                  <li class="googleplus pull-left"><a href="#"></a></li>
                  <li class="rss pull-left"><a href="#"></a></li>
                  <li class="pintrest pull-left"><a href="#"></a></li>
                  <li class="linkedin pull-left"><a href="#"></a></li>
                  <li class="youtube pull-left"><a href="#"></a></li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="container">
      <div class="col-sm-12 col-xs-12 footer-logo"><img alt="Datson" src="../images/logo.png"></div>
      <address>
          <i class="fa fa-map-marker"></i>ThemesGround, 789 Main rd, Anytown, CA 12345  USA <i class="fa fa-mobile"></i><span> +(888) 123-4567</span> <i class="fa fa-envelope"></i><span> superb@themesground.com</span>
          </address>
      </div>
    </div>
    
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12 coppyright">&copy; 2016 ThemesGround. All Rights Reserved.</div>
          
        </div>
      </div>
    </div>
  </footer>
</div>
<div id="mobile-menu">
  <ul>
    <li>
      <div class="mm-search">
        <form id="search_mob" name="search">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
          </div>
        </form>
      </div>
    </li>
    <li>
      <div class="home"><a href="#"><i class="icon-home"></i>Home</a> </div>
    </li>
    <li><a href="#">Pages</a>
      <ul>
        <li><a href="grid.html">Grid</a> </li>
        <li> <a href="list.html">List</a> </li>
        <li> <a href="product_detail.html">Product Detail</a> </li>
        <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
        <li><a href="checkout.html">Checkout</a>
          <ul>
            <li><a href="checkout_method.html">Checkout Method</a> </li>
            <li><a href="checkout_billing_info.html">Checkout Billing Info</a> </li>
          </ul>
        </li>
        <li> <a href="wishlist.html">Wishlist</a> </li>
        <li> <a href="dashboard.html">Dashboard</a> </li>
        <li> <a href="multiple_addresses.html">Multiple Addresses</a> </li>
        <li> <a href="about_us.html">About us</a> </li>
        <li><a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog-detail.html">Blog Detail</a> </li>
          </ul>
        </li>
        <li><a href="contact_us.html">Contact us</a> </li>
        <li><a href="404error.html">404 Error Page</a> </li>
      </ul>
    </li>
    <li><a href="#">Women</a>
      <ul>
        <li> <a href="#" class="">Stylish Bag</a>
          <ul>
            <li> <a href="#" class="">Clutch Handbags</a> </li>
            <li> <a href="#l" class="">Diaper Bags</a> </li>
            <li> <a href="#" class="">Bags</a> </li>
            <li> <a href="#" class="">Hobo handbags</a> </li>
          </ul>
        </li>
        <li> <a href="#">Material Bag</a>
          <ul>
            <li> <a href="#">Beaded Handbags</a> </li>
            <li> <a href="#">Fabric Handbags</a> </li>
            <li> <a href="#">Handbags</a> </li>
            <li> <a href="#">Leather Handbags</a> </li>
          </ul>
        </li>
        <li> <a href="#">Shoes</a>
          <ul>
            <li> <a href="#">Flat Shoes</a> </li>
            <li> <a href="#">Flat Sandals</a> </li>
            <li> <a href="#">Boots</a> </li>
            <li> <a href="#">Heels</a> </li>
          </ul>
        </li>
        <li> <a href="#">Jwellery</a>
          <ul>
            <li> <a href="#">Bracelets</a> </li>
            <li> <a href="#">Necklaces &amp; Pendent</a> </li>
            <li> <a href="#l">Pendants</a> </li>
            <li> <a href="#">Pins &amp; Brooches</a> </li>
          </ul>
        </li>
        <li> <a href="#">Dresses</a>
          <ul>
            <li> <a href="#">Casual Dresses</a> </li>
            <li> <a href="#">Evening</a> </li>
            <li> <a href="#">Designer</a> </li>
            <li> <a href="#">Party</a> </li>
          </ul>
        </li>
        <li> <a href="#">Swimwear</a>
          <ul>
            <li> <a href="#">Swimsuits</a> </li>
            <li> <a href="#">Beach Clothing</a> </li>
            <li> <a href="#">Clothing</a> </li>
            <li> <a href="#">Bikinis</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Men</a>
      <ul>
        <li> <a href="#" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Sport Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Casual Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Leather Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">canvas shoes</a> </li>
          </ul>
        </li>
        <li> <a href="#">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Casual Dresses</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Evening</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Designer</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Party</a> </li>
          </ul>
        </li>
        <li> <a href="#">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Coats</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Formal Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Leather Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Blazers</a> </li>
          </ul>
        </li>
        <li> <a href="#">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Casio</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Titan</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Tommy-Hilfiger</a> </li>
          </ul>
        </li>
        <li> <a href="#">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Ray Ban</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Police</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Oakley</a> </li>
          </ul>
        </li>
        <li> <a href="#">Accesories</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="#">Backpacks</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Wallets</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Laptops Bags</a> </li>
            <li class="level2 nav-6-1-1"><a href="#">Belts</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Electronics</a>
      <ul>
        <li> <a href="#"><span>Mobiles</span></a>
          <ul>
            <li> <a href="#"><span>Samsung</span></a> </li>
            <li> <a href="#"><span>Nokia</span></a> </li>
            <li> <a href="#"><span>IPhone</span></a> </li>
            <li> <a href="#"><span>Sony</span></a> </li>
          </ul>
        </li>
        <li> <a href="#" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="#"><span>Mobile Memory Cards</span></a> </li>
            <li> <a href="#"><span>Cases &amp; Covers</span></a> </li>
            <li> <a href="#"><span>Mobile Headphones</span></a> </li>
            <li> <a href="#"><span>Bluetooth Headsets</span></a> </li>
          </ul>
        </li>
        <li> <a href="#"><span>Cameras</span></a>
          <ul>
            <li> <a href="#"><span>Camcorders</span></a> </li>
            <li> <a href="#"><span>Point &amp; Shoot</span></a> </li>
            <li> <a href="#"><span>Digital SLR</span></a> </li>
            <li> <a href="#"><span>Camera Accesories</span></a> </li>
          </ul>
        </li>
        <li> <a href="#"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="#"><span>MP3 Players</span></a> </li>
            <li> <a href="#"><span>IPods</span></a> </li>
            <li> <a href="#"><span>Speakers</span></a> </li>
            <li> <a href="#"><span>Video Players</span></a> </li>
          </ul>
        </li>
        <li> <a href="#"><span>Computer</span></a>
          <ul>
            <li> <a href="#"><span>External Hard Disk</span></a> </li>
            <li> <a href="#"><span>Pendrives</span></a> </li>
            <li> <a href="#"><span>Headphones</span></a> </li>
            <li> <a href="#"><span>PC Components</span></a> </li>
          </ul>
        </li>
        <li> <a href="#"><span>Appliances</span></a>
          <ul>
            <li> <a href="#"><span>Vaccum Cleaners</span></a> </li>
            <li> <a href="#"><span>Indoor Lighting</span></a> </li>
            <li> <a href="#"><span>Kitchen Tools</span></a> </li>
            <li> <a href="#"><span>Water Purifier</span></a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Furniture</a> </li>
    <li><a href="#">Kids</a> </li>
    <li><a href="contact-us.html">Contact Us</a> </li>
  </ul>
  <div class="dropdown block-language-wrapper">
                <ul>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="../images/english.png" alt="language"> English </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="../images/francais.png" alt="language"> French </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="../images/german.png" alt="language"> German </a></li>
                </ul>
              </div>
              <div class="dropdown block-currency-wrapper"> 
                <ul>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                </ul>
              </div>
</div>
<!-- JavaScript --> 
<script type="text/javascript" src="../js/jquery.min.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script> 
<script type="text/javascript" src="../js/parallax.js"></script> 
<script type="text/javascript" src="../js/common.js"></script> 
<script type="text/javascript" src="../js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="../js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="../js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript" src="../js/cloud-zoom.js"></script>
</body>
</html>
<?php
}
?>