    

        <!-- start navbar -->
        
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-dark navbar-expand-sm" style="background-color: #185089;">
                    <a class="navbar-brand" href="<?php echo site_url('C_dashboard_admin'); ?>">
                        <img src="<?= base_url()?>/assets/img/logoo.png" alt="Logo" style="width:75%;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">                     
                    <ul class="navbar-nav ml-auto">                  
                        <li class="nav-item">
                            <a class="nav-link ml-2" href="<?php echo site_url('C_dashboard_admin'); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-2" href="<?php echo site_url('C_setting_uk'); ?>">Setting Unit Kerja</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ml-2" href="<?php echo site_url('C_report'); ?>">Report</a>
                        </li>
                        <li class="nav-item dropdown mr-1">
                            <a class="nav-link ml-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Registration
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('C_sign_up_admUnit'); ?>"> Admin Unit</a>
                                <a class="dropdown-item" href="<?php echo site_url('C_sign_up_atasan'); ?>">Atasan</a>
                                <a class="dropdown-item" href="<?= site_url('C_tambah_admin'); ?>">Karyawan PKWT</a>
                            </div>
                        </li>
                    </ul>                    
                        <form class="form-inline my-2 my-lg-0" action="<?php echo site_url('C_landing_page/logout'); ?>">
                            <button class="btn btn-danger my-2 my-sm-0" type="submit">Log Out</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <!-- end navbar -->