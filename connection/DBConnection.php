<?php

namespace connection;

/**
 * 
 * @author cleber
 * @version
 */
class DBConnection 
{
	public function teste()
	{
		if(file_exists('../config/lp-config.xml'))
		{
			$xml = simplexml_load_file('../config/lp-config.xml');
			var_dump($xml);
		}
	}	
}

?>