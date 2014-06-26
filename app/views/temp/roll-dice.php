<!doctype html>
<html lang="en">
<head>
    <title>Random Number</title>
</head>
<body>
	<h1>Your Guess is: <? echo $newRollGuess; ?></h1>
    <h1>Random Number is: <? echo $newRandom; ?></h1>
    <p>
	    <? if ($newRandom == $newRollGuess){
	    		echo 'You Win';
	    } else {
	    	echo 'Try Again';
	    } ?>
    </p>
</body>
</html>