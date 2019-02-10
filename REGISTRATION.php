
<html>

<head>
      <title> Registration</title>
	  <script type="text/javascript">
	function validateForm(){
	
		flag=true;
		
	var firstname=document.getElementById("firstname");
    var lastname=document.getElementById("lastname");
	var username=document.getElementById("username");
	var gender=document.getElementById("gender");
	var date=document.getElementById("date");
	var nid=document.getElementById("nid");
	var Phone=document.getElementById("Phone");
	var EmailId=document.getElementById("EmailId");
	var Password=document.getElementById("Password");
	var ConfirmPassword=document.getElementById("ConfirmPassword");
	var address=document.getElementById("address");
	var fileToUpload=document.getElementById("fileToUpload");
	
		
	if(document.contact.firstname.value.length==0)
		{
			
			firstname.innerHTML="   *Firstname must be filled up";
	
			firstname.style.color="red";
			
			flag=false;
		}
	if(document.contact.lastname.value.length==0)
		{
			
			lastname.innerHTML="   *Last Name must be filled up";
			
			lastname.style.color="red";
			
			flag=false;
		}	
		if(document.contact.username.value.length==0)
		{
			
			username.innerHTML="   *Username must be filled up";
			//alert("First Name must be filled out all the fields");
			username.style.color="red";
			
			flag=false;
		}
			if(document.contact.gender.value.length==0)
		{
			
			gender.innerHTML="   *Gender must be filled up";
			//alert("First Name must be filled out all the fields");
			gender.style.color="red";
			
			flag=false;
		}
			if(document.contact.date.value.length==0)
		{
			
			date.innerHTML="   *date must be filled up";
			//alert("First Name must be filled out all the fields");
			date.style.color="red";
			
			flag=false;
		}
			if(document.contact.nid.value.length==0)
		{
			
			nid.innerHTML="   *nid must be filled up";
			//alert("First Name must be filled out all the fields");
			nid.style.color="red";
			
			flag=false;
		}
			if(document.contact.Phone.value.length==0)
		{
			
			Phone.innerHTML="   *Phone must be filled up";
			//alert("First Name must be filled out all the fields");
			Phone.style.color="red";
			
			flag=false;
		}
			if(document.contact.EmailId.value.length==0)
		{
			
			EmailId.innerHTML="   *Email must be filled up";
			//alert("First Name must be filled out all the fields");
			EmailId.style.color="red";
			
			flag=false;
		}
		if(document.contact.Password.value.length==0)
		{
			
			Password.innerHTML="   *Password must be filled up";
			//alert("First Name must be filled out all the fields");
			Password.style.color="red";
			
			flag=false;
		}
				if(document.contact.ConfirmPassword.value.length==0)
		{
			
			ConfirmPassword.innerHTML="   *Password must be filled up";
			//alert("First Name must be filled out all the fields");
			ConfirmPassword.style.color="red";
			
			flag=false;
		}
		if(document.contact.address.value.length==0)
		{
			
			address.innerHTML="   *Password must be filled up";
			//alert("First Name must be filled out all the fields");
			address.style.color="red";
			
			flag=false;
		}
		
		if(document.contact.fileToUpload.value.length==0)
		{
			
			fileToUpload.innerHTML="   *Password must be filled up";
			//alert("First Name must be filled out all the fields");
			fileToUpload.style.color="red";
			
			flag=false;
		}
		
		
		
		return flag;
	}
	
	
		</script>	
		
</head>
<style>
h1{
	width:40%;
	height:60px;
    background:#670B39;
    background-size:cover;
	}
.reg{
	
	background:#620A2B;
	padding:40px;
	width:450px;
	margin:auto;
	margin-top:70px;
	height:650px;
}	
	
</style>
<body background="12.jpg">
 
    <h1 align="center"> Owner Registration </h1>
 <form align="center"name="contact" method="post" action="insert_db1.php"  enctype="multipart/form-data" onsubmit="return validateForm();return false;" >
 <div class="reg">
<img src="user.png">
<h2>Sign up here</h2>
 <table align="center">
 <tr>
 <td><b>First name:</b></td>
 <td><input type="text" name="firstname" placeholder="Write Your First name "><span id="firstname"></span></td>
 
 </tr>
  <tr>
 <td><b>Last Name:</b></td>
 <td><input type="text" name="lastname" placeholder="Write Your Last name"><span id="lastname"></span></td>
 
 </tr>
 
 </tr>
  <tr>
 <td><b>User Name:</b></td>
 <td><input type="text" name="username" placeholder="Write Your user name"><span id="username"></span></td>
 
 </tr>
 
 
   <td> <b>Gender: </b></td>
  <td><input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female<span id="gender"></span>
  </td>
  </tr>
  <td>
  <b>
   
  Date Of Birth:</b>
  </td>
			<td>
			<input type="date" name="date"><span id="date">
			</td>
		</tr>
   <tr>
 <td><b>NID:</b></td>
 <td><input type="text" name="nid" placeholder="Write Your NID"><span id="nid"></span></td>
 
 </tr>
   <tr>
 <td><b>Phone No:</b></td>
 <td><input type="text" name="Phone" placeholder="Write Your Phone no"><span id="Phone"></span></td>
 
 </tr>
 
 
  <tr>
 <td><b>Email Id:</b></td>
 <td><input type="text" name="EmailId" placeholder="Write Your E-mail Id"><span id="EmailId"></span></td>
 
 </tr>
 <tr>
 <td><b>Password:</b></td>
 <td><input type="password" name="Password" placeholder="At least 8 Characters"><span id="Password"></span></td>
 
 </tr>
 
  <tr>
 <td><b>Confirm Password:</b></td>
 <td><input type="password" name="ConfirmPassword" placeholder="Re-Type password"><span id="ConfirmPassword"></span</td>
 
 <tr>
 <td><b>Address:</b></td>
 <td><input type="text" name="address" placeholder="Write Your address"><span id="address"></span></td>
 
 </tr>
 <tr><td><b>Upload Photo:</b></td>
 <td><input type="file" name="fileToUpload"  value="Upload"   ><span id="fileToUpload"></span></td>
 </tr>
 
 <tr>
 <td></td><td><input  type="Submit" name="btn" value="Submit"></td>
 </tr>

 </div>

 
<body/>


<html/>  
