<!doctype html>
<head>
	<Title><?php echo $title ?></Title>
    
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
</head>

<body>

<div id="wrapper">

        <div id="top">
          <div id="logo">
                <h1>Nirwana Online Shoes</h1>
            </div>
            
            <div id="login">
                <a href="#">Sign In</a>
            </div>
        </div>
    
        <div id="topnav" class="wrap">
              <ul id="nav">
                    <li><a href="http://localhost/Nirwana3/">Home</a></li>
                    <li><a href="http://localhost/Nirwana3/catalog">Product</a>
                        <ul>
                            <li><a href="http://localhost/Nirwana3/catalog/kidonly">Kids</a></li>
                            <li><a href="http://localhost/Nirwana3/catalog/manonly">Men</a></li>
                            <li><a href="http://localhost/Nirwana3/catalog/womenonly">Women</a></li>
                            <li><a href="http://localhost/Nirwana3/catalog/sportonly">Sports</a></li>
                        </ul>
                    </li>	
                    <li><a href="#">Sale</a></li>    
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