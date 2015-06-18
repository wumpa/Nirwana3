<!doctype html>
<head>
	<Title><?php echo $title ?></Title>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="all"/>
</head>

<body>

<div id="wrapper">

        <div id="top">
          <div id="logo">
                <h1>Nirwana Online Stage</h1>
            </div>

              <?php

                if($this->session->userdata('username') != NULL){
                    $this->load->view('Header/UserSessionON');
                }else{
                    $this->load->view('Header/UserSessionOFF');
                }

              ?>

        </div>
    
        <div id="topnav" class="wrap">
              <ul id="nav">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>catalog">Catalog</a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>catalog/kidonly">Kids</a></li>
                            <li><a href="<?php echo base_url(); ?>catalog/manonly">Men</a></li>
                            <li><a href="<?php echo base_url(); ?>catalog/womenonly">Women</a></li>
                            <li><a href="<?php echo base_url(); ?>catalog/sportonly">Sports</a></li>
                        </ul>
                    </li>	
                    <li><a href="<?php echo base_url(); ?>Sale">Sale</a></li>    
              </ul>
            
              <div id="search">
                <form action="" method="post">
                    <input type="text"  class="field" value="Search Item..." title="Search Item..." />
                </form>
              </div>
              <div class="cl">&nbsp;</div> 
        </div>  
</div>
</body>