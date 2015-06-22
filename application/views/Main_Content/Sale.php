<?php

    echo "
    <div id='content-wrapper'>
        <div id='new'>
            <h2>On Sale!</h2>
                <div class='row'>
                    <ul>";

    foreach ($records as $rec) {
        $price = $rec->price;

        $this->db->where('id_item',$rec->id);
        $query = $this->db->get('sale_item');

        if ($query->num_rows()>0){
            $price = $price - ($price*($query->row(0)->diskon/100));

             echo "
                        <li>
                            <a href='";  echo base_url().'catalog/addtocart/'.$rec->id; echo "' class='product'>
                                <img src=".$rec->pict."/>
                                <span class='model'>".$rec->type."</span>
                                <span class='order'>Nomor Katalog: <span class='number'>".$rec->id."</span></span>
                                <span class='order'><span class='buy-text'>Beli Sekarang</span>
                                <span class='price'><span class='Rupiah'>Rp.</span>".$price."</span></span>
                            </a>
                        </li>";
        }

           

    }
        
        echo "      </ul>
                </div>
            </div>
        </div>";
    

?>