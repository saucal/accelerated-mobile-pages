<?php amp_header(); ?>
<div class="sp">
	<div <?php if(!checkAMPforPageBuilderStatus(get_the_ID())){ ?>class="cntr"<?php } ?>>
		<?php if(!checkAMPforPageBuilderStatus(get_the_ID())){ ?>
		 	<?php amp_title(); ?>
		<?php } ?>
       <div class="pg">
			<div class="cntn-wrp">
				<?php amp_content(); ?>
			</div>
			<div class="cmts">
				<?php amp_comments();?>
			</div>
		</div>
	</div>
</div>
<?php amp_footer()?>
