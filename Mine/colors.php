<!DOCTYPE html>
<html>
    <head>
        <title>Colors</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="resource/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="resource/style/colors.css" rel="stylesheet">
        <style>
            #container-colors{
                text-align: center;
                width: 100%;
            }
            #container-colors td{
                width:33.333%;
                padding:12px 2px;
                font-size:13px;
                font-weight:bold;
                text-transform:uppercase;
                text-align:center;
                color:#fff;
                text-shadow:1px 1px 4px rgba(0,0,0,0.5);
                box-shadow: inset 1px 0 rgba(0, 0, 0, 0.05);
            }
        </style>
    </head>
    <body>
        <?php include_once './header.html';?>
        <table id="container-colors"></table>
        <script>
            $(function () {
                var $colorContainer = $('#container-colors');
                var colors = ['white', 'silver', 'black', 'red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'cyan', 'teal', 'green', 'lime', 'yellow', 'amber', 'orange', 'deep-orange', 'brown', 'grey', 'blue-grey'];
                $.each(colors, function (i, color) {
                    var $tr = $('<tr></tr>').appendTo($colorContainer);
                    $('<td></td>').addClass('bg-' + color + '-l').html('lighten ' + color).appendTo($tr);
                    $('<td></td>').addClass('bg-' + color).html(color).appendTo($tr);
                    $('<td></td>').addClass('bg-' + color + '-d').html('darken ' + color).appendTo($tr);
                });
            });
        </script>
    </body>
</html>
