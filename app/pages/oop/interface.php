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

    <title>interface</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Interface</h1>                      
                    </div>

                    <ul>
                        <li>
                            Interface နဲ့ method တွေဟာ ကြေညာရုံသက်သက်သာ ရှိပြီး abstract method များဖြစ်ကြသည်။ Task တွေကို implements လုပ်တဲ့ class မှသာ တည်ဆောက်ရသည်။
                        </li>
                        <li>
                            Interface မှာ အနည်းဆုံး interface Method တစ်ခုပါရမယ်။ Interface Method တွေဟာ ကြေညာရုံသက်သက်သာ ဖြစ်ပြီး code တည်ဆောက်ထားခြင်းမရှိပါ။
                        </li>
                        <li>
                            Interface Method တွေကို သတ်မှတ်တဲ့အခါ public ကိုသာ အသုံးပြုရမည်။
                        </li>
                        <li>
                            Interface မှာ properties မရှိဘူး။ constructor မရှိဘူး။
                        </li>
                    </ul>

                    <hr>
                    <h3>Interface Implmemented Class Rules</h3>
                    <ul>
                        <li>
                            Interface Class မှာ ကြေညာထားသော method တွေရဲ့ နာမည်အတိုင်း တစ်ထပ်တည်း implements လုပ်သော class မှာ ပြန်ကြေညာပေးရမယ်။
                        </li>                        
                            Interface အား class တစ်ခုတွင် implements လုပ်ချင်သောအခါ implements keyword ကို အသုံးပြုရမည်။
                        </li>
                    </ul>
                    
                    <hr>

                    <?php
                        interface A{
                            public function fun1();
                            public function fun2();
                            
                        }

                        interface B{
                            public function fun3();
                            public function fun4();                                                        
                        }

                        class Test implements A,B{
                            public function fun1(){
                                echo "I am fun1 function.</br>";
                            }

                            public function fun2(){
                                echo "I am fun2 function.</br>";
                            }

                            public function fun3(){
                                echo "I am fun3 function.</br>";
                            }

                            public function fun4(){
                                echo "I am fun4 function.</br>";
                            }
                        }

                        $test = new Test();
                        $test->fun1();
                        $test->fun2();
                        $test->fun3();
                        $test->fun4();
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