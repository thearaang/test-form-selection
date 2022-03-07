<!DOCTYPE html>
 
<head>
    <title>
        How to get selected value in
        dropdown list using JavaScript?
    </title>
</head>
 
<body>
    <h1 style="color: green">
        GeeksforGeeks
    </h1>
    <b>
        How to get selected value in dropdown
        list using JavaScript?
    </b>
     
<p> Select one from the given options:
        <select id="select1" onchange="getOption()">
            <option value="free">Free</option>
            <option value="basic">Basic</option>
            <option value="premium">Premium</option>
        </select>
    </p>
     
<p> The value of the option selected is:
        <span class="output"></span>
    </p>
 
 
    <!-- <button onclick="getOption()"> Check option </button> -->
     
    <script type="text/javascript">

// $(document).ready(function() {

// $("#select1").click(function(e) {
//     getOption(); 
// });


    function getOption() {
        selectElement = document.querySelector('#select1');
        output = selectElement.value;
        document.querySelector('.output').textContent = output;
    }

    // $('#select1').change(function() {
	// 		$.post('<?php // echo site_url("sales/set_comment"); ?>', {
	// 			comment: $('#select1').val()
	// 		});
	// 	});

// });
    </script>
</body>
 
</html>