<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico">
        <title>Preview</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" style="width:180px" type="text/css">
        <link rel="stylesheet" href="js/jquery-ui-1.12.0.custom/jquery-ui.css">
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script>
/*
    $(document).ready(function() {
        // apply filterTable to all tables on this page
        //$('table').filterTable({filterExpression: 'filterTableFindAll'});
        $('table').filterTable({ // apply filterTable to all tables on this page
            inputSelector: '#busqueda'// use the existing input instead of creating a new one
        });
    });*/
        </script>
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
        <style>
.filter-table .quick { margin-left: 0.5em; font-size: 0.8em; text-decoration: none; }
.fitler-table .quick:hover { text-decoration: underline; }
td.alt { background-color: #ffc; background-color: rgba(255, 255, 0, 0.2); }
</style> <!-- or put the styling in your stylesheet -->
    </head>
    <body>
        <div class="container" style="position:absolute">
            <div class="content" style="margin:50px;">
                @foreach($imgs as $img)
                    <a href="coleccion?val={{$img['val']}}"><img class="coleccion" width="30%" height="30%" val="{{$img['val']}}" src="{{$img['img']}}" /></a>
                @endforeach
            </div>
        </div>
    </body>
</html>