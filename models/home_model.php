<?php

echo '<h3>- Home Model -</h3>';

//$user = new User(1);
//$user->username = 'Baz';
//$user->email = 'Baz';
//$var = $user->email;
//$user->setPassword('123');
//$user->edit();
//dd($user);

$users = User::getAll();
//dd($users);