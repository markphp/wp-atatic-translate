<?php

function translate_settings_page(){
	global $mltlngg_current_language;
	global $mltlngg_languages;

	//var_dump($mltlngg_languages);
	global $t_name;

	$t_name = "static_translate";
?>
    
    	<div class="wrap">
    		<H2 class="title"><?php echo get_admin_page_title(); ?></H2>
    	<div class="main_container">
    		<h3>Here You can modiffer or add new static translation option.</h3>
    		<div class="metabox-holder"> 
				<div class="inside">
    	            <div class="edit_butt">
                		<a href="javascript:void(0);" class="button button-primary add_row" title="Press to add new row with search rule.">Add new serch rule</a>
                		<a href="javascript:void(0);" class="button button-primary add_changed" title="Press to add new Column with change type.">Add new replace</a>
    	            </div>
    	        </div>
	        </div>
        	<div class="metabox-holder"> 
        		<div class="postbox">
    				<div class="inside"> 
        	            <div class="translate_table"></div>
        	         </div>
    	        </div>
	        </div>
        	<div class="metabox-holder"> 
        	    <form id="form" method="post" action="javascript:void(0);" onsubmit="get_all()" style="display: none;">
            	    <div class="postbox">
        				<div class="inside"> 
                			<p>Name:</p>
                			<p><input type="text" name="name" class="name" value="static_translate" required/></p>
                			<p><input type="submit" name="send" class="button button-primary send" value="senden"></p>
            			</div>
        	        </div>
        		</form>
        
        		<form id="update_form" method="post" action="javascript:void(0);" onsubmit="update()" style="display: none;">
                    
        				
        		        
        		</form>
        
        		<form id="insert_form" method="post" action="javascript:void(0);" onsubmit="set_row()" style="display: none;">
        		    <div class="postbox">
        				<div class="inside"> 
                			<table cellpadding="8" class="tinsert_form">
                                <tbody>
                    				<tr><td>Serch_rule:</td>
                        				<td><input type="text" name="Serch_rule" id="Serch_rule" value="" required style="width: 85%;"/></td>
                            			<td><input type="submit" name="send" class="button button-primary send" value="insert"></td>
                        			</tr>
                    			</tbody>
                			</table>
        		        </div>
        	        </div>
        		</form>
        
        		<form id="add_coll" method="post" action="javascript:void(0);" onsubmit="set_col()" style="display: none;">
    			    <div class="postbox">
        				<div class="inside"> 
        				    <table cellpadding="8" class="tadd_coll">
                                <tbody>
                    				<tr><td>Name:</td>
                        				<td><select name="selected">
                        					<?php
                        						foreach($mltlngg_languages as $name){
                        							echo '<option value="'.$name[1].'">'.$name[1].' - '.$name[2].'</option>';
                        						}
                        					?>
                        				</select></td>
                            			<td><input type="submit" name="send" class="button button-primary send" value="senden"></td>
                        			</tr>
                    			</tbody>
                			</table>
        		        </div>
        	        </div>
        		</form>
				<div class="inside">
    	            <div class="edit_butt">
                		<a href="javascript:void(0);" class="button button-primary add_row" title="Press to add new row with search rule.">Add new serch rule</a>
                		<a href="javascript:void(0);" class="button button-primary add_changed" title="Press to add new Column with change type.">Add new replace</a>
    	            </div>
    	        </div>
	        </div>
        	    <div id="debug"></div>
    	</div>
    </div>
<?php
}