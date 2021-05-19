<?php

foreach ($data['users'] as $user){
    echo 'User Name: '.$user->user_name . '   | Email: ' . $user->user_email;
    echo '<br />';
}