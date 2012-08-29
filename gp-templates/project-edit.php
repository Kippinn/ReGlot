<?php
gp_title( sprintf( __( 'Edit Project %s &lt; GlotPress' ),  $project->name ) );
gp_breadcrumb_project( $project );
gp_tmpl_header();
?>
<h2><?php echo wptexturize( sprintf( __('Edit project "%s"'), esc_html( $project->name ) ) ); ?></h2>
<form action="" method="post">
<?php gp_tmpl_load( 'project-form', get_defined_vars()); ?>
	<p>
		<input type="submit" name="submit" value="<?php echo esc_attr( __('Save') ); ?>" id="submit" />
		<span class="or-cancel">or <a href="javascript:history.back();">Cancel</a></span>
	</p>
</form>
<?php gp_tmpl_footer();