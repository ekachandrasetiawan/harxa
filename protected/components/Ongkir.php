<?php
class Ongkir{
	public static function getCity($query)
	{
		// require_once 'library_location/REST_Ongkir.php';

		$rest = new REST_Ongkir(array(
			'server' => 'http://api.ongkir.info/'
			));

		$result = $rest->post('city/list', array(
			'query' 	=> $query, 
			'type' 		=> 'origin',
			'courier' 	=> 'jne',
			'API-Key' 	=> '29bb022b349e38200fef60cebc10d0bb',
			'format'	=> 'json',
			));

		try
		{
			// $status = $result['status'];

	        // Handling the data
			/*if ($status->code == 0)
			{
				$cities = $result['cities'];

				foreach ($cities->item as $item)
				{
					// echo 'Kota: ' . $item . '<br />';
					// $ctys[] = $item;
				}
				var_dump($cities);
				// echo CJSON::encode($ctys);
			}
			else
			{
				echo 'Tidak ditemukan kota yang diawali "'.$query.'"';	
			}*/

			$status = $result->status;
			if($status->code==0){
				return CJSON::encode($result->cities);
			}
			else
			{
				return false;
			}
			// print_r($result);
		}
		catch (Exception $e)
		{
			return false;
		}
	}
}
?>