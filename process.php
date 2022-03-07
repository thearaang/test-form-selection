<!DOCTYPE html>
<html>
<head>
<title>CSS Display None</title>
<style>
form {
width:70%;
margin: 0 auto;
text-align: center;
}
* {
padding: 2px;
margin:5px;
box-sizing: border-box;
} input[type="button"] {
border-radius: 10px;
}
.child{
display: inline-block;
height: 40px;
width: 40px;
color: white;
border: 4px solid black;
}
.child:nth-of-type(1){
background-color: #FF8A00;
}
.child:nth-of-type(2){
background-color: #F44336;
}
.child:nth-of-type(3){
background-color: #C303C3;
}
.child:nth-of-type(4){
background-color: #4CAF50;
}
.child:nth-of-type(5){
background-color: #03A9F4;
}
.child:nth-of-type(6){
background-color: #FEDC11;
}
</style>
</head>
<body>
<form>
<fieldset>
<legend>CSS-Display-None</legend>
<div id="container">
<div class="child primary"></div>
<!-- <div class="child primary"></div> -->
<!-- <div class="child"></div> -->
<!-- <div class="child"></div> -->
<!-- <div class="child primary"></div> -->
<!-- <div class="child primary"></div> -->
</div><br>
<input type="button" value="Hide Primary Colors" onclick="displayNone()">
</fieldset>
</form>
<script>
var primaryColor = document.getElementsByClassName('primary');
function displayNone(){
 for(var i=0; i<=3; i++)
document.getElementsByClassName('primary').style.display = 'none';
}
</script>
</body>
</html>