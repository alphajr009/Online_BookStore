<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Online_BookStore/css/style_css.css"/>
    <link rel="stylesheet" href="../Online_BookStore/css/style.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" />

    <title>Online Book Store | SLIIT </title>
    
   
   
  </head>

  <body>
    <!------------------ Header ------------------>
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <a href="index.html">
              <img src="images\EbookStore-Logo.png" alt="EbookStore-Logo"
            /></a>
          </div>
          
    <!----------  Nav Bar ------------------>
          <nav>
            <ul id="MenuItems">
              <li><a href="home.html">Home</a></li>
			  <li><a href="latest_news.html">Latest News</a></li>
              <li><a href="book_store.html">Book Store</a></li>
              <li><a href="about_us.html">About Us</a></li>
              <li><a href="account.html">User Account</a></li>
            </ul>
          </nav>
          <a href="cart.html">
            <img
              src="images/cart.png"
              alt="Shoping Cart"
              width="28px"
              height="28px"
              style="margin-left: 10px; margin-top: 5px"
            />
          </a>
          <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" />
        </div>
 

    <!-- ----------New & Coming soon------------- -->
    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">
          <img src="images/Book 22.jpg" alt="Book22" width="68%" />
        </div>
        <div class="col-2">
          <p>Home / New & Coming soon</p>
          <h3>TRAVELING LIGHT</h3>
          <h4>Rs.1,000.00</h4>
          <h3>Book Details <i class="fa fa-indent"></i></h3><br>
		  <h3>Galatians and the Free Life in Christ</h3><br>
		  by Eugene H. Peterson<br><br>
		  <p>
		  We live in a culture of commodification. People are too often defined by what they do or own; they're treated as means to an end or cogs in a machine. What goes missing is a deep sense of personhood—the belief that all humans are unique subjects with inherent worth and the right to self-determination in authentic communion with others.
		  <br>
		  In a world dominated by things, Paul Louis Metzger argues, we must work hard to account for one another's personhood. We need to cultivate relational structures that honor every human's dignity in vital interpersonal community. The theological and philosophical framework known as personalism can help guide us toward such a culture. Drawing from a wide range of thought leaders, including Martin Luther King Jr. and Pope John Paul II, Metzger presents a personalist moral vision founded on the Christian ideals of faith, hope, and love. He demonstrates how this moral compass can help us navigate a pluralistic world by applying it to a variety of pressing ethical issues, including abortion, genetic engineering, immigration, drone warfare, and more.
		  <br>
		  Ultimately human personhood begins with the personal, triune God, who invites us to live more fully as human beings. When we refuse to reduce our fellow humans—and ourselves—to mere abstractions or objects, we follow the example of Jesus in honoring the value of every person and of creaturely life as a whole.
		  <br><br>
		  
		  </p>
        </div>
      </div>
    </div>



    <!-- -------------title----------------- -->
    <div class="small-container">
      <div class="row row-2">
        <h2>REVIEWS</h2><br><br><br>
        <p>
		"More Than Things is an ecumenical tour de force. Much ink has been spilled over time about the timeliness of personalism or the need for a Christian ethic rooted in the belief in a triune God. But in an era marked by heightened polarization and ever more strident ideological rancor, Metzger wades through the needless spirals of hot air and makes an irenic case for a moral reset. Dialogue with Buddhism, Netflix, racist poison, and the last frontier of space exploration is submitted to his critical eye. Not since Bonhoeffer's Life Together have I encountered an introduction to Christian morality that is as exciting and persuasive as this book."
		<br><br>
		<h5>-Peter Casarella, professor of theology at Duke Divinity School</h5>
		<br><br><br>
		
		"In this book Paul Louis Metzger offers an accessible, ecumenical, biblically grounded approach to Christian ethics that centers the sanctity of the human person. Motivated by deep faith commitments and existential concerns, Metzger develops and applies a distinctive framework to address the most pressing issues of our day. On genetic engineering and immigration, climate change and drones, and much more, More Than Things will equip the reader with new ways of understanding complex issues and with a rich array of resources with which to respond rightly."
		<br><br>
		<h5>-Vincent Lloyd, professor and director of the Center for Political Theology at Villanova University and author of Black Natural Law</h5>
		</p>
		
      </div>
    </div>



    <!-- ---------------------footer------------------- -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Android and ios mobile phone.</p>
            <div class="app-logo">
              <img src="images/Playstore.png" />
              <img src="images/Applestore.png" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/EbookStore-Logo-footer.png" />
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Reiciendis, Lorem ipsum dolor sit amet.
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Youtube</li>
              <li>Instagram</li>
              <li>Twitterr</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">Copyright 2020 - EbookStore</p>
      </div>
    </div>
    <!-- ---------Javascript for toggle menu------------- -->
    <script>
      var MenuItems = document.getElementById("MenuItems");
      MenuItems.style.maxHeight = "0px";
      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
  </body>
</html>
