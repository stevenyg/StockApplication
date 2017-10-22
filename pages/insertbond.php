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
                    <h1 class="page-header">Bond Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Insert Form Bond
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="/pages/mod/doinsertbond.php" method="POST" role="form">
                                        
                                        <div class="col-md-6 form-group">
                                            <label>Supplier</label>
                                            <input class="form-control" placeholder="Supplier" name="supplier" required autofocus>
                                        </div>
                                        
                                        <div class="col-md-6 form-group">
                                            <label>Date</label>
                                            <input class="form-control" type="Date" placeholder="Date" name="date" required>
                                        </div>
                                        
                                        <div class="col-md-6 form-group">
                                            <label>Nomor Nota</label>
                                            <input class="form-control" placeholder="Nomor Nota" name="nonota" required>
                                        </div>
                                        
                                        <div class="col-md-6 form-group">
                                            <label>Total</label>
                                            <input class="form-control" placeholder="Total" name="total" required>
                                        </div>
                                        
                                        <div class="col-md-6 form-group">
                                            <label>Sales</label>
                                            <input class="form-control" placeholder="Sales" name="sales" required>
                                        </div>
                                        
                                        <div class="col-md-6 form-group">
                                            <label>Status</label>
                                            <input class="form-control" placeholder="Status" name="status" required>
                                        </div>
                                         <div class="col-md-12 form-group">
                                            <label>Keterangan</label>
                                            <input class="form-control" placeholder="Keterangan" name="keterangan">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>


                
            </div>
            <!-- /.row -->
<div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Retur Form Bond
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="/pages/mod/doupdatebond.php" method="POST" role="form">
                                        
                                        <div class="col-md-6 form-group">
                                            <label>ID Bond</label>
                                            <input class="form-control" placeholder="ID Bond" name="idbond" required autofocus>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6 form-group">
                                            <label>Total</label>
                                            <input class="form-control" placeholder="Total" name="total" required>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label>Keterangan</label>
                                            <input class="form-control" placeholder="Keterangan" name="keterangan" required>
                                        </div>

                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>


                
            </div>

            <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update Form Status Lunas / Belum Lunas 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="/pages/mod/doupdatebondstatus.php" method="POST" role="form">
                                        
                                        <div class="col-md-6 form-group">
                                            <label>ID Bond</label>
                                            <input class="form-control" placeholder="ID Bond" name="idbond" required autofocus>
                                        </div>
                                        
                                        
                                        
                                        <div class="col-md-6 form-group">
                                            <label>Status</label>
                                            <input class="form-control" placeholder="Status" name="status" required>
                                        </div>
                                        

                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>


                
            </div>


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

