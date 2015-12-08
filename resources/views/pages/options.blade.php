<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href={{url("css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Custom CSS -->
    <link href={{url("css/simple-sidebar.css")}} rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Options Menu
                    </a>
                </li>

                <li>
                    <div id="MainMenu">
                      <div class="list-group panel">
                        <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Item 4</a>
                        <div class="collapse" id="demo4">
                          <a href="" class="list-group-item">Subitem 1</a>
                          <a href="" class="list-group-item">Subitem 2</a>
                          <a href="" class="list-group-item">Subitem 3</a>
                        </div>
                      </div>
                    </div>
                </li>

                <li>
                    <a href="gray">Gray</a>
                </li>
                <li>
                    <a href="blue">Blue</a>
                </li>
                <li>
                    <a href="mirror">Mirror</a>
                </li>
                <li>
                    <a href="combo">Combo</a>
                </li>
                <li>
                    <a href="download">Download</a>
                </li>
                <li>
                    <a href="blur">Practice</a>
                </li>
                <li>
                    <a href="reset">reset</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Your Image</h1>
                        <p><a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Toggle Menu</a></p>

                        <?php
                        $img = Image::make(public_path('uploads/theimage.jpg'));
                        $img->resize(800, null, function ($constraint) {
                        $constraint->aspectRatio();
                        });
                        $img->encode('png');
                        $type = 'png';
                        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($img);
                        ?>
                        <img src="{!! $base64 !!}">
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src={{url("js/jquery.js")}}></script>

    <!-- Bootstrap Core JavaScript -->
    <script src={{url("js/bootstrap.min.js")}}></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
