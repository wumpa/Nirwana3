<?php


	if ($records == null){
		echo "no item in cart";
	} else {
		echo "
			<div>
				<h2>Cart List</h2>
		";

		foreach($records as $rec)
		{
			echo "
				
						<div>
							<a href=''>Merek : </a>
							<a href=''>Tipe : ".$rec->id_item."</a>
							<a href=''>Ukuran : </a>
							<a href=''>Warna : </a>
							<a href=''>Harga : </a>
						</div>

						<div>
							<a href=''><img src=''></a>
						</div>
				
			";
		}

		echo "
			</div>
		";
	}
?>