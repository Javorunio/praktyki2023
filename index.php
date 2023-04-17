<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Zadanie 2 PHP</title>
</head>
<body>
<form action="" method="get">
        <input type="text" value="" name="login" id=""> </br>
        <input type="password" value="" name="haslo" id=""> </br>
        <input type="submit" value="Zaloguj się" name="submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        if($_GET['login'] === "admin"){{
            echo "Login ".$_GET['login']." jest poprawny</br> ";
        }
            if($_GET['haslo'] === "test"){
                echo "Hasło jest poprawne, zalogowano pomyślnie";
            }
            else { echo "Podane hasło jest niepoprawne";
            }
        }
        else {
            echo "Podany login jest niepoprawny";
        }
    }
    ?>
</body>
</html>