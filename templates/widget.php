<?php
/**
 * This file could be used to catch submitted form data. When using a non-configuration
 * view to save form data, remember to use some kind of identifying field in your form.
 */
?>
<p>This is an example dashboard widget!</p>
<p>This is the front-facing part of the widget, and can be found and edited from <tt><?php echo __FILE__ ?></tt></p>
<p>Widgets can be configured as well. Currently, this widget is configured to show "<b><?php echo self::get_dashboard_widget_option(self::wid, 'example_number'); ?></b>"! To change the number, hover over the widget title and click on the "Configure" link.</p>