<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php

//codemirror modes
if(isset($codemirror_modes)){
    echo '<div style="display: none;" id="codemirror_modes">' . json_encode($codemirror_modes) . '</div>';
}

//ace modes
if(isset($ace_modes)){
    echo '<div style="display: none;" id="ace_modes">' . json_encode($ace_modes) . '</div>';
}

?>
</div></div></div></div>
<div><footer class="footer">
	Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo lang('powered_by'); ?> <a href="https://github.com/claudehohl/Stikked">Stikked<!-- version <?php echo config_item('stikked_version'); ?> --></a> <?php echo  (ENVIRONMENT === 'development') ?  '&amp; CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
</footer></div>
	</body>
</html>
