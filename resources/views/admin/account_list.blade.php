@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/account_list.css') }}">

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <main class="py-4">
            <div class="content-wrapper">
                <section class="content">
                    <header class="count-header">
                        <div class="count-card">
                            <p class="total-accounts">Total Accounts Registered:</p>
                        </div>
                    </header>

                    <body class="accounts-table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Designation / Position</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">Conference Role</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Access Role</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->designation}}</td>
                                    <td>{{$user->country}}</td>
                                    <td>{{$user->conference_role}}</td>
                                    <td>{{$user->status}}</td>
                                    <td>{{$user->access_role}}</td>
                                    <td>
                                        <button class="btn btn-info">Action</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </body>
                </section>
            </div>
        </main>



    </div>


    </div>


</body>


@endsection
