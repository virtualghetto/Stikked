		</div>
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

//Javascript
$this->carabiner->js('jquery.js');
$this->carabiner->js('bootstrap.min.js');
$this->carabiner->js('jquery.timers.js');
$this->carabiner->js('crypto-js/rollups/aes.js');
$this->carabiner->js('lz-string-1.3.3-min.js');
$this->carabiner->js('filereader.js');
$this->carabiner->js('linkify.min.js');
$this->carabiner->js('linkify-jquery.min.js');
if(config_item('js_editor') == 'codemirror') {
    $this->carabiner->js('codemirror/lib/codemirror.js');
}
if(config_item('js_editor') == 'ace') {
    $this->carabiner->js('ace/ace.js');
}
$this->carabiner->js('stikked.js');

$this->carabiner->display('js');

?>
<script>
</script>
	</body>
</html>
