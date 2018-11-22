<?php
/**
 * Class and Function List:
 * Function list:
 * - rand_cron()
 * Classes list:
 */
defined('BASEPATH') OR exit('No direct script access allowed.');
/**
 * Calls cron randomly.
 *
 * This is called from the Codeigniter hook system.
 * The hook is defined in application/config/hooks.php
 */

class rand_cron
{
	private $CI;

	function rand_cron_method()
	{
		if(rand()%100 < 1)
		{
			$this->CI =& get_instance();
			$this->CI->load->model('pastes');
			//$key = $this->CI->config->config_item('cron_key');
			$this->CI->pastes->cron();
		}
	}
}
