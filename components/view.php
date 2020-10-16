<?php


echo '<form method="post">';
echo '<br>';
echo '<label for="title">Title</label><br><input type="text" name="title">';
echo '<br>';
echo '<br>';
echo '<label for="name">Name</label><br><input type="text" name="name">';
echo '<br>';
echo '<br>';
echo '<label for="message">Message</label><br><input type="text" name="message">';
echo '<br>';
echo '<br>';
echo '<input type="submit" name="submit" value="Submit">';
echo '<br>';
echo '<br>';
echo '</form>';


foreach ($posts->getLatestPosts() AS $post){
    echo '<br>';
    echo $post[0];
    echo '<hr>';
    echo '<br>';
    echo $post[1];
    echo '<br>';
    echo '<br>';
    echo $post[2];
    echo '<hr>';
    echo '<br>';
    echo $post[3];
    echo '<br>';
    echo '<hr>';
    echo '<br>';



}



