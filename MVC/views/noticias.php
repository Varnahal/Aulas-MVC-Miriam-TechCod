<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    echo'<div class="noticias">';
    for ($i=0; $i < count($this->dados2); $i++) { 
        echo'<a href = "noticias/'.$this->dados2[$i]['descricao'].'/'.$this->dados2[$i]['id'].'">';
        echo'<div>';
        echo '<img src="midia/'.$this->dados2[$i]['nome_imagem'].'" alt="">';
        echo'<h3>'.$this->dados2[$i]['titulo'].'</h3>';
        echo'</div>';
        echo'</a>';
        
    }
    echo '</div>';
    ?>
</body>
</html>