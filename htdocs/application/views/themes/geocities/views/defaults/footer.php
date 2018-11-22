<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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

?>
<footer class="footer">
	<?php echo lang('powered_by'); ?> <a href="https://github.com/claudehohl/Stikked">Stikked</a>
    <br />
    <br />
    <table cellpadding="2" cellspacing="2">
      <tbody>
        <tr>
          <td>
            <img src="<?php echo base_url(); ?>themes/geocities/images/webtrips.gif">
          </td>
          <td>
            <img src="<?php echo base_url(); ?>themes/geocities/images/geocities.jpg">
          </td>
          <td>
            <img src="<?php echo base_url(); ?>themes/geocities/images/notepad.gif">
          </td>
          <td>
            <img src="<?php echo base_url(); ?>themes/geocities/images/ie_logo.gif">
          </td>
          <td>
            <img src="<?php echo base_url(); ?>themes/geocities/images/ns_logo.gif">
          </td>
        </tr>
      </tbody>
    </table>
</footer>
</body>
</html>
