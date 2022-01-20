<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Name</title>
    <link rel="stylesheet" href="<?= base_url;?>assets/css/style.css" />
</head>
<body>
    
    <hr/>
        <h2 style="text-align: center;">Template de exemplo</h2>
    <hr/>
    
    <?php $this->loadView($viewName, $data); ?>

    <p style="text-align: center;">By: Vanderson Tiago</p>

</body>
</html>