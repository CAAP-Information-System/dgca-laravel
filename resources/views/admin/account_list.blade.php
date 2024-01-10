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

                    <div class="accounts-table">
                        <form action="{{ route('update-access-role') }}" method="POST">
                            @csrf
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
                                        <td>
                                            <!-- TO DO:
                                            1. the access role does not update the selected role
                                             -->
                                            <select name="access_role" class="form-control">
                                                <option value="admin" {{ $user->access_role === 'admin' ? 'selected' : '' }}>Admin</option>
                                                <option value="user" {{ $user->access_role === 'user' ? 'selected' : '' }}>Guest</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-info">Update</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </section>
            </div>
        </main>
    </div>
</body>

@endsection
