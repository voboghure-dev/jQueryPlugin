<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Jquery</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="here"></div>

    <ul id="my-ul">
        <?php for($i=1; $i<=20; $i++) { ?>
        <li class="task<?php echo $i; ?>" data-title=false>Task <?php echo $i; ?></li>
        <?php } ?>
        <div class="1">Test</div>
        <div class="1">Test</div>
    </ul>

    <script src="my-jquery.js"></script>
    <script>
        // $( document ).ready(function() {
        //     $().myjquery();
        // });
        jQuery(function($){
            $('li').each(function () {
                // $(this).myjquery({
                //     htmlTag: "li"
                // });
                $(this).myjquery();
            })
        });
    </script>
</body>
</html>