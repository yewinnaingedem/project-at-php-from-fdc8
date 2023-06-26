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

    <title>encapsulation</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Encapsulation</h1>                      
                    </div>

                    <h1>Encapsulation (Data ကို ထုပ်ပိုးခြင်း)</h1>
                    <ul>
                        <li>
                            Encapsulation ထဲမှာ ရှိသော property(variable) တွေအားလုံးကို private အနေနဲ့ ကြေညာရမယ်။
                        </li>
                        <li>
                            private နဲ့ကြေညာထားသောကြောင့် ထို property အား အပြင်ကနေ ဝင်ရောက်ခွင့်မရနိုင်ပါ။             
                        </li>
                        <li>
                            ထိုကြောင့် ထို property အား အသုံးပြုနိုင်ရန်
                            Encapsulation တွင် 
                            property အား ခေါ်ယူအသုံးပြုရန် getter method၊
                            property အား အချက်အလက်ထည့်သွင်းရန် setter method၊
                            get and set method နှစ်ခုအား property တစ်ခုချင်းစီအတွက် ရေးပေးရမည်။
                        </li>
                        <li>
                            setter and getter method များသည် public နှင် ကြေညာရမယ်။
                        </li>
                        <li>
                            private, public, protected များကို access modifier လို့ခေါ်တယ်။
                        </li>
                    </ul>             
                    <hr>

                    <h1>Constructor</h1>
                    <ul>
                        <li>default constructor (no argument constructor)</li>
                        <li>argument constructor</li>
                        <li>Note- constructor is a function that process 
                            when you create object. </li>
                    </ul>
                    <hr>

                    <?php
                        // Normal Class
                        class Person{
                            public $name;
                            public $age;
                            public $address;
                            
                            public function __construct($name,$age,$address){
                                echo "I am argument constructor.</br>";
                                $this->name = $name;
                                $this->age = $age;
                                $this->address = $address;                                
                            }
                              
                        }

                        $mgmg = new Person("maung maung",13,"Yangon");                        
                        print_r($mgmg);
                        echo "</br>";

                        $aungaung = new Person("aung aung",20,"Mandalay");
                        
                        print_r($aungaung);

                        //Encapsulation Class
                        // class Person{
                        //     private $name;
                        //     private $age;
                        //     private $address;   

                        //     public function __construct(){
                        //         echo "I am no argument constructor.</br>";
                        //     }
                            
                        //     public function getName(){
                        //         return $this->name;
                        //     }

                        //     public function setName($name){
                        //         $this->name = $name;
                        //     }

                        //     public function getAge(){
                        //         return $this->age;
                        //     }

                        //     public function setAge($age){
                        //         $this->age = $age;
                        //     }

                        //     public function getAddress(){
                        //         return $this->address;
                        //     }

                        //     public function setAddress($address){
                        //         $this->address = $address;
                        //     }
                        // }

                        // $mgmg = new Person();   //object creation
                        // $mgmg->setName("maung maung");
                        // $mgmg->setAge(13);
                        // $mgmg->setAddress('Yangon');                        
                        // echo $mgmg->getName();      
                        // print_r($mgmg);               
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
    <script>
        console.log($(document));
    </script>
</body>

</html>