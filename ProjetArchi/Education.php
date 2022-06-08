<?php

$con = mysqli_connect('localhost','root','','mglsi_news');

$req = mysqli_query($con,'SELECT titre, contenu FROM article where categorie = 3');

while($row = mysqli_fetch_assoc($req)){
    echo $row['titre'].'<br>'.'<hr>';

    echo $row['contenu'].'<br>';
}
?> 