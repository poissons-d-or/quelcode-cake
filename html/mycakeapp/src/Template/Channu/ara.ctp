<!DOCTYPE html>
<html>

<head>
    <title><?= $title ?></title>
    <style>
        h1 {
            font-size: 48pt;
            margin: 0 0 10px 0;
            padding: 0 20px;
            color: white;
            background: linear-gradient(to right, #aaa, #fff);
        }

        p {
            font-size: 14pt;
            color: #666;
        }
    </style>
</head>

<body>
    <header class="row">
        <h1><?= $title ?></h1>
    </header>
    <div class="row">
        <pre><?php print_r($data) ?></pre>
    </div>
    <div class="row">
        <p><?= $message ?></p>
    </div>

</body>

</html>
