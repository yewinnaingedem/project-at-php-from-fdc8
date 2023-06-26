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

    <title>inheritence</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Inheritence</h1>                      
                    </div>
  
                    <h1>Inheritence (အမွေဆက်ခံခြင်း)</h1>
                    <ul>
                        <li>
                            Inheritence ဆိုသည်မှာ Class တစ်ခုမှ ပိုင်ဆိုင်သော variable, function များကို
                            အမွေဆက်ခံသော Class မှ တိုက်ရိုက်ခေါ်ယူအသုံးပြုနိုင်အောင် လုပ်ထားသော နည်းလမ်းဖြစ်သည်။
                        </li>
                        <li>
                            Inheritence ခေါ်သော အမွေဆက်ခံခြင်းကို ပြုလုပ်ရန် extends keyword အသုံးပြုခြင်းဖြင့် ပြုလုပ်နိုင်သည်    
                        </li>
                        <li>
                            protected modifier သည် ထို class ရဲ့ child class ကသာ ခေါ်ယူသုံးစွဲနိုင်သည်။  child class ရဲ့ object ကခေါ်ယူသုံးစွဲနိုင်ခြင်း မရှိပါ။
                        </li>

                    </ul>

                    <h1>Method Overwriting (Parent Class မှ inherit လုပ်လိုက်သော function အား overwrite လုပ်ရေးသားခြင်း) </h1>
                    <ul>
                        <li>
                            Parent Class မှာ function အား ပြန်ပြောင်းရေးချင်သောအခါတွင် အသုံးပြုသည်။
                        </li>
                        <li>
                            Note- Overwrite function များသည် Parent Class ရဲ့ function နှင့် တူရမည်။ Child Class တွင် Overwrite Function မရှိလျှင် Parent Class ရဲ့ function အတိုင်းအလုပ်လုပ်သည်။
                        </li>
                        <li>
                            
                        </li>
                                                
                    </ul>

                    <hr>
                    <?php
                        //parent class
                        class Fruit{
                            public $name;
                            public $color;

                            public function intro(){
                                echo "</br>The fruit is {$this->name}. 
                                The color is {$this->color}.</br>";
                            }

                            protected function justForChild(){
                                echo "this function can be used from child class";
                            }
                        }

                        //child class
                        class Strawberry extends Fruit{
                            public $price;

                            public function __construct($name,$color,$price){
                                $this->name = $name;
                                $this->color = $color;
                                $this->price = $price;                     
                            }

                            public function intro(){
                                echo "</br>The fruit is {$this->name}. 
                                The color is {$this->color}.
                                The price is {$this->price}.
                                </br>";
                            }

                            public function justForChild(){
                                echo "I changed the parent class just for child function";
                            }
                         
                        }

                        //child class
                        class Banana extends Fruit{
                            public $price;
                            public $scientificName;

                            public function __construct($name,$color,$price,$scientificName){
                                $this->name = $name;
                                $this->color = $color;
                                $this->price = $price;
                                $this->scientificName = $scientificName;                          
                            }

                            public function intro(){
                                echo "</br>The fruit is {$this->name}. 
                                The color is {$this->color}.
                                The price is {$this->price}.
                                The scientific name is {$this->scientificName}
                                </br>";
                            }
                        }

                        $strawberry = new Strawberry('strawberry','red',3000);
                        $strawberry->intro();
                        $strawberry->justForChild();
                        print_r($strawberry);

                        $banana = new Banana('banana','yellow',250,'bla bla bla');
                        $banana->intro();
                        print_r($banana);
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