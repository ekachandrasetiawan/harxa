<?php
class Ongkir{
	const APIKEY = '29bb022b349e38200fef60cebc10d0bb';
	const FROM = 'jakarta';
	public static function getCity($query)
	{
		// require_once 'library_location/REST_Ongkir.php';
		
		$rest = new REST_Ongkir(array(
			'server' => 'http://api.ongkir.info/'
			));

		$result = $rest->post('city/list', array(
			'query' 	=> $query, 
			'type' 		=> 'destination',
			'courier' 	=> 'jne',
			'API-Key' 	=> self::APIKEY,
			'format'	=> 'json',
			)
		);

		try
		{
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


	public function getCost($to,$weight=1)
	{
		// require_once 'library_location/REST_Ongkir.php';

		$rest = new REST_Ongkir(array(
			'server' => 'http://api.ongkir.info/'
			));

		$result = $rest->post('cost/find', array(
			'from' 		=> self::FROM, 
			'to' 		=> $to,
			'weight'	=> 1000,
			'courier'	=> 'jne',
			'API-Key' 	=> self::APIKEY,
			'format'	=> 'json',
			));

		try
		{
			$status = $result->status;

        // Handling the data
			if ($status->code == 0)
			{
				/*$prices = $result['price'];
				$city	= $result['city'];*/

				/*echo 'Ongkos kirim dari ' . $city->origin . ' ke ' . $city->destination . '<br /><br />';

				foreach ($prices->item as $item)
				{
					echo 'Layanan: ' . $item->service . ', dengan harga : Rp. ' . $item->value . ',- <br />';
				}*/
				return $result;
			}
			else
			{
				// echo 'Tidak ditemukan jalur pengiriman dari surabaya ke jakarta';
				throw new CHttpException(404,'Cant Find Data');
			}

		}
		catch (Exception $e)
		{
			// echo 'Processing error.';
			throw new CHttpException(404,'Cant Find Data');
		}
	}
}
?>