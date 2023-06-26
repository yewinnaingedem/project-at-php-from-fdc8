

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">            

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#starter"
            aria-expanded="true" aria-controls="starter">
            <i class="fas fa-fw fa-cog"></i>
            <span>Starter</span>
        </a>
        <div id="starter" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">                        
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/starter/page1.php">Page1</a>
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/starter/page2.php">Page2</a>            
            </div>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#oop"
            aria-expanded="true" aria-controls="oop">
            <i class="fas fa-fw fa-cog"></i>
            <span>OOP</span>
        </a>
        <div id="oop" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">                        
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/oop/encapsulation.php">Encapsulation</a>
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/oop/inheritence.php">Inheritence</a>            
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/oop/polymophism.php">Polymophism</a>                            
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/oop/abstract.php">Abstract</a>  
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/oop/interface.php">Interface</a>
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/oop/trait.php">Trait</a>                                              
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/oop/static.php">Static</a>            
            </div>
        </div>
    </li>  
    
        
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#advanced"
            aria-expanded="true" aria-controls="advanced">
            <i class="fas fa-fw fa-cog"></i>
            <span>Advanced</span>
        </a>
        <div id="advanced" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">                        
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/advanced/iterate-table.php">Iterate Table</a>
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/advanced/ajax-example-1.php">Ajax Example 1</a>            
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/advanced/ajax-example-2.php">Ajax Example 2</a>                            
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/advanced/read-file.php">Read File</a>  
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/advanced/file-open-and-read.php">File Open & Read</a>
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/advanced/file-open-and-write.php">File Open & Write</a>                                              
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/advanced/json-decode.php">Json Decode</a>    
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/advanced/exception.php">Exception</a>            
            </div>
        </div>
    </li>  

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#database"
            aria-expanded="true" aria-controls="database">
            <i class="fas fa-fw fa-cog"></i>
            <span>Database</span>
        </a>
        <div id="database" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">                        
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/db/db-connection.php">DB Connection</a>
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/db/select.php">Select</a>
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/db/create.php">Create</a>
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/db/update.php">Update</a>
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/db/delete.php">Delete</a>                
            </div>
        </div>
    </li>
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#project"
            aria-expanded="true" aria-controls="project">
            <i class="fas fa-fw fa-cog"></i>
            <span>Project</span>
        </a>
        <div id="project" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">                        
                <a class="collapse-item" href="<?php echo $_SESSION['project-path'] ?>/app/pages/project/students/list.php">Students List</a>             
            </div>
        </div>
    </li>
</ul>