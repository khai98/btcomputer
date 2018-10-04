<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<h1>Calculator</h1>
<form method="post" {{route('calculator')}} >
    @csrf
    <input type="number" value="" name="input1">
    <input type="number" value="" name="input2"><br>

    <button type="submit"  name="Addition" value="Addition(+)">Addition(+)</button>
    <button type="submit"  name="Subtraction" value="Subtraction(-)">Subtraction(-)</button>
    <button type="submit"  name="Multiplication" value="Multiplication(x)">Multiplication(x)</button>
    <button type="submit"  name="Division" value="Division(/)">Division(/)</button>

</form>
</body>
</html>
