<?php if ( defined( 'ABSPATH' ) ) { ?>
<div id="sarbacane_desktop_content">
	<p class="mailify_logo"></p>
	<div id="sarbacane_desktop_configuration">
		<div class="sarbacane_desktop_configuration_panel">
			<p class="sarbacane_desktop_configuration_title">
				<?php _e( 'Configuration', 'mailify' ) ?>
			</p>
			<p class="sarbacane_desktop_div_splitter"></p>
			<form method="POST" autocomplete="off">
				<label for="url" class="sarbacane_desktop_configuration_label">
					<?php _e( 'URL to paste in Mailify', 'mailify' ) ?> :
				</label>
				<input type="text"
					   class="sarbacane_desktop_configuration_input"
					   id="url"
					   name="url"
					   value="<?php echo get_site_url() . '/' ?>"
					   readonly="readonly"
					   onclick="this.select()"/>
				<p class="sarbacane_desktop_div_splitter"></p>
				<label for="key" class="sarbacane_desktop_configuration_label">
					<?php _e( 'Synchronization key to enter in Mailify', 'mailify' ) ?> :
					<span class="sarbacane_desktop_connection_status">
						<?php if ( $is_connected ) { ?>
						<span class='sarbacane_desktop_connection_ok'><?php _e( 'Connected', 'mailify' ) ?></span>
						<?php } else { ?>
						<span class='sarbacane_desktop_connection_nok'><?php _e( 'Disconnected', 'mailify' ) ?></span>
						<?php } ?>
						<?php if ( $is_failed ) { ?>
						<span> - <?php _e( 'Please generate a new key', 'mailify' ) ?></span>
						<?php } ?>
					</span>
				</label>
				<input type="text"
					   class="sarbacane_desktop_configuration_input"
					   id="key"
					   name="key"
					   value="<?php echo $key ?>"
					   readonly="readonly"
					   onclick="this.select()"/>
				<input type="hidden" name="sarbacane_redo_token" id="sarbacane_redo_token" value="1"/>
				<?php wp_nonce_field( 'sarbacane_redo_token', 'sarbacane_token' ) ?>
				<p>
					<?php if ( $key != '' ) { ?>
					<input type="submit"
						   class="sarbacane_desktop_configuration_button"
						   value="<?php esc_attr_e( 'Generate another key', 'mailify' ) ?>"/>
					<?php } else { ?>
					<input type="submit"
						   class="sarbacane_desktop_configuration_button"
						   value="<?php esc_attr_e( 'Generate a key', 'mailify' ) ?>"/>
					<?php }?>
				</p>
			</form>
		</div>
		<div id="sarbacane_desktop_configuration_footer">
			<p class="sarbacane_desktop_configuration_footer_help sarbacane_desktop_configuration_button_container">
				<?php if ( $sd_list_news ) { ?>
					<input type="button"
						   onclick="sarbacaneGoWidget()"
						   class="sarbacane_desktop_configuration_button sarbacane_desktop_configuration_button_green"
						   value="<?php esc_attr_e( 'Setup the widget', 'mailify' ) ?>"/>
				<?php }?>
			</p>
		</div>
	</div>
	<div id="sarbacane_desktop_help">
		<div class="sarbacane_desktop_help_title">
			<?php _e( 'How to set up the module?', 'mailify' ) ?>
		</div>
		<p><?php _e( 'Go in the plugins menu of Mailify and activate wordpress plugin', 'mailify' ) ?></p>
		<p class="sarbacane_desktop_help_subtitle">
			<?php _e( 'Learn more', 'mailify' ) ?> :
			<a href="<?php _e( 'https://static.mailify.com/ws/soft-redirect.asp?key=9Y4OtEZzaz&com=WordpressInfo', 'mailify' ) ?>">
				<?php _e( 'Take a look at the help section online', 'mailify' ) ?>
			</a>
		</p>
		<p class="sarbacane_desktop_div_splitter"></p>
		<div class="sarbacane_desktop_help_title">
			<?php _e( 'Need help?', 'mailify' ) ?>
		</div>
		<p>
			<?php _e( 'Email', 'mailify' ) ?> : <?php _e( 'help@mailify.com', 'mailify' ) ?>
			<br/>
			<?php _e( 'Phone', 'mailify' ) ?> : <?php _e( '(646)-844-0983', 'mailify' ) ?>
		</p>
		<p>
			<?php _e( 'For more informations, please take a look to our website', 'mailify' ) ?> :
			<br/>
			<a href="<?php _e( 'http://mailify.com/?utm_source=module-wordpress&utm_medium=plugin&utm_content=lien-sarbacane&utm_campaign=wordpress', 'mailify' ) ?>">
				<?php _e( 'http://www.mailify.com', 'mailify' ) ?>
			</a>
		</p>
	</div>
</div>
<script type="text/javascript">
	function sarbacaneGoWidget(){
		document.location = "admin.php?page=wp_news_widget";
	}
</script>
<?php } ?>
