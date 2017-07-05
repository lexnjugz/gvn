
<body>
    <div class="navbar navbar-inverse navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand pull-right" href="<?= base_url('index.php/Home')?>">
                    <h4 class="m-b-0 text-white">Sospeter Odeke Ojaamong</h4>
                    <p class="text-center mini-menu m-b-0" style="font-size: 11px; font-weight: 100;">Governor of Busia - 2017</p>
                    <div class="mini-menu" style="padding-left: 75px;">
                        <img style="display: inline;" src="<?= base_url('assets/img/Coat_of_Arms_of_Busia_County.png') ?>" class="img-responsive" alt="logo-white">
                        <img style="display: inline;" src="<?= base_url('assets/img/odm.png') ?>" class="img-responsive" alt="logo-white">
                    </div>
                </a>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">
                    <li class="<?php
                        if ($this->uri->segment(2) == "") {
                            echo "active";
                        }
                        ?>">
                        <a class="text-white" href="<?= base_url('index.php/Home')?>"><i class="ion-ios-home-outline "></i> Home</a>
                        
                    </li>
                    <li class="<?php
                        if ($this->uri->segment(2) == "about") {
                            echo "active";
                        }
                        ?>">
                        <a class="text-white" href="<?= base_url('index.php/Home/about')?>">About Me </a>
                        
                    </li>
                    <li class="<?php
                        if ($this->uri->segment(2) == "why_elect_me") {
                            echo "active";
                        }
                        ?>">
                        <a class="text-white" href="<?= base_url('index.php/Home/why_elect_me')?>">Why Re-Elect Me?</a>
                    </li>
                    <li class="<?php
//                        if ($this->uri->segment(2) == "updates") {
//                            echo "active";
//                        }
                        ?>">
                        <!--<a href="#">Updates</a>-->
                    </li>
                    <li class="<?php
                        if ($this->uri->segment(2) == "contact") {
                            echo "active";
                        }
                        ?>">
                        <a class="text-white" href="<?= base_url('index.php/Home/contact')?>">Let's Connect</a>
                    </li>
                    <li class="donate <?php
                        if ($this->uri->segment(2) == "donate") {
                            echo "active";
                        }
                        ?>">
                        <a class="text-white" href="<?= base_url('index.php/Home/donate')?>" style="color: #fff;">Donate</a>
                    </li>

                </ul>
                <div class="color_line hidden-sm mini-menu"></div>
            </div><!--/.nav-collapse -->
        </div><!--/.container-->
    </div><!--navigation end-->