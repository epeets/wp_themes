
	<div id="media_copy">
		<p>All images and videos are copyright of their respective owners!</p> 
	</div>

</div><!--wrapper-->
</div><!--page-->
<footer class="site-footer">
		<div id="g_nav">
			<ul class="menu_footer">
				<?php wp_list_pages('title_li='); ?>
			</ul> 
		</div>
		<div id="f_social">
			<ul>
				<li><a href="http://www.facebook.com/epeets"><img src="<?php bloginfo('template_directory'); ?>/images/Facebook.png" alt="FaceBook icon"/></a></li>
				<li><a href="http://www.linkedin.com/epeets"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="LinkedIn icon"/></a></li>
				<li><a href="http://www.pinterest.com/eshcolep/web-design/"><img src="<?php bloginfo('template_directory'); ?>/images/pinterest.png" alt="Pinterest icon"/></a></li>
				<li><a href="http://www.youtube.com/epeets"><img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" alt="YouTube icon"/></a></li>
				<li><a href="http://twitter.com/Eshcolecom"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter icon" /></a></li>
			</ul> 
		</div>
		<div id="FSContact1">
			<form action="http://eshcole.com/#FSContact1" id="fscf_form1" method="post">
				<div>
					<input placeholder="Name:" type="text" id="fscf_name1" name="full_name" value=""  />
				</div>
				<div>
					<input placeholder="Email:" type="text" id="fscf_email1" name="email" value=""  />
				</div>
				<div>
					<input placeholder="Subject:"type="text" id="fscf_field1_2" name="subject" value=""  />
				</div>
				<div>
					<textarea placeholder="Message:" id="fscf_field1_3" name="message" cols="35" rows="10" ></textarea>
				</div>
				<div style="display:none;">
					<label for="city1"><small>Leave this field empty</small></label>
					<input type="text" name="city" id="city1" value="" />
				</div>
					<button type="submit" id="fscf_submit1"><img src="<?php bloginfo('template_directory'); ?>/images/submit.png" alt="Submit button for contact form"/></button>
				<input type="hidden" name="fscf_submitted" value="0" />
				<input type="hidden" name="fs_postonce_1" value="da55ccfbd53ec3e9cffd346a6e7151df,1390414771" />
				<input type="hidden" name="si_contact_action" value="send" />
				<input type="hidden" name="form_id" value="1" />
				<input type="hidden" name="mailto_id" value="1" />
			</form>
		</div>
		<div id="copy">
		<p>&copy <?php the_time('Y'); ?> Eshcole.com</p><p>Designed by Eshcole Peets. Powered by WordPress</p>
		</div>
</footer>
<button id="top_side"><img src="<?php bloginfo('template_directory'); ?>/images/top.png" alt="Button to go back to the top"/></button>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.5.0/less.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/site.js"></script>
<?php wp_footer(); ?>
</body>
</html>		