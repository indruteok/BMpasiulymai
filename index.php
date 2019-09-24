<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BetaMedia</title>
        <link rel="stylesheet" href="style.php" type="text/css">
    </head>
    <body>     
        <section>
            <div>
                <h1>Kelionės</h1>
                <table class="table2" >
                    <tr>
                        <th>PASIŪLYMAS</th>
                        <th>Kaina</th>
                        <th>Paveikslėlis</th>
                    </tr>
                    <?php
                    include 'functions.php';
                    add(1);
                    ?>
                </table>
            </div>
            <div>
                <h1>Grožis</h1>
                <table class="table1">
                    <tr>
                        <th>PASIŪLYMAS</th>
                        <th>Kaina</th>
                        <th>Paveikslėlis</th>
                    </tr>
                    <?php
                    add(2);
                    ?>
                </table>
            </div>
        </section>
    </body>
</html>
