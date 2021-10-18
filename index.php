<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<?php 
$title = "Sonnet XXIII";
$poetry = "As an unperfect actor on the stage,
Who with his fear is put beside his part,
Or some fierce thing replete with too much rage,
Whose strength’s abundance weakens his own heart;
So I, for fear of trust, forget to say
The perfect ceremony of love’s rite,
And in mine own love’s strength seem to decay,
O’ercharged with burthen of mine own love’s might.
O! let my looks be then the eloquence
And dumb presagers of my speaking breast,
Who plead for love, and look for recompense,
More than that tongue that more hath more express’d.
O! learn to read what silent love hath writ:
To hear with eyes belongs to love’s fine wit.";

$censorInput = strtolower( $_GET['input']);;
$censored_text = str_replace($censorInput, '***', $poetry);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h2><?php echo $title;?> by William Shakespeare</h2>
    <p><?php echo $poetry;?> </p>
    <p>La poesia è lunga <?php echo strlen($poetry);?> caratteri</p>
    <hr>
    <h2><?php echo $title;?> by William Shakespeare</h2>
    <p>
        <?php echo $censored_text; ?>
    </p>
    <p>La poesia è lunga <?php echo strlen($censored_text);?> caratteri</p>
    <form action="">
        <h2>Censura Shakespeare</h2>
        <input type="text" name="input" value="">
        <input type="submit" name="submit" value="censor">
    </form>
</body>
</html>