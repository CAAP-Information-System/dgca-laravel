<!DOCTYPE html>
<html>

<head>
    <title>59th DGCA Registration List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>
        This report provides a list of registered delegates awaiting approval from the International Civil Aviation Organization (ICAO). These delegates have submitted their registration details but are pending confirmation from the ICAO authorities.
    </p>

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Organization</th>
            <th>Country</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->organization }}</td>
            <td>{{ $user->country }}</td>
        </tr>
        @endforeach
    </table>
    <section>
        <p>Prepared by:</p>
        <b>DGCA 59 Web Administrators</b>
    </section>
</body>

</html>
