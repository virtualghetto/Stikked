<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php

//codemirror modes
if(isset($codemirror_modes)){
    echo '<div style="display: none;" id="codemirror_modes">' . json_encode($codemirror_modes) . '</div>';
}

//ace modes
if(isset($ace_modes)){
    echo '<div style="display: none;" id="ace_modes">' . json_encode($ace_modes) . '</div>';
}

//stats
$this->load->view('themes/' . config_item('theme') . '/views/defaults/stats');

?>
<div><footer class="footer">
	<?php echo lang('powered_by'); ?> <a href="https://github.com/claudehohl/Stikked">Stikked<!-- version <?php echo config_item('stikked_version'); ?> --></a>
</footer></div>
	</body>
</html>
