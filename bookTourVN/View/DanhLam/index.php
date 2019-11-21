<div class="col-sm-1"></div>
<div class="col-sm-10">

	<div class="content" class="tt">
		
		<?php
        $tongsobanghi=count($danhlams);
        $start=0;
        $i=1;
        
        for( $j=$start ; $j < $tongsobanghi ; $j++)
	    { // { foreach ($danhlams as $danhlams)
	     ?>	
			<div class="row">
			        <div class="col-sm-12">
			        	<p>
			        		<h3>  
							<?php 
								echo $i.".".$danhlams[$j]['tenDLTC'];
							?>		
			         		</h3>
			         		<h4>
			         		<?php 
								echo $danhlams[$j]['moTa'];
							?>
							</h4>
			         	</p>
			         </div>
					<div class="col-sm-12">
						<?php echo "<img src='".WEBROOT."Img/".$danhlams[$j]['hinhAnh']."' class='v1'>" ?>
					</div>	
					<br>            
	           </div>
	        <?php
	            $i++;
	        }
	        ?>
	      
	</div>
</div>
<div class="col-sm-1"></div>
<br>
