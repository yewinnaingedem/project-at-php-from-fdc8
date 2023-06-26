<?php
 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>polymophism</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo $_SESSION['project-path'] ?>/vendor/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo $_SESSION['project-path'] ?>/vendor/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
            include '../template/sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php 
                    include "../template/topbar.php";
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Polymophism</h1>                      
                    </div>

                    <h3>Polymorphism (Tree Strurcture Algorithm)</h3>
                    <ul>
                        <li>
                            Polymorphism structure သည် Object တစ်ခု ထဲမှ Object များရဲ့ Property and Behavior များအား ဆင့်ကဲဆင့်ကဲ ခေါ်ယူအသုံးပြုနိုင်အောင် ရေးသားထားသော structure ဖြစ်သည်။
                        </li>
                        <li>
                            Note- OOP ရဲ့ concept က real world အတိုင်း ယူဆပြီး program ရေးတာ ဖြစ်တဲ့အတွက် Polymorphism structure ကို ကြည့်မယ်ဆိုလျှင်လဲ real world ကို ချည်းကပ် ပြီး ရေသားထားတဲ့ ပုံစံကို တွေ့ရလိမ့်မယ်။
                        </li>
                    </ul>
                    <hr>

                    <?php
                        class Car{
                            public $brand;
                            public $color;
                            public $engine;
                            public $wheel;

                            public function __construct($brand,$color,$engine,$wheel){
                                $this->brand = $brand;
                                $this->color = $color;
                                $this->engine = $engine;
                                $this->wheel = $wheel;
                            }

                            public function drive(){
                                echo "{$this->brand} drive.</br>";
                            }

                            public function stop(){
                                echo "{$this->brand} stop.</br>";
                            }
                        }

                        class Engine{
                            public $brand;
                            public $power;

                            public function __construct($brand,$power){
                                $this->brand = $brand;
                                $this->power = $power;
                            }

                            public function engineStart(){
                                echo "{$this->brand} engine start.</br>";
                            }

                            public function engineStop(){
                                echo "{$this->brand} engine stop.</br>";
                            }
                        }

                        class Wheel{
                            public $brand;
                            public $size;

                            public function __construct($brand,$size){
                                $this->brand = $brand;
                                $this->size = $size;
                            }

                            public function roll(){
                                echo "{$this->brand} wheel roll.</br>";
                            }
                        }

                        $suzukiEngine = new Engine('suzuki',1500);
                        $suzukiWheel = new Wheel('suzuki',18);
                        $suzuki = new Car('suzuki','white',$suzukiEngine,$suzukiWheel);
                        
                        $suzuki->engine->engineStart();
                        $suzuki->drive();
                        $suzuki->wheel->roll();
                        $suzuki->stop();
                        $suzuki->engine->engineStop();
                    ?>
            
                   
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo $_SESSION['project-path'] ?>/vendor/sb-admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $_SESSION['project-path'] ?>/vendor/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo $_SESSION['project-path'] ?>/vendor/sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo $_SESSION['project-path'] ?>/vendor/sb-admin/js/sb-admin-2.min.js"></script>

</body>

</html>