<?php
gp_title(__('Projects'));
gp_breadcrumb(array(__('Projects')));
wp_enqueue_script('confirm');
gp_tmpl_header();
?>
<section id="content">
    <h2><?php _e('Projects') ?></h2>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#"><?php _e('Overview'); ?></a></li>
<!--        <li><a href="#"><?php _e('Stats'); ?></a></li>-->
        <?php if (GP::$user->current()->can('write', 'project')): ?><li><?php gp_link(gp_url_project('-new'), __('Create a New Project'), array('class' => '')); ?></li><?php endif; ?>
    </ul>
    <?php if (empty($projects)): ?>
        <p><?php _e('No projects were found!'); ?></p>
    <?php else: ?>
        <!--<ul class="nav nav-pills nav-stacked project-list"> -->
        <table class="table table-striped table-hover ">
            <thead><tr><th><?php _e('Project title'); ?></th><th><?php _e('Actions'); ?></th></tr></thead>
            <tbody>
            <?php foreach ($projects as $project): ?>
                    <tr><td><?php gp_link_project($project, esc_html($project->name), array('class' => 'project-title')); ?>
                    <?php if ($project->active) echo '<span class="label label-warning">Active</span>'; ?></td>
                    <td><?php gp_link_project_edit($project, null, array('class' => 'btn btn-primary btn-xs')); ?>
                    <?php gp_link_project_delete($project, null, array('class' => 'btn btn-danger btn-xs')); ?></td>                    </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</section>
<?php gp_tmpl_footer(); ?>