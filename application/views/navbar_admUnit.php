
    
        <!-- start navbar -->
        <div class="row">
            <div class="col-md-12">              
                <nav class="navbar navbar-dark navbar-expand-sm navbar-collapse" style="background-color: #185089;">
                    <a href="<?php echo site_url('C_dashboard_admUnit'); ?>" class="navbar-brand" style="margin-right:-25%;">
                        <img src="<?= base_url()?>/assets/img/logoo.png" alt="Logo" style="width:75%;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">                    
                        <ul class="navbar-nav ml-auto">                  
                            <li class="nav-item">
                                <a class="nav-link" style="padding-right: 30px;" href="<?php echo site_url('C_dashboard_admUnit'); ?>">Home</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" style="padding-right : 30px;" href="<?php echo site_url('C_history_admUnit'); ?>">History</a>
                            </li> -->                  
                        </ul>                   
                        <form class="form-inline" action="<?php echo site_url('C_landing_page/logout'); ?>">                  
                            <button class="btn btn-danger my-2 my-sm-0" type="submit">Log Out</button>
                        </form>
                    </div>
                </nav>            
            </div>
        </div>
   
        <!-- end navbar -->
