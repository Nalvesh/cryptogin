<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
 <style>
 
 
 
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body{
	background:#e0eafc;
}

.container {
	
   max-width: 400px;
   min-height: 300px;
  padding: 30px;
  background:#e0eafc;
  border-radius: 20px;
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
	margin-top:6%;
   margin-left:7%;
}
.container img
{
	 max-width: 340px;
   min-height: 300px;
}

.container1 {
	  max-width: 400px;
   min-height: 100px;
  padding: 20px;
  border-radius: 20px;
  margin-left:50%;
  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px; 
  background:#e0eafc;
 
}

.container1 .nm
{
	width:450px;
	height:30px;
}
.container1 .dt
{
	width:450px;
	height:80px;
}
 
  .container1 input[type=text]
 {
    width: 90%;
    padding: 24px;
    margin: 5px 0 20px 0;
    border: none;
    border-radius: 30px;
    background: #eee;
    font-family:Brushstroke;
    font-weight: bold;
    font-size: 18px;
  }

  .container1 input[type=text]:focus {
    background-color: #ddd;
    outline: none;
  }
.registerbtn{
	 border: none;
    border-radius: 24px;
    background-color:indigo;
    color: white;
	padding: 14px 20px;
    cursor: pointer;
    font-size: 20px;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
   
}


 </style>
	
  </head>
  <body>
<?php
		include('connection.php');
	
		$id=intval($_GET['nid']);  
		$que = "SELECT * from nft where id ='$id'";
		$ret = mysqli_query($con,$que);
		
		$check = mysqli_num_rows($ret) > 0;
		
		if($check)
		{
			
			while($row = mysqli_fetch_assoc($ret))
			{
		
		?>
				
		<form action="payment.php?nid=<?php echo $row['id'];?>" method="post" name=formfetch>
		
		
		<div class="container">
			<img name="img" src="<?php echo "uploads/{$row['image']}" ; ?>" />
		</div>
	  
	  <div class=container1 style="margin-top:-40%;" >
		
		<label for="name"><b>NFT Name</b></label><br>
		<input type="text" placeholder="Name" name="name" value="<?php echo $row['NAME']; ?>" class=nm required><br><br>
		
		<label for="name"><b>Owner Name</b></label><br>
		<input type="text" placeholder="Owner Name" name="oname" class=nm value="<?php echo $row['username']; ?>" required><br><br>
		
		
		<label for="name"><b>Details</b></label><br>
		<input type="text" placeholder="Details" name="detail" class=dt value="<?php echo $row['DESCRIPTION']; ?>"required><br><br>
	
	
		<label for="name" ><b>Price </b></label>
		<input type="text" placeholder="Price" name="price" class=pr value="<?php echo $row['PRICE']; ?>ETH"required><img src="1611360.png" align="center" height=20px width=20px /><br><br>
		
		
    <button type="submit" class="registerbtn" >Buy</button>

	  
	  </div>
	  
	</form>
	
	<?php
		}
		
		}
		?>	
	
  </body>
  
</html>

