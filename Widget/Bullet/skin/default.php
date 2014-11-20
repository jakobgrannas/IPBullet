<?php
/**
 * Public representation of the widget.
 * All form data is available here in form of variables.
 * Please check the existence of all variables as at the beginning widget has no data.
 */
?>

<div class="bullet <?php echo !empty($cssClasses) ? $cssClasses : ''; ?>">
	<div class="bullet__image">
		<span class="bullet__icon fa <?php echo !empty($icon) ? $icon : ''; ?>"></span>
	</div>
	<div class="bullet__content">
		<p class="bullet__text--primary"><?php echo !empty($textPrimary) ? $textPrimary : __('Edit me!', 'Bullet'); ?></p>
		<p class="bullet__text--secondary"><?php echo !empty($textSecondary) ? $textSecondary : __('Edit me as well!', 'Bullet'); ?></p>
	</div>
</div>