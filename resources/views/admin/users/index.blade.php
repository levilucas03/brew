<h1>USER PAGE GOES HERE</h1>

<table>
    <thead>
        <tr>
            <th>Name:</th>
            <th>Email:</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $key => $user)

            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>

        @endforeach
    </tbody>
</table>

