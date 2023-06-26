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

    <title>students list</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo $_SESSION['project-path'] ?>/vendor/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo $_SESSION['project-path'] ?>/vendor/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
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
                        <h1 class="h3 mb-0 text-gray-800">Students List</h1>                      
                    </div>  

                    <a href="./create.php" class="btn btn-primary">Create</a>
                    <hr>
                                                           
                    <table id="students-table" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Actions</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Address</th>
                                <th>ID Number</th>
                                <th>Grade</th>
                                <th>Parent Name</th>
                                <th>Contact Address</th>
                                <th>Contact Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $app = new App();
                                $query = "select * from students";
                                $result = $app->selectList($query);

                                while($row = $result->fetch_assoc()){
                            ?>
                                    <tr>
                                        <td>
                                            <a class="btn btn-info" href="./edit.php?id=<?php echo $row['id'] ?>&from=list">Edit</a>
                                            <a class="btn btn-secondary" href="./details.php?id=<?php echo $row['id'] ?>">Details</a>
                                            <button class="btn btn-danger delete-btn" data-id="<?php echo $row['id'] ?>">Delete</button>
                                        </td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['gender'] ?></td>
                                        <td><?php echo $row['age'] ?></td>
                                        <td><?php echo $row['address'] ?></td>
                                        <td><?php echo $row['id_number'] ?></td>
                                        <td><?php echo $row['grade'] ?></td>
                                        <td><?php echo $row['parent_name'] ?></td>
                                        <td><?php echo $row['contact_address'] ?></td>
                                        <td><?php echo $row['contact_phone'] ?></td>
                                    </tr>
                            <?php
                                }
                            ?>                          
                        </tbody>
                    </table>

              
                    
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

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(()=>{
            $('#students-table').DataTable();

            // $('.delete-btn').click((event)=>{
            //     console.log(event.currentTarget);
            //     let deleteButton = $(event.currentTarget);
            //     let id = deleteButton.data('id');
            //     console.log(id);
            // });

            $(document).on('click','.delete-btn',(event)=>{
                // console.log(event.currentTarget);
                let deleteButton = $(event.currentTarget);
                let row = deleteButton.parent().parent();
                console.log(row);
                let id = deleteButton.data('id');
                // console.log(id);

                if(confirm("Are you sure that you will delete the record?")){
                    
                    jQuery.ajax({
                        type:"post",
                        dataType:"json",
                        url: "../../../controllers/student/delete.php?id=" + id,
                        success:(response)=>{
                            row.remove();
                            alert('You deleted the record successfully')
                        },
                        error: (error)=>{
                            console.log(error);
                        }
                    });
                }              
            })

            alertFlushMessage();

            function alertFlushMessage(){
                let flushMessage = "<?php echo isset($_SESSION['flush-message'])? $_SESSION['flush-message']: '' ?>";                
                if(flushMessage){
                    alert(flushMessage);
                }
                
            }
        });
    </script>

</body>

</html>

<?php
    $_SESSION['errors'] = null;
    $_SESSION['old-values'] = null;
    $_SESSION['flush-message'] = null;
?>
