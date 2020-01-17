
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Enquiry Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="../style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        
    </head>
    <body>
       
	   <div class = 'container-fluid'>
	   <br>
	   
	   <h4 class = 'h1'>Enquiry Form</h4>
	   <br>
           <label class="l1 error">* Marked Fields are Mandatory</label><br><br>
	   <div class = "register_border">
	   <form name ="form11" method="post" id = "theForm">
	   <label class = "l1" >Name :</label>&nbsp;<span class = "star" >*</span>&nbsp;
	 <input type = "text" placeholder = " Name" class = "t1" id = "t1" name ="name" ><br>
	 <span class = "error" id = "nerror" ></span><br><br>
	   
	            
	 	   <label class = "l1" >Subject :</label>&nbsp;<span class = "star" >*</span>&nbsp;
	 <input type = "text" placeholder = " Subject" class = "t1" id = "t3" name ="subject" ><br>
	 <span class = "error" id = "serror" ></span><br><br>
	 
	 	   <label class = "l1" >Message :</label>&nbsp;<span class = "star" >*</span>&nbsp;
	 <textarea placeholder = " Message" rows="5" class = "t1" id = "t4" name ="message" ></textarea><br>
	 <span class = "error" id = "merror" ></span><br>
	 
         <button type = "submit" name = "submit" value = "submit" id = "enquiry" class = "b1">Submit</button>&nbsp;
	 <button type = "reset" name = "reset" value = "clear" id = "clear" class = "b1">Clear</button>
         <br><br>
         <label class="l1" id="success">Sending&nbsp;<div class="spinner-border" role="status">
  <span class="sr-only">Loading...</span>
</div> </label>
	   </form>
	   </div>
        		
		</div>
		
		<script src = "enquiryData.js"></script>
    </body>
</html>
