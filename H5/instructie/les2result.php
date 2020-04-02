<html>

    <head>

    </head>
    <body>
    <h1>Groenteboer Sirin</h1>

    <table>
            <tr>
                    <td>
                            <b>Invoerveld</b>
                    </td>
                    <td>
                            <b>Ingevulde Gegevens</b>
                    </td>
            </tr>
            <tr>
                    <td>
                        Naam:
                    </td>
                    <td>
                        <?php
                        echo($_POST["fullname"]);//blokhaken betekenen er komt string
                        ?>
                    </td>


        <tr>
            <td>
                Geslacht:
            </td>
            <td>
                <?php
                echo($_POST["gender"]);//blokhaken betekenen er komt string
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Gemeente:
            </td>
            <td>
                <?php
                echo($_POST["Township"]);//blokhaken betekenen er komt string
                ?>
            </td>

        </tr>
    </table>
    </body>


</html>

