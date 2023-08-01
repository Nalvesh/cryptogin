<html>
    <head>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style2.css">
     
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
    </head>  
    <body>
        
		

        <div class=title> ACTIVE BIDS </div>
		<form name="assignto" method="post">
		<table  cellspacing=30>
		<?php
			include('connection.php');
			$i=0;
			
			
		$que = "SELECT * from nft where TYPE='Make it a Bid'";
		$ret = mysqli_query($con,$que);
		
		$check = mysqli_num_rows($ret) > 0;
		
		if($check)
		{
			
			while($row = mysqli_fetch_assoc($ret))
			{
					if($i%4==0)
					{
					echo "<tr>";
					}
				
					echo "<td><img src='uploads/{$row['image']}' class='openButton' >";
					echo "<div class=txt>" . $row['NAME'] . "</div>";
					echo "<div class=txt1>" .$row['PRICE']. " ETH</div>";
					?>
					<a href="javascript:window.open('bid.php?nid=<?php echo $row['id']; ?>', 'newwindow' , 'width=1000px,height=650,left=200,top=100');" class="viwbtn">View Details</a> </td>
					<?php
					if($i%4==3)
					{
					echo "</tr>";
					}
				
				
			?>
					
					<?php
			
			$i++;
			}
		
		}
			
		

		
		
		?>
</table>  
</form>
		
<div class='main_div' id='popupForm'>
	<div class='closeform' id='popupForm'><i class='fa fa-close' style="margin-left:97%;margin-top:1%;font-size:30px;color:red;" onclick='closeForm()'></i></div>
	
	<?php
	include('connection.php');
	include('buy.php');
	
	?>

</div>

</body>
<script>

    function openForm() 
    {
     document.getElementById('popupForm').style.display = 'block';
    }
   function closeForm() 
    {
     document.getElementById('popupForm').style.display = 'none';
    }
  </script>
</html>   