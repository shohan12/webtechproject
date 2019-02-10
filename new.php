
<html>

<head>
      <title> Registration</title>
	  
	  
	  
	  <script type="text/javascript">
	function validateForm(){
	
		flag=true;
		
		/*//var firstname=document.getElementById("first");
		//var lastname=document.getElementById("last");
		var Firstname = document.contact.first;
		if(Firstname.value=="")
		{
			 alert("First Name must be filled out");
			 Firstname.focus();
			 return false;
			
		}
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
		if(document.forms[0].elements [7].value.length==0)
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
		/*var lastname=document.getElementById("lastname");
		var gender=document.getElementById("gender");
		var phone=document.getElementById("phn");
		var email=document.getElementById("mail");
		var username=document.getElementById("uname");
		var address=document.getElementById("add");
		var institution=document.getElementById("insname");*/
		
		//alert("hello");
		if(document.contact.FirstName.value.length==0)
		{
			
			name1.innerHTML="   *Firstname must be filled up";
			alert("First Name must be filled out all the fields");
			name1.style.color="red";
			
			flag=false;
		}
		/*if(document.contact.lastname.value.length==0)
		{
			
			lastname.innerHTML="   *Last Name must be filled up";
			//alert("First Name must be filled out all the fields");
			lastname.style.color="red";
			
			flag=false;
		}
		if(document.contact.gender.value.length==0)
		{
			
			gender.innerHTML="   *Gender must be filled up";
			//alert("First Name must be filled out all the fields");
			gender.style.color="red";
			
			flag=false;
		}
		
		if(document.contact.phone.value.length==0)
		{
			if()
			
			phone.innerHTML="   *Phone must be filled up";
			//alert("First Name must be filled out all the fields");
			phone.style.color="red";
			
			flag=false;
		}
		
		if(document.contact.email.value.length==0)
		{
			
			email.innerHTML="   *Email must be filled up";
			//alert("First Name must be filled out all the fields");
			email.style.color="red";
			
			flag=false;
		}
		if(document.contact.uname.value.length==0)
		{
			
			username.innerHTML="   *Username must be filled up";
			//alert("First Name must be filled out all the fields");
			username.style.color="red";
			
			flag=false;
		}
		
		if(document.contact.address.value.length==0)
		{
			
			address.innerHTML="   *Address  must be filled up";
			//alert("First Name must be filled out all the fields");
			address.style.color="red";
			
			flag=false;
		}
		if(document.contact.iname.value.length==0)
		{
			
			institution.innerHTML="   *Institution Name must be filled up";
			//alert("First Name must be filled out all the fields");
			institution.style.color="red";
			
			flag=false;
		}*/
		return flag;
	}
	</script>
</head>

<body background="22.jpg">
 
    <h1 style="text-align:center;font-size: 50px; color:pink">Teant Registration</h1>
	

 <form align="center"name="contact" method="post" onsubmit="return validateForm();return false;">
<div class="reg">
<img src="user.png">
 <h2>Sign up here</h2>
 <table align="center">
 <tr>
 <td><b>First Name:</b></td>
 <td><input type="text" name="FirstName" placeholder="first name"><span id="first"></span></td>
 
 </tr>
  <!--<tr>
 <td><b>Last Name:</b></td>
 <td><input type="text" name="LastName" placeholder="last name"></td>
 
 </tr>
 </tr>
  <tr>
 <td><b>User Name:</b></td>
 <td><input type="text" name="UserName" placeholder="User name"></td>
 
 </tr>
 
 
   <td><b> gender:</b></td>
  <td><input type="radio" name="gender" value="male"> Male
  <input type="radio" name="gender" value="female"> Female
  </td>
  </tr>
  <td>
  <b>Date Of Birth:</b>
			</td>
			<td>
			<input type="date" name="date">
			</td>
		</tr>
   
 
   
   <tr>
 <td><b>Contact_no:</b></td>
 <td><input type="text" name="contact_no" placeholder="contact_no"></td>
 
 </tr>
 
</tr>
  <tr>
 <td><b>Address</b></td>
 <td><input type="text" name="Address" placeholder="Address"></td>
 
 </tr> 
 
 </tr>
  <tr>
 <td><b>Nid:</b></td>
 <td><input type="text" name="NID" placeholder="Nid"></td>
 
 </tr>

 
 
  <tr>
 <td><b>EmailId:</b></td>
 <td><input type="text" name="EmailId" placeholder="email id"></td>
 
 </tr>
 <tr>
 <td><b>Password:</b></td>
 <td><input type="text" name="Password" placeholder="password"></td>
 
 </tr>
 
  <tr>
 <td><b>Confirm Password:</b></td>
 <td><input type="text" name="confirm_password" placeholder="confirm password"></td>
  </tr>
 <tr><td><b>Upload Photo:</b></td>
 <td><input type="file" name="fileToUpload"  value="Upload"   ></td>
 </tr>
 
 </tr>-->
 <td></td><td><input  type="Submit" name="btn" value="Submit"></td>
 </tr>

 </div>

 
</body>


<html/>  
