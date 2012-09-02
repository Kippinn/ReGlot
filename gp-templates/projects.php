<?php
gp_title(__('Projects &lt; GlotPress'));
gp_breadcrumb(array(__('Projects')));
wp_enqueue_script('confirm');
gp_tmpl_header();
?>
<h2>Projects</h2>
<ul>
<?php foreach( $projects as $project ): ?>
	<li><?php gp_link_project($project, esc_html( $project->name)); ?> <?php gp_link_project_edit($project, null, array('class' => 'bubble')); ?> <?php gp_link_project_delete($project, null, array('class' => 'bubble')); ?> <?php if ( $project->active ) echo '<span class="active bubble">Active</span>'; ?></li>
<?php endforeach; ?>
</ul>
<?php if ( GP::$user->current()->can('write', 'project')): ?>
	<p class="actionlist secondary"><?php gp_link(gp_url_project('-new'), __('Create a New Project')); ?></p>
<?php endif; ?>
<?php gp_tmpl_footer(); ?>