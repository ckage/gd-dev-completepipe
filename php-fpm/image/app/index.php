<html>
<head>
    <meta charset="UTF-8">
    <title>Nginx Reference EnvVars</title>

    <style>
        body {
            font-family: Verdana, sans-serif;
            font-size: 14px;
            padding: 40px;
        }
    </style>
</head>
<body>
    <h1>Environment Variables</h1>
    <p>
        <?php
        //Call getenv() function without argument
        $env_array =getenv();
        echo "<h3>The list of environment variables with values are :</h3>";
        //Print all environment variable names with values
        foreach ($env_array as $key=>$value)
        {
            echo "$key => $value <br />";
        }

        //Print the used language name
        echo "<b> Specific environment: </b>" . getenv("env_config"). "<br />";
        //Print the values of PATH variable
        echo "<b> phpinfo: </b>" . phpinfo();

        ?>
    </p>
</body>
</html>
