<!DOCTYPE html>
<html>

<head>
    <title>59th DGCA Registration List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1>{{ $title }}</h1>
    <p>As of: {{ $date }}</p>
    <p>
        This report provides a list of registered delegates that have been approved by the ICAO Committee and can now access various features of the DGCA 59 website.
    </p>

    <h3 style="text-align: center;">List of Approved Attendees</h3>
    @if($users->count() > 0)
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Organization</th>
            <th>Country</th>
        </tr>
        @foreach($users as $user)
        @if($user->status == 'Approved')
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->organization }}</td>
            <td>{{ $user->country }}</td>
        </tr>
        @endif
        @endforeach
    </table>
    @else
    <p>No approved attendees found.</p>
    @endif

    <section>
        <p>Prepared by:</p>
        <b>DGCA 59 Web Administrators</b>
    </section>
</body>

</html>
