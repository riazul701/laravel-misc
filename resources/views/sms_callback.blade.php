<!DOCTYPE html>
<html>
<head>
    <title>SMS Callback</title>
</head>
<body>

<form action="{{ url('/sms/callback') }}" method="POST">
    <input type="text" name="name">
    <input type="submit" name="Submit">
</form>

</body>
</html>
