
    
        <!-- start navbar -->
        <div class="row">
            <div class="col-md-12">              
                <nav class="navbar navbar-light navbar-expand-sm" style="background-color: #004D8D;">
                    <a href="<?php echo site_url('C_dasboard_atasan'); ?>" class="navbar-brand"><font color="white">PT LEN</font></a>
                    
                        <ul class="navbar-nav mr-auto">                  
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo site_url('C_dasboard_admin'); ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-danger my-2 my-sm-0" href="<?php echo site_url('C_landing_page'); ?>">Log Out</a>
                            </li>                  
                        </ul>
                   
                    <form class="form-inline" action="<?php echo site_url('C_landing_page'); ?>">                  
                        <button class="btn btn-danger my-2 my-sm-0" type="submit">Log Out</button>
                    </form>
                </nav>            
            </div>
        </div>
   
        <!-- end navbar -->
