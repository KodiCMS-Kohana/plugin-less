<div class="panel-heading">
	<span class="panel-title"><?php echo __('General settings'); ?></span>
</div>
<div class="panel-body">
	<div class="form-group">
		<div class="checkbox col-md-offset-2">
			<label><?php echo Form::checkbox('setting[enabled]', Config::YES, $plugin->get('enabled') == Config::YES); ?> <?php echo __('Enable compiler'); ?></label>
		</div>
	</div>
</div>
<div class="panel-heading">
	<span class="panel-title"><?php echo __('Paths'); ?></span>
</div>
<?php if (!$plugin->is_dir_less()): ?>
<div class="alert alert-danger alert-dark"><?php echo __('Directory :dir not exists', array(':dir' => $plugin->less_path())); ?></div>
<?php endif; ?>

<?php if (!$plugin->is_dir_css()): ?>
<div class="alert alert-danger alert-dark"><?php echo __('Directory :dir not exists', array(':dir' => $plugin->css_path())); ?></div>
<?php endif; ?>
<div class="panel-body">
	<div class="form-group <?php if(!$plugin->is_dir_less()): ?>error<?php endif; ?>">
		<label class="control-label col-md-3"><?php echo __('Less folder path'); ?></label>
		<div class="col-md-9">
			<?php echo Form::input('setting[less_folder_path]', $plugin->get('less_folder_path'), array(
				'class' => 'form-control'
			)); ?>
		</div>
	</div>

	<div class="form-group <?php if(!$plugin->is_dir_css()): ?>error<?php endif; ?>">
		<label class="control-label col-md-3"><?php echo __('Css folder path'); ?></label>
		<div class="col-md-9">
			<?php echo Form::input('setting[css_folder_path]', $plugin->get('css_folder_path'), array(
				'class' => 'form-control'
			)); ?>
		</div>
	</div>
</div>