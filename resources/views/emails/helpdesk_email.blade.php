<!DOCTYPE html>
<html lang="en">
<head>
    <title>Helpdesk Request</title>
</head>
<body>
<h1>Helpdesk Request</h1>
<p>Requester Name: {{ $data['name'] }}</p>
<p>Requester Email: {{ $data['email'] }}</p>
<p>Message:</p>
<p>{{ $data['message'] }}</p>
</body>
</html>