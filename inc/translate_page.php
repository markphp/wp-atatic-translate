<?phpfunction translate_page(){	global $mltlngg_current_language;	global $mltlngg_languages;    global $mltlngg_options, $mltlngg_table_translate, $mltlngg_terms_table_translate, $mltlngg_plugin_info;    //var_dump($mltlngg_options['list_of_languages'][0]);    	global $t_name;	$t_name = "static_translate";?>	<div class="wrap">		<H2 class="title"><?php echo get_admin_page_title(); ?></H2>    	<div class="main_container">			<span class="help dashicons dashicons-editor-help" title="Help info"></span>    		<h3>Here You can modiffer or add new static translation option.</h3>    		<div class="metabox-holder"> 				<div class="inside">    	            <div class="edit_butt">                		<a class="button button-primary add_row" title="Press to add new row with search rule."> <span class="dashicons dashicons-plus-alt"></span> Add new serch rule</a>                		<a class="button button-primary add_column" title="Press to add new Column with change type."> <span class="dashicons dashicons-translation"></span> Add new replace</a>						<span class=" dashicons dashicons-search"></span>						<input type="text" name="search_in" class="search_in" value="" placeholder="Search" spellcheck="true"/>						<span class=" dashicons dashicons-update reset" title="Reset search rule"></span>    	            </div>    	        </div>	        </div>        	<div class="metabox-holder">         		<div class="postbox">    				<div class="inside">						<span class="scroll_up dashicons dashicons-arrow-up" title="Scroll in head"></span><span class="scroll_before dashicons dashicons-controls-back" title="Scroll before section"></span>        	            <div class="translate_table"></div>						<span class="scroll_down dashicons dashicons-arrow-down" title="Scroll in foot"></span><span class="scroll_next dashicons dashicons-controls-forward" title="Scroll next section"></span>        	         </div>    	        </div>	        </div>        	<div class="metabox-holder">         	    <form id="form" method="post" action="javascript:void(0);" onsubmit="get_all()" style="display: none;">            	    <div class="postbox"><span class="close dashicons dashicons-no-alt" title="Close the form"></span>        				<div class="inside">                			<p>Name:</p>                			<p><input type="text" name="name" class="table_name" value="static_translate" required/></p>                			<p><input type="submit" name="send" class="button button-primary send" value="senden"></p>            			</div>        	        </div>        		</form>        		<form id="update_form" method="post" action="javascript:void(0);" onsubmit="update()" style="display: none;">        		</form>                		<form id="insert_form" method="post" action="javascript:void(0);" onsubmit="set_row()" style="display: none;">        		    <div class="postbox"><span class="close dashicons dashicons-no-alt" title="Close the form"></span>        				<div class="inside">                 			<table cellpadding="8" class="tinsert_form">                                <tbody>                    				<tr><td>Search_rule:</td>                        				<td><textarea type="text" name="Search_rule" id="Search_rule" value="" required "></textarea></td>                            			<td><input type="submit" name="send" class="button button-primary send" value="insert"></td>                        			</tr>                    			</tbody>                			</table>        		        </div>        	        </div>        		</form>                		<form id="add_coll" method="post" action="javascript:void(0);" onsubmit="set_col()" style="display: none;">    			    <div class="postbox"><span class="close dashicons dashicons-no-alt" title="Close the form"></span>        				<div class="inside">         				    <table cellpadding="8" class="tadd_coll">                                <tbody>                    				<tr><td>Name:</td>                        				<td><select name="selected" required>                        					<?php												if($mltlngg_languages != null) {													foreach($mltlngg_options['list_of_languages'] as $name){														echo '<option value="'.$name["locale"].'">'.$name["locale"].' - '.$name["name"].'</option>';													}												}                        					?>                        				</select></td>                            			<td><input type="submit" name="send" class="button button-primary send" value="senden"></td>                        			</tr>                    			</tbody>                			</table>        		        </div>        	        </div>        		</form>				<div class="inside">    	            <div class="edit_butt">                		<a class="button button-primary add_row" title="Press to add new row with search rule."> <span class="dashicons dashicons-plus-alt"></span> Add new serch rule</a>                		<a class="button button-primary add_column" title="Press to add new Column with change type."> <span class="dashicons dashicons-translation"></span> Add new replace</a>    	            </div>    	        </div>	        </div>        	    <div id="debug"></div>    	</div>    </div><?php}