
    
        <!-- start navbar -->
        <div class="row">
            <div class="col-md-12">              
                <nav class="navbar navbar-dark navbar-expand-sm" style="background-color: #004D8D;">
                    <a href="<?php echo site_url('C_dashboard_atasan'); ?>" class="navbar-brand">
                        <img src="<?= base_url()?>/assets/img/logoo.png" alt="Logo" style="width:250px;">
                    </a>                    
                    <ul class="navbar-nav ml-auto">                  
                        <li class="nav-item">
                            <a class="nav-link" style="padding-right: 30px;" href="<?php echo site_url('C_dashboard_atasan'); ?>">Home</a>
                        </li>                  
                    </ul>                   
                    <form class="form-inline" action="<?php echo site_url('C_landing_page'); ?>">                  
                        <button class="btn btn-danger my-2 my-sm-0" type="submit">Log Out</button>
                    </form>
                </nav>            
            </div>
        </div>
   
        <!-- end navbar -->
