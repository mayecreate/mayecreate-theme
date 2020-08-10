<div id="callouts" class="row">
            <?php 

				$calloutImage01 	= get_field('callout_01_image');
				$calloutText01 		= get_field('callout_01_text');
				$calloutTitle01 	= get_field('callout_01_title');
				$calloutLink01		= get_field('callout_01_link');
				
				$calloutImage02 	= get_field('callout_02_image');
				$calloutText02 		= get_field('callout_02_text');	
				$calloutTitle02 	= get_field('callout_02_title');
				$calloutLink02		= get_field('callout_02_link');
				
				$calloutImage03 	= get_field('callout_03_image');
				$calloutText03 		= get_field('callout_03_text');
				$calloutTitle03 	= get_field('callout_03_title');
				$calloutLink03		= get_field('callout_03_link');
		
			?>


            <div class="col-sm-4 col-md-4">
                
                <?php if (($calloutImage01) && ($calloutText01) && ($calloutTitle01) && ($calloutLink01)) { ?>
                    
                    <a href="<?php echo $calloutLink01; ?>" role="button">
                        <img src="<?php echo $calloutImage01; ?>">
                        <h2><?php echo $calloutTitle01; ?></h2>
                        
                        <?php //if($calloutText01){  Uncomment this conditional loop if you need body text on your callouts
                            //echo '<p>' . $calloutText01 .'</p>';
                        //} ?>
                    </a>

                <?php }?>
                
            </div>
             <div class="col-sm-4 col-md-4">
                
                <?php if (($calloutImage02) && ($calloutText02) && ($calloutTitle02) && ($calloutLink02)) { ?>
                    
                    <a href="<?php echo $calloutLink02; ?>" role="button">
                        <img src="<?php echo $calloutImage02; ?>">
                        <h2><?php echo $calloutTitle02; ?></h2>
                       
                        <?php // if($calloutText02){ Uncomment this conditional loop if you need body text on your callouts
                            //echo '<p>' . $calloutText02 .'</p>';
                        // } ?>
                    </a>

                <?php }?>
                
            </div>
             <div class="col-sm-4 col-md-4">
                
                <?php if (($calloutImage03) && ($calloutText03) && ($calloutTitle03) && ($calloutLink03)) { ?>
                    
                    <a href="<?php echo $calloutLink03; ?>" role="button">
                        <img src="<?php echo $calloutImage03; ?>">
                        <h2><?php echo $calloutTitle03; ?></h2>
                        
                        <?php // if($calloutText03){ Uncomment this conditional loop if you need body text on your callouts
                            //echo '<p>' . $calloutText03 .'</p>';
                       // } ?>
                    </a>

                <?php }?>
                
            </div>

</div>