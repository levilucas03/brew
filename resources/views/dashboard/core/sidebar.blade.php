<h4>Users in the group</h4>
<ul class="vertical menu">
    @foreach($users as $key => $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>

<h4>Accounts</h4>
<ul class="vertical menu">
    @foreach($accounts as $key => $account)
        <li>{{ $account->name }}</li>
    @endforeach
</ul>