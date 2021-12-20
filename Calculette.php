<!DOCTYPE html>
<html>
 
    <head>
        <title>Mathémagique</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="calculette.css">
    </head>
     
    <body>

        <!-- Le formulaire -->
        <form action="Calculette.php" method="GET">
             
            <!-- Le nombre 1 -->
            <select name="number1" id="nb1">
                <option>Num 1</option>
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
            </select>
             
            <!-- Les choix d'opérations -->
            <select name="operations" id="signe">
                <option>Op</option>
                <option value="add">+</option>
                <option value="sub">-</option>
                <option value="div">/</option>
                <option value="multi">x</option>
            </select>
             
             
            <!-- La nombre 2 -->
            <select name="number2" id="nb2">
                <option>Num 2</option>
                <option value="0"> 0 </option>
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
                <option value="3"> 3 </option>
                <option value="4"> 4 </option>
                <option value="5"> 5 </option>
                <option value="6"> 6 </option>
                <option value="7"> 7 </option>
                <option value="8"> 8 </option>
                <option value="9"> 9 </option>
            </select>
            <!-- Le bouton '=' -->
            <p><input type="submit" name="submit" value="Valider" id="valide"></p>
         
        </form>
        
        <div id="result"> 
            <?php
         
                // Si le bouton 'submit' existe
                if (isset($_GET['submit']))
                {  
                    // Et si le number1, la number2 et le choix d'operations ne sont pas vides
                    if (!empty($_GET['number1']) && !empty($_GET['number2']) && !empty($_GET['operations']))
                    {  
                        // Et si le choix d'opérations est positionnée sur '+'
                        if ($_GET['operations'] == 'add')
                        {
                            $result = $_GET['number1'] + $_GET['number2'];
                            echo '<p>Le résultat de '.$_GET['number1'].' + '.$_GET['number2'].' est ' .$result. '</p>';
                        }
                         
                        // Sinon si le choix d'opérations est positionnné sur '-'
                        elseif ($_GET['operations'] == 'sub')
                        {
                            $result = $_GET['number1'] - $_GET['number2'];
                            echo '<p>Le résultat de '.$_GET['number1'].' - '.$_GET['number2'].' est ' .$result. '</p>';
                        }
                         
                        // Sinon si le choix d'opérations est positionnné sur '/'
                        elseif ($_GET['operations'] == 'div')
                        {
                            $result = $_GET['number1'] / $_GET['number2'];
                            echo '<p>Le résultat de '.$_GET['number1'].' / '.$_GET['number2'].' est ' .$result. '</p>';
                        }
                         
                        // Sinon si le choix d'opérations est positionnné sur '*'
                        elseif ($_GET['operations'] == 'multi')
                        {
                            $result = $_GET['number1'] * $_GET['number2'];
                            echo '<p>Le résultat de '.$_GET['number1'].' x '.$_GET['number2'].' est ' .$result. '</p>';
                        }
                         
                        // Au cas ou si l'utilisateur veut diviser par 0
                        elseif ($_GET['operations'] == 'div' && $_GET['number2'] == '0' )
                        {
                            echo '<p>On ne peut pas diviser par 0 !</p>';
                        }
                         
                        // Dans tout les autres cas
                        else
                        {
                            echo '<p>Veuillez vérifier vos valeurs !</p>';
                        }
                    }
                     
                    // Dans tout les autres cas
                    else
                    {
                        echo '<p>Remplissez correctement les champs !</p>';
                    }
                }
                 
                else
                {
                    echo 'Veuillez saisir des valeurs pour effectuer votre calcul.';
                }            
            ?>
        </div>     
    </body>
</html>