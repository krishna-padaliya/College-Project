<%@ Page Language="C#" MasterPageFile="~/MasterPage.master" AutoEventWireup="true" CodeFile="logout.aspx.cs" Inherits="logout" Title="Logout" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">

<head>

<style>
/* Add a black background color to the top navigation */
.topnav {
 background-color: #333;
 overflow: hidden;
}

/* Style the topnav links */
.topnav a {
 float: left;
 display: block;
 color: #f2f2f2;
 text-align: center;
 padding: 14px 16px;
 text-decoration: none;
}

/* Change the color of links on hover */
.topnav a:hover {
 background-color: #ddd;
 color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
 background-color: #4CAF50;
 color: white;
}

/* Add some padding and a bottom border to all the items in the list */
ul li {
 padding: 5px;
 border-bottom: 1px solid #ddd;
}



/* Style the signup button */
.signupbtn {
 width: auto;
 padding: 10px 18px;
 background-color: #4CAF50;
 color: white;
  href="index.aspx";
}

/* Add padding to the container element */
.container {
 padding: 16px;
}

/* Change the background color of the container element when focused */
.container:focus {
 background-color: #ddd;
 outline: none;
}

/* Add padding to the form when it is in focus */
form:focus-within {
 padding: 16px;
}

/* Change the color of the input field placeholder when it is in focus */
input[type=text]:focus::-webkit-input-placeholder, input[type=password]:focus::-webkit-input-placeholder {
 color: #333;
}

/* Change the color of the input field placeholder when it is in focus */
input[type=text]:focus::-moz-placeholder, input[type=password]:focus::-moz-placeholder {
 color: #333;
}

/* Change the color of the input field placeholder when it is in focus */
input[type=text]:focus:-ms-input-placeholder, input[type=password]:focus:-ms-input-placeholder {
 color: #333;
}

/* Change the color of the input field placeholder when it is in focus */
input[type=text]:focus::-webkit-input-placeholder, input[type=password]:focus::-webkit-input-placeholder {
 color: #333;
}

/* Change the color of the input field when it is in focus */
input[type=text]:focus, input[type=password]:focus {
 background-color: #ddd;
 border: none;
 outline: none;
}

/* Style the select option when it is in focus */
select:focus {
 background-color: #ddd;
 border: none;
 outline: none;
}

/* Style the submit button */
input[type=submit] {
 background-color: #4CAF50;
 color: white;
 padding: 14px 20px;
 border: none;
 cursor: pointer;
 width: 100%;
 opacity: 0.9;
}

input[type=submit]:hover {
 opacity:1;
}
</style>
</head>
<body>
<center>

<h1>Login</h1>
<br />

<form action="login_registration" method="post">
 <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="usersname" required>
    <br />
    <br />

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br />
    <br />
    

    <div class="clearfix">
  
  <a href="index.aspx"> 
      <button type="submit" class="signupb">log out
      </a>
      </button>
    </div>
 </div>
    
</form>
</center>
</body>
</html>

</asp:Content>

