<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>HTML5 Template Design</title>
    <meta content='HTML5 Template Design' name='description' />
    <meta content='width=device-width, initial-scale=1' name='viewport' />
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <div id="main-container">
        <?php require 'partials/nav.php'; ?>

        <section id="display-ads">
            <h1>
                <center> Home </center>
            </h1>
        </section>

        <section id="main-body-container">

            <article id="main-article">
                <h1> Article Box </h1>
                <section> You can write or mention your article description here </section>
            </article>

            <aside id='sidebar'>
                <h1> Slider Box </h1>
                <section> You can write or mention your Slider description here </section>
            </aside>

        </section>
        <?php require 'partials/footer.php'?>
        
    </div>

</body>

</html>