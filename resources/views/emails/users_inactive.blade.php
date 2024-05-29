<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Inactive Reminder</title>
</head>
    <body>
        <h1>User Inactive Reminder</h1>
        <p>Hello {{ $user->name }},</p>
        <p>You have not logged in for 30 days. We miss you!</p>
        <p>Please come back</p>
    </body>
</html>