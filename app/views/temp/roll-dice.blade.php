<!doctype html>
<html lang="en">
<head>
    <title>Random Number</title>
</head>
<body>
	<h1>Your Guess is: {{{ $newRollGuess }}}</h1>
    <h1>Random Number is: {{{ $newRandom }}}</h1>
    <p>
    	@if($newRandom == $newRollGuess)
    		You Win
    	@else
    		Try Again
    	@endif
    </p>
</body>
</html>