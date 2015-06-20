<?php
    echo "
    <div id='content-wrapper'>
        <div id='new'>
            <h2>".$based." Only</h2>
                <div class='row'>
                    <ul>";

    foreach ($records as $rec) {
        //echo $rec->type." Ceking ".$based;
       // if ($based = $rec->type) {
            echo "
                        <li>
                            <a href='";  echo base_url().'catalog/addtocart/'.$rec->id; echo "' class='product'>
                                <img src=".$rec->pict."/>
                                <span class='model'>".$rec->type."</span>
                                <span class='order'>Nomor Katalog: <span class='number'>".$rec->id."</span></span>
                                <span class='order'><span class='buy-text'>Beli Sekarang</span>
                                <span class='price'><span class='Rupiah'>Rp.</span>".$rec->price."</span></span>
                            </a>
                        </li>";
      //  }

    }
        
        echo "      </ul>
                </div>
            </div>
        </div>";
    

?>