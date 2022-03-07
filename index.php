<!DOCTYPE html>
<html>
<body>
<form name="form1">
    <div class="container">
        
        <input id='checkbox_id1' name='checkbox_id1' type='checkbox' value='1' />  </label>&nbsp;
        
        
        Select
          <label>
              <select id="select_id1" name="select">
                <option value=""></option>
                <option value="111">111</option>
                <option value="222">222</option>
              </select>
              </label>

        <hr>
                <input id='checkbox_id2' name='checkbox_id1' type='checkbox' value='1' />  </label>&nbsp;
        
        
        Select
          <label>
              <select id="select_id2" name="select">
                <option value=""></option>
                <option value="111">111</option>
                <option value="222">222</option>
              </select>
              </label>
    </div>    
</form>
<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 


				

</body>
</html>

<script>
var chk = document.getElementsByTagName("input");
var sel = document.getElementsByTagName("select");

for (var i = 0; i < sel.length; i++) {
    (function(i) {
        sel[i].onchange = function(){
            chk[i].checked = sel[i].value !== '';
        }
    })(i);
}


</script>


<style>

.container{
margin: 20px;
}

</style>