<?php
 
    if(session_status() == PHP_SESSION_NONE){
        session_start();
    }


    include '../../../helpers/App.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>create student</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo $_SESSION['project-path'] ?>/vendor/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo $_SESSION['project-path'] ?>/vendor/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <style>
        td{
            width:50%;
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
            include '../../template/sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php 
                    include "../../template/topbar.php";
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Create Student</h1>                      
                    </div>  

                    <a href="./list.php" class="btn btn-primary">Back</a>
                    <hr>
                    
                    <form action="../../../controllers/student/create.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" 
                            value="<?php echo isset( $_SESSION['old-values']['name'])?  $_SESSION['old-values']['name']: '';  ?>">
                            
                            <?php
                                if(isset($_SESSION['errors']['name'])){
                                    echo "<p class='text-danger'>{$_SESSION['errors']['name']}</p>";
                                }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <select class="form-control" name="gender">                                
                                <option value="male">Male</option>
                                <option value="female">Female</option>                                
                            </select>                           
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Age</label>
                            <input type="number" class="form-control" name="age" value="<?php echo isset( $_SESSION['old-values']['age'])?  $_SESSION['old-values']['age']: '';  ?>">
                            <?php
                                if(isset($_SESSION['errors']['age'])){
                                    echo "<p class='text-danger'>{$_SESSION['errors']['age']}</p>";
                                }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea name="address" class="form-control" rows="4"><?php echo isset( $_SESSION['old-values']['address'])?  $_SESSION['old-values']['address']: '';  ?></textarea>
                            <?php
                                if(isset($_SESSION['errors']['address'])){
                                    echo "<p class='text-danger'>{$_SESSION['errors']['address']}</p>";
                                }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ID Number</label>
                            <input type="text" class="form-control" name="id_number" value="<?php echo isset( $_SESSION['old-values']['id_number'])?  $_SESSION['old-values']['id_number']: '';  ?>">
                            <?php
                                if(isset($_SESSION['errors']['id_number'])){
                                    echo "<p class='text-danger'>{$_SESSION['errors']['id_number']}</p>";
                                }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Grade</label>
                            <select class="form-control" name="grade">                                
                                <option value="grade-1">Grade 1</option>
                                <option value="grade-2">Grade 2</option>                                
                                <option value="grade-3">Grade 3</option>                                
                            </select>                           
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Parent Name</label>
                            <input type="text" class="form-control" name="parent_name" value="<?php echo isset( $_SESSION['old-values']['parent_name'])?  $_SESSION['old-values']['parent_name']: '';  ?>">
                            <?php
                                if(isset($_SESSION['errors']['parent_name'])){
                                    echo "<p class='text-danger'>{$_SESSION['errors']['parent_name']}</p>";
                                }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact Address (Optional)</label>
                            <textarea name="contact_address" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Contact Phone (Optional)</label>
                            <input type="text" class="form-control" name="contact_phone">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                    
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
        $(document).ready(()=>{
           
        });
    </script>

</body>

</html>