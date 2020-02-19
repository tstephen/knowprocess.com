<?php


	function show_eve_settings() { 
	
		?>

	<div id="mo_eve_online_config">
	<?php
	$customerRegistered = mo_oauth_is_customer_registered ();
	if ($customerRegistered) {
		if (! get_option ( 'mo_oauth_eveonline_enable' )) {
			?>
				<h4>NOTE: Please enable EVE Online app to see Advanced EVE Online Settings dashboard.</h4>
				<?php
		} else {
			?>
	<form id="mo_eve_save_api_key" name="mo_eve_save_api_key" method="post"
		action="">
		<input type="hidden" name="option" value="mo_eve_save_api_key" />
		<div class="mo_eve_table_layout">
			<h4>Please enter your API Key details below.</h4>
			<table class="mo_settings_table">
				<tr>
					<td class="col1"><strong>Key ID:</strong></td>
					<td><input class="mo_table_textbox" required class="textbox"
						type="text" placeholder="Click on Help to know more"
						name="mo_eve_api_key"
						value="<?php echo get_option('mo_eve_api_key');?>" /></td>
				</tr>

				<tr>
					<td class="col1"><strong>Verification Code:</strong></td>
					<td><input class="mo_table_textbox" required type="text"
						placeholder="Click on Help to know more"
						name="mo_eve_verification_code"
						value="<?php echo get_option('mo_eve_verification_code');?>" /></td>
				</tr>
				<tr>
					<td class="col1">&nbsp;</td>
					<td><input type="submit" name="submit" value="Save"
						class="button button-primary button-large" />&nbsp;&nbsp; <input
						type="button" id="api_help" class="help" value="Help" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div id="api_instru" hidden>
							<p>
								<strong>Why do I need to enter API Key?</strong> <br /> API Key
								is required to get access to user public information. API Key
								will help filtering of users according to Corporation, Alliance
								or Character Name.
							</p>
							<p>
								<strong>How to get Key ID and Verification Code:</strong>


							<ol>
								<li>Login to your EVE Online account from <a
									href="https://community.eveonline.com/support/api-key/"
									target="_blank">https://community.eveonline.com/support/api-key/</a>.
								</li>
								<li>If you have already configured API KEY, paste it above.</li>
								<li>If you don't have an API KEY, click on CREATE NEW API KEY.</li>
								<li>Fill in the Name, Verification Code, Character and Type. Set
									Character to All.</li>
								<li>Select All for Account and Market, Communications, Private
									Information, Public Information and Science and Industry.</li>
								<li>Click on Submit. You will now see the KeyID and Verification
									Code on your screen with the new API Key added. Paste it above.</li>
							</ol>
							</p>
						</div>
					</td>

				</tr>
			</table>
		</div>
	</form>
	<!--Get list of allowed and denied corporations-->
	<form id="mo_eve_save_allowed" name="mo_eve_save_allowed" method="post"
		action="">
		<input type="hidden" name="option" value="mo_eve_save_allowed" />
		<div class="mo_eve_table_layout">
			<h4>Please choose the Corporations, Alliances or Character Name to be allowed. If none are mentioned, by default all corporations and alliances will be allowed.</h4>
			<table class="mo_settings_table">
				<tr>
					<td class="col1"><strong>Allowed Corporations:</strong></td>
					<td><input class="mo_eve_table_textbox"
						placeholder="Enter Corporation name separared by comma( , )"
						class="textbox" type="text" name="mo_eve_allowed_corps"
						value="<?php echo get_option('mo_eve_allowed_corps');?>" /></td>
				</tr>

				<tr>
					<td class="col1"><strong>Allowed Alliances:</strong></td>
					<td><input class="mo_eve_table_textbox"
						placeholder="Enter Alliance name separared by comma( , )"
						type="text" name="mo_eve_allowed_alliances"
						value="<?php echo get_option('mo_eve_allowed_alliances');?>" /></td>
				</tr>

				<tr>
					<td class="col1"><strong>Allowed Characters (Character Name):</strong></td>
					<td><input class="mo_eve_table_textbox"
						placeholder="Enter Character Name separared by comma( , )"
						type="text" name="mo_eve_allowed_char_name"
						value="<?php echo get_option('mo_eve_allowed_char_name');?>" /></td>
				</tr>
				<tr>
					<td class="col1">&nbsp;</td>
					<td><input type="submit" name="submit" value="Save"
						class="button button-primary button-large" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<p>
							<strong>How do I see my Corporation, Alliance and Character Name
								from EVE Online?</strong> <br /> You can view your Corporation,
							Alliance and Character Name in your Edit Profile. Copy the
							following code in the end of your theme's `Theme
							Functions(functions.php)`. You can find `Theme
							Functions(functions.php)` in `Appearance->Editor`. <br />
							<br />
							<code>
								add_action( 'show_user_profile', 'mo_oauth_my_show_extra_profile_fields' );<br />
								add_action( 'edit_user_profile', 'mo_oauth_my_show_extra_profile_fields' );
							</code>
						</p>
					</td>

				</tr>
			</table>
		</div>
	</form>
				<?php
			}
			?>
			</div>
<?php
		} else {
			?>
		<h4>NOTE: Please first Register with miniOrange and then enable EVE Online app to see Advanced EVE Online Settings dashboard.</h4>
		<?php
		}	
	}

	function show_config_old() {
		?>
		<!-- Google configurations -->
		<form id="form-google" name="form-google" method="post" action="" style="display:none">
			<input type="hidden" name="option" value="mo_oauth_google" />
			<input type="hidden" name="mo_oauth_google_scope" value="email" />
			<div class="mo_table_layout">
				<div id="toggle2" class="mo_panel_toggle">
					<h3>Login with Google</h3>
				</div>
				<div id="panel2">
					<table class="mo_settings_table">
						<tr>
							<td class="mo_table_td_checkbox"><input type="checkbox"
								id="google_enable" name="mo_oauth_google_enable" value="1"
								<?php checked( get_option('mo_oauth_google_enable') == 1 );?> /><strong>Enable
									Google</strong></td>
							<td></td>
						</tr>
						<tr>
							<td><strong><font color="#FF0000">*</font>Client ID:</strong></td>
							<td><input class="mo_table_textbox" required class="textbox"
								type="text" placeholder="Click on Help to know more"
								name="mo_oauth_google_client_id"
								value="<?php echo get_option('mo_oauth_google_client_id'); ?>" /></td>
						</tr>

						<tr>
							<td><strong><font color="#FF0000">*</font>Client Secret:</strong></td>
							<td><input class="mo_table_textbox" required type="text"
								placeholder="Click on Help to know more"
								name="mo_oauth_google_client_secret"
								value="<?php echo get_option('mo_oauth_google_client_secret'); ?>" /></td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td><input type="submit" name="submit" value="Save settings"
								class="button button-primary button-large" />&nbsp;&nbsp; <input
								type="button" id="google_help" class="help" value="Help" /></td>
						</tr>
						<tr>
							<td colspan="2" id="google_instru" hidden>
								<p>
									<strong>Instructions:</strong>

								<ol>
									<li>Visit the Google website for developers <a
										href='https://console.developers.google.com/project'
										target="_blank">console.developers.google.com</a>.
									</li>
									<li>At Google, create a new Project and enable the Google+ API.
										This will enable your site to access the Google+ API.</li>
									<li>At Google, provide <b><?php echo site_url()."/oauthcallback";?></b>
										for the new Project's Redirect URI.
									</li>
									<li>At Google, you must also configure the Consent Screen with
										your Email Address and Product Name. This is what Google will
										display to users when they are asked to grant access to your
										site/app.</li>
									<li>Paste your Client ID/Secret provided by Google into the
										fields above.</li>
									<li>Click on the Save settings button.</li>
									<li>Go to Appearance->Widgets. Among the available widgets you
										will find miniOrange OAuth, drag it to the widget area where
										you want it to appear.</li>
									<li>Now logout and go to your site. You will see a login link
										where you placed that widget.</li>
								</ol>
								</p>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</form>
		<!-- Eveonline configurations -->
		<form id="form-eveonline" name="form-eveonline" method="post"
			action="">
			<input type="hidden" name="option" value="mo_oauth_eveonline" /> <input
				type="hidden" name="mo_oauth_eveonline_scope" value="" />
			<!--value of scope?-->
			<div class="mo_table_layout">
				<div id="toggle3" class="mo_panel_toggle">
					<h3>Login with EVE Online</h3>
				</div>
				<div id="panel3">
					<table class="mo_settings_table">
						<tr>
							<td class="mo_table_td_checkbox"><input type="checkbox"
								id="eve_enable" name="mo_oauth_eveonline_enable" value="1"
								<?php checked( get_option('mo_oauth_eveonline_enable') == 1 );?> /><strong>Enable
									Eveonline</strong></td>
							<td></td>
						</tr>
						<tr>
							<td><strong><font color="#FF0000">*</font>Client ID:</strong></td>
							<td><input class="mo_table_textbox" required type="text"
								placeholder="Click on Help to know more"
								name="mo_oauth_eveonline_client_id"
								value="<?php echo get_option('mo_oauth_eveonline_client_id'); ?>" /></td>
						</tr>

						<tr>
							<td><strong><font color="#FF0000">*</font>Client Secret:</strong></td>
							<td><input class="mo_table_textbox" type="text" required
								placeholder="Click on Help to know more"
								name="mo_oauth_eveonline_client_secret"
								value="<?php echo get_option('mo_oauth_eveonline_client_secret'); ?>" /></td>
						</tr>
						<tr>
							<td><a href="admin.php?page=mo_oauth_eve_online_setup">Advanced
									Settings</a></td>
							<td><input type="submit" name="submit" value="Save settings"
								class="button button-primary button-large" />&nbsp;&nbsp; <input
								type="button" id="eve_help" value="Help" /></td>
						</tr>
						<tr>
							<td colspan="2" id="eve_instru" hidden>
								<p>
									<strong>Instructions:</strong>

								<ol>
									<li>Log in to your EVE Online account</li>
									<li>At EVE Online, go to Support. Request for enabling OAuth
										for a third-party application.</li>
									<li>At EVE Online, add a new project/application. Generate
										Client ID and Client Secret.</li>
									<li>At EVE Online, set Redirect URL as <b><?php echo site_url()."/oauthcallback";?></b></li>
									<li>Enter your Client ID and Client Secret above.</li>
									<li>Click on the Save settings button.</li>
									<li>Go to Appearance->Widgets. Among the available widgets you
										will find miniOrange OAuth, drag it to the widget area where
										you want it to appear.</li>
									<li>Now logout and go to your site. You will see a login link
										where you placed that widget.</li>
								</ol>
								</p>
							</td>

						</tr>
					</table>
				</div>
			</div>
		</form>

		<!-- Facebook -->
		<form id="form-facebook" name="form-facebook" method="post" action=""  style="display:none">
			<input type="hidden" name="option" value="mo_oauth_facebook" />
			<input type="hidden" name="mo_oauth_facebook_scope" value="email" />
			<div class="mo_table_layout">
				<div id="toggle4" class="mo_panel_toggle">
					<h3>Login with Facebook</h3>
				</div>
				<div id="panel4">
					<table class="mo_settings_table">
						<tr>
							<td class="mo_table_td_checkbox"><input type="checkbox"
								id="facebook_enable" name="mo_oauth_facebook_enable" value="1"
								<?php checked( get_option('mo_oauth_facebook_enable') == 1 );?> /><strong>Enable
									Facebook</strong></td>
							<td></td>
						</tr>
						<tr>
							<td><strong><font color="#FF0000">*</font>App ID:</strong></td>
							<td><input class="mo_table_textbox" required class="textbox"
								type="text" placeholder="Click on Help to know more"
								name="mo_oauth_facebook_client_id"
								value="<?php echo get_option('mo_oauth_facebook_client_id'); ?>" /></td>
						</tr>

						<tr>
							<td><strong><font color="#FF0000">*</font>App Secret:</strong></td>
							<td><input class="mo_table_textbox" required type="text"
								placeholder="Click on Help to know more"
								name="mo_oauth_facebook_client_secret"
								value="<?php echo get_option('mo_oauth_facebook_client_secret'); ?>" /></td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td><input type="submit" name="submit" value="Save settings"
								class="button button-primary button-large" />&nbsp;&nbsp; <input
								type="button" id="facebook_help" class="help" value="Help" /></td>
						</tr>
						<tr>
							<td colspan="2" id="facebook_instru" hidden>
								<p>
									<strong>Instructions:</strong>

								<ol>
									<li>Go to Facebook developers console <a
										href='https://developers.facebook.com/apps/'
										target="_blank">https://developers.facebook.com/apps/</a>.
									</li>
									<li>Click on Create a New App/Add new App button. You will need to register as a Facebook developer to create an App.</li>
									<li>Enter <b>Display Name</b>. And choose category.</li>
									<li>Click on <b>Create App ID</b>.</li>
									<li>From the left pane, select <b>Settings</b>.</li>
									<li>From the tabs above, select <b>Advanced</b>.</li>
									<li>Under <b>Client OAuth Settings</b>, enter <b><?php echo site_url()."/oauthcallback";?></b> in Valid OAuth redirect URIs and click <b>Save Changes</b>.</li>
									<li>Paste your App ID/Secret provided by Facebook into the
										fields above.</li>
									<li>Click on the Save settings button.</li>
									<li>Go to Appearance->Widgets. Among the available widgets you
										will find miniOrange OAuth, drag it to the widget area where
										you want it to appear.</li>
									<li>Now logout and go to your site. You will see a login link
										where you placed that widget.</li>
								</ol>
								</p>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</form>

</div>

<?php
}