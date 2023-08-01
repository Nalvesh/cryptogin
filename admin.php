<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="styleo.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">CryptoGin</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="userlist.php">
            <i class='bx bx-list-ul' ></i>
            <span class="links_name">User's list</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="logout.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
       <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">
		
		admin

		</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Users</div>
            <div class="number"> 		<?php
		
        error_reporting(0);
		
		include("connection.php");
	
        $query = "SELECT * from users";
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);
	
       echo $total;
        

?>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total NFT's</div>
            <div class="number"> 
        <?php
		
        error_reporting(0);
		
		include("connection.php");
	
        $query = "SELECT * from nft";
        $data = mysqli_query($con,$query);
        $total = mysqli_num_rows($data);
	
       echo $total;
        

?>


			
			
			
			
			</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Profit</div>
            <div class="number">
			
			<?php
		
        error_reporting(0);
		
		include("connection.php");
	
        $result=mysqli_query($con,'SELECT SUM(PRICE)AS value_sum FROM nft');
		$row=mysqli_fetch_assoc($result);
		$sum=$row['value_sum'];
		
		echo"$sum";
		?>
			</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart cart three' ></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Return</div>
            <div class="number">086</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Down From Today</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four' ></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Recent users</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic"></li>
			  <div ><br>
               <?php include("userlist.php");?>			   
             </div>
            </ul>

       
          </ul>
          </div>
          <div class="button">
            <a href="#">See All</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Top Seling </div>
          <ul class="top-sales-details">
            <li>
            <a href="#">
              <!--<img src="images/sunglasses.jpg" alt="">-->
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
          <li>
            <a href="#">
               <!--<img src="images/jeans.jpg" alt="">-->
              <span class="product"> </span>
            </a>
            <span class="price"></span>
          </li>
          <li>
            <a href="#">
             <!-- <img src="images/nike.jpg" alt="">-->
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
          <li>
            <a href="#">
              <!--<img src="images/scarves.jpg" alt="">-->
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
          <li>
            <a href="#">
              <!--<img src="images/blueBag.jpg" alt="">-->
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
          <li>
            <a href="#">
              <!--<img src="images/bag.jpg" alt="">-->
              <span class="product"></span>
            </a>
            <span class="price"></span>
          <li>
            <a href="#">
              <!--<img src="images/addidas.jpg" alt="">-->
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
<li>
            <a href="#">
             <!--<img src="images/shirt.jpg" alt="">-->
              <span class="product"></span>
            </a>
            <span class="price"></span>
          </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

