<?php  
    include("mod/connect.php");
    include("mod/sessioncheck.php");  
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Stock Application</title>

        <!-- Bootstrap Core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Stock Application</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle"  href="/pages/mod/dologout.php"> Logout
                        <i class="fa fa-sign-out fa-fw"></i>
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <?php 
                           
                            if($role=='worker'){
                                ?>

                                <li>
                            <a href="/pages/viewdata.php"><i class="fa fa-table fa-fw"></i> View Data</a>
                        </li>
                        <li>
                            <a href="/pages/updatedata.php"><i class="fa fa-keyboard-o fa-fw"></i> Update Data</a>
                        </li>
                         <li>
                            <a href="/pages/logtrans.php"><i class="fa fa-keyboard-o fa-fw"></i> Log Transaction</a>
                        </li>
                        <?php


                            }else{

                                    ?>
<li>
                            <a href="/index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                       
                        <li>
                            <a href="/pages/viewdata.php"><i class="fa fa-table fa-fw"></i> View Data</a>
                        </li>
                        
                        <li>
                            <a href="/pages/inputdata.php"><i class="fa fa-keyboard-o fa-fw"></i> Input Data</a>
                        </li>
                         <li>
                            <a href="/pages/updatedata.php"><i class="fa fa-keyboard-o fa-fw"></i> Update Data</a>
                        </li>
                        <li>
                            <a href="/pages/viewbond.php"><i class="fa fa-keyboard-o fa-fw"></i>View Bond</a>
                        </li>
                        <li>
                            <a href="/pages/insertbond.php"><i class="fa fa-keyboard-o fa-fw"></i>Input Bond</a>
                        </li>
                        <li>
                            <a href="/pages/logtrans.php"><i class="fa fa-keyboard-o fa-fw"></i> Log Transaction</a>
                        </li>


                                    <?php



                            }
                         ?>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Jual  
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="/pages/mod/doupdatebarang.php" method="POST" role="form">

                                        <div class="col-md-12 form-group">
                                            <label>ID Barang</label>
                                            <input class="form-control" placeholder="ID Barang" name="idbarang" required autofocus>
                                        </div>
                                        
                                        <div class="col-md-12 form-group">
                                            <label>Qty</label>
                                            <input class="form-control" placeholder="Qty" name="qty" required>
                                        </div>
                                        
                                        <div class="col-md-12 form-group">
                                            <label>Harga Jual</label>
                                            <input class="form-control" placeholder="Hargajual" name="hargajual" required>
                                        </div>

                                    <button  type="submit" class="btn btn-default">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                    
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->


                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>

            <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form Retur 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="/pages/mod/doreturbarang.php" method="POST" role="form">

                                        <div class="col-md-12 form-group">
                                            <label>ID Barang</label>
                                            <input class="form-control" placeholder="ID Barang" name="idbarang" autofocus>
                                        </div>
                                        
                                        <div class="col-md-12 form-group">
                                            <label>Qty</label>
                                            <input class="form-control" placeholder="Qty" name="qty">
                                        </div>
                                        
                                        <div class="col-md-12 form-group">
                                            <label>Harga</label>
                                            <input class="form-control" placeholder="Hargajual" name="hargajual">
                                        </div>

                                    <button  type="submit" class="btn btn-default">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                    
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->


                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>

            <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Form ganti harga
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="/pages/mod/doupdatetotal.php" method="POST" role="form">

                                        <div class="col-md-12 form-group">
                                            <label>ID Barang</label>
                                            <input class="form-control" placeholder="ID Barang" name="idbarang" autofocus>
                                        </div>
                                        
                                        <div class="col-md-12 form-group">
                                            <label>Total</label>
                                            <input class="form-control" placeholder="Total" name="total">
                                        </div>
                                        
                                    

                                    <button  type="submit" class="btn btn-default">Submit</button>
                                    <button type="reset" class="btn btn-default">Reset</button>
                                    
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->


                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>

            <div class="col-md-6" id="form-login">
                <form class="well" action="/pages/mod/importjual.php" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Import CSV/Excel file</legend>
                        <div class="control-group">
                            <div class="control-label">
                                <label>CSV/Excel File:</label>
                            </div>
                            <div class="controls form-group">
                                <input type="file" name="file" id="file" class="input-large form-control">
                            </div>
                        </div>

                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" id="submit" name="Import" class="btn btn-success btn-flat btn-lg pull-right button-loading" data-loading-text="Loading...">Upload</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->



    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

