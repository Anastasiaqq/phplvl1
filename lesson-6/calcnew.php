<!DOCTYPE html>
<html lang=en>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylecalc.css">
    </head>
    <body>
    
    <div class="numbers">
        <form class="forma" id="numbers_form" action="servernew.php" method="POST">
        <input type="text" value="Число 1" name="n1">
        <input type="text" value="Число 2" name="n2"> 
        <p><?="$a + $b = $answer"?></p>
        </form>
        
     </div>
    <div class="signs">
        <input type="submit" form="numbers_form" value="+" name="sign">
        <input type="submit" form="numbers_form" value="-" name="sign">
        <input type="submit" form="numbers_form" value="*" name="sign">
        <input type="submit" form="numbers_form" value="/" name="sign">
    </div>
    
    
    
    </body>