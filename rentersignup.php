
<html>

<head>
      <title> Registration</title>
	  
	  
	  
	  <script type="text/javascript">
	function validateForm(){
	
		flag=true;
		
		/*var firstname=document.getElementById("first");
		//var lastname=document.getElementById("last");
		//var Firstname = document.contact.first;
		//if(Firstname.value=="")
		//{
			// alert("First Name must be filled out");
			 //Firstname.focus();
			 //return false;
			
		/}
		*/
		
		//var m1=document.getElementById("first");
		/*if(document.forms[0].elements[0].value.length==0)
		{
			alert("You must be filled out all the fields");
			 flag=false;
			
		}
		if(document.forms[0].elements[1].value.length==0)
		{
			alert("You must be filled out all the fields");
			 flag=false;
			
		}
		if(document.forms[0].elements[2].value.length==0)
		{
			alert("You must be filled out all the fields");
			 flag=false;
			
		}
		if(document.forms[0].elements[3].value.length==0)
		{
			alert("You must be filled out all the fields");
			 flag=false;
			
		}
		if(document.forms[0].elements[4].value.length==0)
		{
			alert("You must be filled out all the fields");
			 flag=false;
			
		}
		if(document.forms[0].elements[5].value.length==0)
		{
			alert("You must be filled out all the fields");
			 flag=false;
			
		}
		if(document.forms[0].elements[6].value.length==0)
		{
			alert("You must be filled out all the fields");
			 flag=false;
			
		}
		if(document.forms[0].elements[7].value.length==0)
		{
			alert("You must be filled out all the fields");
			 flag=false;
			
		}
		if(document.forms[0].elements[8].value.length==0)
		{
			alert("You must be filled out all the fields");
			flag=false;
			
		}*/
		var name1=document.getElementById("first");
		var lastname=document.getElementById("lastname");
		var username=document.getElementById("uname");
		var gender=document.getElementById("gender");
		var date=document.getElementById("date");
		var contact_no=document.getElementById("contact_no");
		var Address=document.getElementById("Address");
		var NID=document.getElementById("NID");
		var EmailId=document.getElementById("EmailId");
		var Password=document.getElementById("Password");
		var confirm_password=document.getElementById("confirm_password");
		var fileToUpload=document.getElementById("fileToUpload");
		
		 
		 
		
		
		//alert("hello");
	if(document.contact.FirstName.value.length==0)
		{
			
			name1.innerHTML="   *Firstname must be filled up";
			//alert("First Name must be filled out all the fields");
			name1.style.color="blue";
			
			flag=false;
		}
		if(document.contact.LastName.value.length==0)
		{
			
			lastname.innerHTML="   *Last Name must be filled up";
			//alert("First Name must be filled out all the fields");
			lastname.style.color="blue";
			
			flag=false;
		}
		if(document.contact.UserName.value.length==0)
		{
			
			username.innerHTML="   *Username must be filled up";
			//alert("First Name must be filled out all the fields");
			username.style.color="blue";
			
			flag=false;
		}
		if(document.contact.gender.value.length==0)
		{
			
			gender.innerHTML="   *Gender must be selected";
			//alert("First Name must be filled out all the fields");
			gender.style.color="blue";
			
			flag=false;
		}
		
		
		if(document.contact.date.value.length==0)
		{
			
			
			date.innerHTML="   *Date must be selected";
			//alert("First Name must be filled out all the fields");
			date.style.color="blue";
			
			flag=false;
		}
		
		if(document.contact.contact_no.value.length==0)
		{
			
			contact_no.innerHTML="   *Contact_no must be filled up";
			//alert("First Name must be filled out all the fields");
			contact_no.style.color="blue";
			
			flag=false;
		}
		if(document.contact.Address.value.length==0)
		{
			
			Address.innerHTML="   *Address  must be filled up";
			//alert("First Name must be filled out all the fields");
			Address.style.color="blue";
			
			flag=false;
		}
		if(document.contact.NID.value.length==0)
		{
			
			NID.innerHTML="   *Nid must be filled up";
			//alert("First Name must be filled out all the fields");
			NID.style.color="blue";
			
			flag=false;
		}
		
		if(document.contact.EmailId.value.length==0)
		{
			
			EmailId.innerHTML="   *Email must be filled up";
			//alert("First Name must be filled out all the fields");
			EmailId.style.color="blue";
			
			flag=false;
		}
		
		if(document.contact.Password.value.length==0)
		{
			
			Password.innerHTML="   *Password must be filled up";
			//alert("First Name must be filled out all the fields");
		    Password.style.color="blue";
			
			flag=false;
		}
	if(document.contact.confirm_password.value.length==0)
		{
			
			confirm_password.innerHTML="   *confirm_password must be filled up";
			//alert("First Name must be filled out all the fields");
		    confirm_password.style.color="blue";
			
			flag=false;
		}
		if(document.contact.fileToUpload.value.length==0)
		{
			
			fileToUpload.innerHTML="   *file must be selected";
			//alert("First Name must be filled out all the fields");
		    fileToUpload.style.color="blue";
			
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
	
	background:#D35B16;
	padding:30px;
	width:510px;
	margin:auto;
	margin-top:70px;
	height:650px;
}	
	
</style>
<body background="22.jpg">
 
    <h1 style="text-align:center;font-size: 50px; color:pink">Teant Registration</h1>
	

 <form align="center"name="contact" method="post" action="insert_db.php"  enctype="multipart/form-data" onsubmit="return validateForm();return false;">
<div class="reg">
<img src="user.png">
 <h2>Sign up here</h2>
 <table align="center">
 <tr>
 <td><b>First Name:</b></td>
 <td><input type="text" name="FirstName" placeholder="first name"><span id="first"></span></td>
 
 </tr>
  <tr>
 <td><b>Last Name:</b></td>
 <td><input type="text" name="LastName" placeholder="last name"><span id="lastname"></span></td>
 
 </tr>
 </tr>
  <tr>
 <td><b>User Name:</b></td>
 <td><input type="text" name="UserName" placeholder="User name"><span id="uname"></span></td>
 
 </tr>
 
 
   <td><b> gender:</b></td>
  <td><input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female<span id="gender"></span>
  </td>
  </tr>
  <td>
  <b>Date Of Birth:</b>
			</td>
			<td>
			<input type="date" name="date"><span id="date"></span>
			</td>
		</tr>
   
 
   
   <tr>
 <td><b>Contact_no:</b></td>
 <td><input type="text" name="contact_no" placeholder="contact_no"><span id="contact_no"></span></td>
 
 </tr>
 
</tr>
  <tr>
 <td><b>Address</b></td>
 <td><input type="text" name="Address" placeholder="Address"><span id="Address"></span></td>
 
 </tr> 
 
 </tr>
  <tr>
 <td><b>Nid:</b></td>
 <td><input type="text" name="NID" placeholder="Nid"><span id="NID"></span></td>
 
 </tr>

 
 
  <tr>
 <td><b>EmailId:</b></td>
 <td><input type="text" name="EmailId" placeholder="email id"><span id="EmailId"></span></td>
 
 </tr>
 <tr>
 <td><b>Password:</b></td>
 <td><input type="text" name="Password" placeholder="password"><span id="Password"></span></td>
 
 </tr>
 
  <tr>
 <td><b>Confirm Password:</b></td>
 <td><input type="text" name="confirm_password" placeholder="confirm password"><span id="confirm_password"></span></td>
  </tr>
 <tr><td><b>Upload Photo:</b></td>
 <td><input type="file" name="fileToUpload"  value="Upload"   ><span id="fileToUpload"></span></td>
 </tr>
 
 </tr>
 <td></td><td><input  type="Submit" name="btn" value="Submit"></td>
 </tr>

 </div>

 
</body>


<html/>  
