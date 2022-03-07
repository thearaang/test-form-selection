<html>
<head>
<title>test page</title>

<script type="text/javascript">

var submitJArray = function(frm) 
{ var jArray = ["Zero", "One", "Two", "Three"];
  for (var i=0;i<jArray.length;i++)
  { var newHidInp = document.createElement('input');
        newHidInp.type  = 'hidden';
        newHidInp.name  = 'outArray[]';
        newHidInp.value = jArray[i];
    frm.appendChild(newHidInp);
  }
}
</script>
</head>
<body>
<form action="#" method="post" onSubmit="return submitJArray(this);">
  <input type="submit" value="send">
</form>

<?php print_r($_POST);?>

</body>
</html>