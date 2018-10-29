<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="***.css" />
        <title> Magik Markdown </title>
</head>
<body>
        <h2><form action="Markdown-php_Integrateur.php" method="post">
        <label for="Editeur">Message</label> :  <textarea name="Editeur" rows="9" cols="90"></textarea><br />

        <input type="submit" value="Envoyer" />


        </form><h/2>
<?php


    require_once 'Michelf/Markdown.inc.php';
    use Michelf\Markdown;

    $text_en_markdown= $_POST['Editeur'] or $_POST['Selection'];
    $mon_html = Markdown::defaultTransform($text_en_markdown);

    $monfichier = fopen('transformation_html.php', 'a+');
    fputs($monfichier, $mon_html); 

//    echo "<div id='conteneur0'>";
//    echo "<div class='element0'>";
    echo "<h2><iframe width='1200' height='1000' src='transformation_html.php' scrolling='yes' allowfullscreen webkitallowfullscreen frameborder='0' style='border: 0 none transparent;'></iframe>></h2>";
//    echo "</div>";
//    echo "</div>";

    fclose($monfichier);
?>

