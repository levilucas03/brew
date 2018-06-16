<h4>Users in the group</h4>
@foreach($users as $key => $user)

<tr>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
</tr>

@endforeach

<h4>Accounts</h4>
@foreach($accounts as $key => $account)

<tr>
    <td>{{ $account->name }}</td>
</tr>

@endforeach