<html>
    <head>
        <title>Changez le style</title>
        <meta charset="utf-8">

        <?php
        if(!isset($_GET["style"]))
        {
            $_GET["style"] = "default";
        }

        switch($_GET["style"])
        {
            case "s1":
                echo("<link href=\"style1.css\" rel=\"stylesheet\">");
                break;

            case "s2":
                echo("<link href=\"style2.css\" rel=\"stylesheet\">");
                break;

            case "s3":
                echo("<link href=\"style3.css\" rel=\"stylesheet\">");
                break;

            default:
                echo("<link href=\"defaultstyle.css\" rel=\"stylesheet\">");
        }
        ?>

    </head>

<body>

<form action="" method="get">
    <label for="style">Choisissez votre style</label><br>
    <select name="style" id="style" method="get">
        <option value="default">---</option>
        <option value="s1">Style 1</option>
        <option value="s2">Style 2</option>
        <option value="s3">Style 3</option>
    </select>
    <input type="submit" class="btn">
</form>

</body>
</html>