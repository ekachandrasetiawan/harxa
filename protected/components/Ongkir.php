<?php
class Ongkir{
	public function get_city()
	{
		// require_once 'library_location/REST_Ongkir.php';

		$rest = new REST_Ongkir(array(
			'server' => 'http://api.ongkir.info/'
			));

		$result = $rest->post('city/list', array(
			'query' 	=> 'band', 
			'type' 	=> 'origin',
			'courier' 	=> 'jne',
			'API-Key' 	=> '29bb022b349e38200fef60cebc10d0bb'
			));

		try
		{
			$status = $result['status'];

	        // Handling the data
			if ($status->code == 0)
			{
				$cities = $result['cities'];

				foreach ($cities->item as $item)
				{
					echo 'Kota: ' . $item . '<br />';
				}
			}
			else
			{
				echo 'Tidak ditemukan kota yang diawali "band"';	
			}

		}
		catch (Exception $e)
		{
			echo 'Processing error.';
		}
	}
}
?>