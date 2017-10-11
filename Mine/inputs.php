<!DOCTYPE html>
<html>
    <head>
        <title>Inputs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="resource/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="resource/style/colors.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once './header.html';?>
        <table id="container" class="table table-bordered"></table>
        <script>
            $(function () {
                var $colorContainer = $('#container');
                var colors = ['white', 'silver', 'black', 'red', 'pink', 'purple', 'deep-purple', 'indigo', 'blue', 'cyan', 'teal', 'green', 'lime', 'yellow', 'amber', 'orange', 'deep-orange', 'brown', 'grey', 'blue-grey'];
                $.each(colors, function (i, color) {
                    var $tr = $('<tr></tr>').appendTo($colorContainer);
                    $('<input />').addClass('form-control border-' + color+'-l text-'+color).attr('placeholder',color).val(color+'-l').appendTo($('<td/>').appendTo($tr));
                    $('<input />').addClass('form-control border-' + color+' text-'+color).attr('placeholder',color).val(color).appendTo($('<td/>').appendTo($tr));
                    $('<input />').addClass('form-control border-' + color+'-d text-'+color).attr('placeholder',color).val(color+'-d').appendTo($('<td/>').appendTo($tr));
                });
            });
        </script>
    </body>
</html>
