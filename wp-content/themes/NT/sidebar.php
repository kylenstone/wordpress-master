<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<div id="sidebar">
<h2 class="sidebartitle"><?php _e('Categories'); ?></h2>
<ul>
<?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
</ul>

<h2 class="sidebartitle"><?php _e('Archives'); ?></h2>
<ul class="list-archives">
<?php wp_get_archives('type=monthly'); ?>
</ul>
</div>