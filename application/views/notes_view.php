<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Posts</title>
	<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript">
    
    $(document).on('submit', '.newNote', function(){

    	// URL, PARAMS, CALL BACK FUNCTION, RETURN TYPE (json, html, xml, what kind of data)
    	$.post(
    		"/create", 
    		$('form.newNote').serialize(),  // takes content and puts them in key/value pairs
    		function(return_data) {
    			console.log(return_data);
    			$('div').append("<p>" + $('textarea').val() + "</p>");
    		},
    		"json"
    	);

    	return false;
    })

    </script>

    <style>
	
	h1 
	{
		font-family: 'Slabo 27px', serif;
		color:#36F1CD;
		font-size: 58px;
		text-align: center;

	}
	
	h3
	{
		color: #39A0ED;
		text-align: center;
		font-family: 'Slabo 27px', serif;
		font-size: 24px;

	}
	
	form
	{	
		width: 400px;
		margin: 0 auto;
	}

	input
	{
		font-family: 'Slabo 27px', serif;
		letter-spacing: 2px;
		font-size: 20px;
		color: #36F1CD;
		background-color: #4C6085;
		padding: 20px;
		border-radius: 10px;
		position: relative;
		top: 100px;
	}

	textarea.note{
		position: relative;
		left: 134px;
	}

	p
	{
		text-align: center;
		
	}

    </style>

</head>
<body>
	<h1>My Posts</h1>
	<div class="notes">	
<?php foreach($results as $result) { 
?>		
		<p class="note"><?php echo $result['notes'] ?></p>

<?php
}	
?>
	</div>
	<h3>ADD A NOTE </h3>
		<form class="newNote" method="post" action="/create">
			<textarea name="note" class="note"></textarea>
			<input type = "submit" value="Post it!">
		</form>
</body>
</html>