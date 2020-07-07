    
   
        <!-- start navbar -->
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-sm" style="background-color: #004D8D;">
                    <a class="navbar-brand" href="<?php echo site_url('C_dashboard_admin'); ?>">
                        <img src="<?= base_url()?>/assets/img/logoo.png" alt="Logo" style="width:250px;">
                    </a>                     
                    <ul class="navbar-nav ml-auto">                  
                        <li class="nav-item">
                            <a class="nav-link" style="padding-right: 30px;" href="<?php echo site_url('C_dashboard_admin'); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="padding-right: 30px;" href="<?php echo site_url('C_report'); ?>">Report</a>
                        </li>                 
                    </ul>                    
                    <form class="form-inline my-2 my-lg-0" action="<?php echo site_url('C_landing_page'); ?>">
                        <button class="btn btn-danger my-2 my-sm-0" type="submit">Log Out</button>
                    </form>
                </nav>
            </div>
        </div>
   
        <!-- end navbar -->