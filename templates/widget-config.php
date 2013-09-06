<?php 
/**
 * Remember that the widget id is what you personally defined in when you declare
 * wp_add_dashboard_widget() within \NV\Hooks\Admin::dashboard()
 * 
 * WordPress will automatically add a hidden field to the configuration form, 
 * containing the widget id, so that you can catch the postdata by widget id.
 * 
 * If you need a form in your widget's normal view, 
 */

//If our widget form was submitted
if ( self::wid == $_REQUEST['widget_id'] )
{
    /**
     * Since our HTML form elements all use an array-style naming convention 
     *( widget_id['option_name'] ) we can let it do all the heavy lifting and
     * simply save the widget array straight to the database.
     * 
     * Do remember that you may want to perform some validation first! 
     * 
     * Note that submitting configs will automatically refresh the page and
     * cause the widget to display it's normal view. So, you should also provide
     * some kind of JS validation in addition to any validation checks here.
     */
    self::update_dashboard_widget_options(self::wid,$_REQUEST[self::wid]);
}
?>
<p>This is a widget configuration view!</p>
<p>Configuration views allow you to set custom values for your widget. 

<p>
    <label for="<?php echo $wid; ?>_num"><?php _e('Number:','nouveau') ?></label>
    <input id="<?php echo $wid; ?>_num" name="<?php echo self::wid; ?>[example_number]" type="number" value="<?php echo self::get_dashboard_widget_option(self::wid, 'example_number'); ?>" />
</p>