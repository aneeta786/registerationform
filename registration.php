<!DOCTYPE html>
<html>
<head>
<style></style>
<title>Registration Form Using jQuery - Demo Preview</title>
<meta name="robots" content="noindex, nofollow">
<!-- Include CSS File Here -->
<link rel="stylesheet" href="style.css"/>
<!-- Include JS File Here -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>
<body>
<div class="container">
<div class="main">
<form class="form" method="post" action="#">
<h2>Create Registration Form Using jQuery</h2>
<label>Name :</label>
<input type="text" name="name" id="name">
<label>Email :</label>
<input type="text" name="email" id="email">
<label>Password :</label>
<input type="password" name="password" id="password">
<label>Confirm Password :</label>
<input type="password" name="cpassword" id="cpassword">
<input type="button" name="register" id="register" value="Register">
</form>
</div>
<script>
$(document).ready(function() {
$("#register").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var password = $("#password").val();
var cpassword = $("#cpassword").val();
if (name == '' || email == '' || password == '' || cpassword == '') {
alert("Please fill all fields...!!!!!!");
} else if ((password.length) < 8) {
alert("Password should atleast 8 character in length...!!!!!!");
} else if (!(password).match(cpassword)) {
alert("Your passwords don't match. Try again?");
} else {
$.post("register.php", {
name1: name,
email1: email,
password1: password
}, function(data) {
if (data == 'You have Successfully Registered.....') {
$("form")[0].reset();
}
console.log(data);
});
}
});
});
</script>
</body>
</html>