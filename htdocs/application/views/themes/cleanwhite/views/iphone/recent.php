<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
				<?php if(!empty($pastes)){
					function checkNum($num){
						return ($num%2) ? TRUE : FALSE;
					}?>
					<ul class="recent">
					<?php	foreach($pastes as $paste) {
							if(checkNum($paste['id']) == TRUE) {
								$eo = "even";
							} else {
								$eo = "odd";
							}
					?>
						<li class="<?php echo $eo; ?>">
							<span class="title"><a href="<?php echo site_url('iphone/view/' . $paste['pid']); ?>"><?php echo $paste['title']; ?></a></span>
							<span class="author"><?php echo $paste['name']; ?></span>
						</li>
						<?php }?>
				
					
						<?php echo $pages; ?>
					</ul>
				<?php } else { ?>
					<p>Sorry no pastes to show :)</p>
				<?php }?>	
					
				
