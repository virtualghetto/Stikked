<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
					</div>
				</div>
			<?php $this->load->view('themes/' . config_item('theme') . '/views/defaults/footer_message'); ?>
			</div>
		</div>	
<?php

//codemirror modes
if(isset($codemirror_modes)){
    echo '<div style="display: none;" id="codemirror_modes">' . json_encode($codemirror_modes) . '</div>';
}

//Javascript
$this->carabiner->js('jquery.js');
$this->carabiner->js('jquery.timers.js');
$this->carabiner->js('filereader.js');
$this->carabiner->js('linkify.min.js');
$this->carabiner->js('linkify-jquery.min.js');
$this->carabiner->js('stikked.js');
$this->carabiner->js('codemirror/codemirror.js');
$this->carabiner->js('codemirror_exec.js');

$this->carabiner->display('js');

?>
	</body>
</html>
