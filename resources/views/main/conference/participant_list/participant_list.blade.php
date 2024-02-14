@extends('layouts.app')
<title>@yield('title', 'Participant List-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/participant_list/participant_list.css') }}">
<div class="container">
    <div class="delegate-hdr-container">
        <img src="{{ asset('img/flags/philippines.png') }}" alt="CAAP Logo" class="flag">
        <header class="delegates-header">Philippine Delegates</header>
    </div>
    <table class="custom-table">
        <thead>
            <tr class="custom-tr">
                <th class="custom-th">S/N</th>
                <th class="custom-th">Salutations</th>
                <th class="custom-th">Full Name</th>
                <th class="custom-th">Conference Role</th>
                <th class="custom-th">Designation/Position</th>
            </tr>
        </thead>
        <tbody id="table-body">
            <tr class="custom-tr">
                <td class="custom-td">1</td>
                <td class="custom-td">Captain</td>
                <td class="custom-td name">Manuel Antonio Tamayo</td>
                <td class="custom-td">Head Delegate</td>
                <td class="custom-td">Director General</td>
            </tr>
            <tr class="custom-tr">
                <td class="custom-td">2</td>
                <td class="custom-td">Mr.</td>
                <td class="custom-td name">Danjun Lucas</td>
                <td class="custom-td">Delegate</td>
                <td class="custom-td">Deputy Director General of Administration</td>
            </tr>
            <tr class="custom-tr">
                <td class="custom-td">3</td>
                <td class="custom-td">Ms.</td>
                <td class="custom-td name">Edeliza Iruguin</td>
                <td class="custom-td">Delegate</td>
                <td class="custom-td">Chief of Staff/Officer-in-Charge, Corporate Planning Office</td>
            </tr>
        </tbody>
    </table>
</div>
<!-- <script>
        // Function to fetch JSON data from a file
        async function fetchData() {
            try {
                const response = await fetch('public/json/participants.json'); // Adjust the path as needed
                const data = await response.json();
                return data;
            } catch (error) {
                console.error('Error fetching data:', error);
                return [];
            }
        }

        // Function to populate the table with JSON data
        async function populateTable() {
            const jsonData = await fetchData();
            const tableBody = document.getElementById('table-body');

            jsonData.forEach(item => {
                const row = document.createElement('tr');
                row.classList.add('custom-tr');

                const nameCell = document.createElement('td');
                nameCell.classList.add('custom-td');
                nameCell.textContent = item.name;
                row.appendChild(nameCell);

                const emailCell = document.createElement('td');
                emailCell.classList.add('custom-td');
                emailCell.textContent = item.email;
                row.appendChild(emailCell);

                const countryCell = document.createElement('td');
                countryCell.classList.add('custom-td');
                countryCell.textContent = item.country;
                row.appendChild(countryCell);

                tableBody.appendChild(row);
            });
        }

        // Call the function to populate the table
        populateTable();
    </script> -->
@endsection
