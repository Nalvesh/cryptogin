<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style4.css" />
	
  </head>
	
  <body>
   

   
	<form action= "insert.php" method=post name=formfetch enctype="multipart/form-data">
    <div class="container">
        <h3>Upload your File :</h3>
		
			<div class="center">
				<div class="form-input">
					<input type="file" name="pic" id="image" accept="image/gif, image/jpeg, image/jpg, image/png" onchange="showPreview(event);" />
					<div class="preview">
						<img id="file-ip-1-preview">
					</div>
				</div>
			</div>	
     </div>
	  
	  <div class=container1  style="margin-top:-40%;  ">
		
		<label for="name"><b>Name</b></label><br>
		<input type="text" placeholder="Enter Name" name="fname" class=nm required><br><br>
		
		
		<label for="name"><b>Details</b></label><br>
		<input type="text" placeholder="Enter details" name="detail" class=dt required><br><br>
	
		<label for="name"><b>NFT Type :-</b></label><br>
		<input type=radio name=rd value="Make it a Bid"> Make it a Bid<br>
		<input type=radio name=rd value="Fixed Price"> Fixed Price

		<br><br>

		<label for="name" ><b>Enter Price </b></label>
		<input type="number" placeholder="Enter price" name="price" class=pr style="border:1px solid ; border-radius: 20px; padding:5px; width:100px;  background: #eee; border: none;"required><br><br>
		
		
    <button type="submit" class="registerbtn">Create</button>
	 <button type="reset" class="registerbtn1">Cancel</button>
	  
	  </div>
	  
	</form>
	<script>
		function showPreview(event)
		{
			if(event.target.files.length > 0)
			{
				var src = URL.createObjectURL(event.target.files[0]);
				var preview = document.getElementById("file-ip-1-preview");
				preview.src = src;
				preview.style.display = "block";
			}
			
		}
	</script>
   
  </body>
</html>

