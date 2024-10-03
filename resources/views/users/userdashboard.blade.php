<x-layout>
<x-slot name="title">User Dashboard</x-slot>
<x-slot name="main">
        <div class="userdashboard"> 
        <h1>User List</h1>
        <a id="link" href="{{ url('createuser') }}">Add User</a>
        <table>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
            </tr>
            @if($users->isEmpty())
                <tr>
                    <td colspan="4" class="no-users">No users found.</td>
                </tr>
            @else
                @foreach($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->mobile }}</td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
    <br>
        {{$users->links()}}
        
        <style>
            .w-5.h-5{
                width: 25px;
            }
        </style>
</x-slot>
</x-layout>






















{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    <h1>User List</h1>
    <a id="link" href="{{ url('createuser') }}">Add User</a>
    <a id="link" href="{{ url('taskdashboard') }}">Task Dashboard</a>


    <table>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
        </tr>
        @if($users->isEmpty())
            <tr>
                <td colspan="4" class="no-users">No users found.</td>
            </tr>
        @else
            @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->mobile }}</td>
                </tr>
            @endforeach
        @endif
    </table>
    <br><br>

    {{$users->links()}}
    
    <style>
        .w-5.h-5{
            width: 25px;
        }
    </style>

</body>
</html> --}}
