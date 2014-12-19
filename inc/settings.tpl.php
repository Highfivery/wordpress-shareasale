<?php
/**
 * General settings page template.
 *
 * @since 1.0.0
 */

/**
 * Security Note: Blocks direct access to the plugin PHP files.
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
?>
<div class="plugin__row">
  <div class="plugin__widget">
    <div class="plugin__inner">
      <form method="post" action="<?php echo $action; ?>">
        <?php settings_fields( $tab ); ?>
        <?php do_settings_sections( $tab ); ?>
        <?php submit_button(); ?>
      </form>
    </div>
  </div>
</div>
