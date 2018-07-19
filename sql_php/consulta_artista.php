<?php 
    $artista    = $POST['artista'];
    $album      = $POST['album'];
    $gravadora  = $POST['gravadora'];

    $sql = "SELECT codigo, nome FROM discos WHERE";

    if (isset($artista)) 
    {
        $sql .= "artista ILIKE '%$artista%' AND ";
    }
    if (isset($album))
    {
        $sql .= "album ILIKE '%$album% AND ";
    }
    if (isset($gravadora))
    {
        $sql .= "gravadora ILIKE '%$gravadora%' AND ";
    }

    echo substr($sql,0,-4) . "<br>\n";

    /*
        Caso o usuário tenha preenchido "beatles" no campo do artista e "help" no campo do álbum, 
        o resultado da consulta SQL deve ser o seguinte

        SELECT codigo, nome FROM discos WHERE artista ILIKE '%beatles%' AND album ILIKE '%help%'
    */
?>