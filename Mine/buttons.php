<!DOCTYPE html>
<html>
    <head>
        <title>Buttons</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="resource/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="resource/style/colors.css" rel="stylesheet">
        <style>
            #container td{
                width:33.33%;
            }
        </style>
    </head>
    <body>
        <?php
        include_once './header.html';?>
        <table id="container" class="table table-bordered" data-has-ripples></table>
        <script src="resource/js/ripple.js"></script>
        <script>
            $(function () {
                var $colorContainer = $('#container');
                var colors = ['white', 'silver', 'black', 'red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'cyan', 'teal', 'green', 'lime', 'yellow', 'amber', 'orange', 'deep-orange', 'brown', 'grey', 'blue-grey'];
                $.each(colors, function (i, color) {
                    var $tr = $('<tr></tr>').appendTo($colorContainer);
                    $('<button />').addClass('btn btn-block bg-' + color + '-l text-white text-uppercase text-bold').attr('placeholder', color).html(color + '-l').appendTo($('<td/>').appendTo($tr));
                    $('<button />').addClass('btn btn-block bg-' + color + ' text-white text-uppercase text-bold').attr('placeholder', color).html(color).appendTo($('<td/>').appendTo($tr));
                    $('<button />').addClass('btn btn-block bg-' + color + '-d text-white text-uppercase text-bold').attr('placeholder', color).html(color + '-d').appendTo($('<td/>').appendTo($tr));
                });
            });
        </script>
    </body>
</html>
