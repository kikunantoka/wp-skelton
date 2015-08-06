<div class="four columns">
  <!-- sidebar -->
  <div id="sidebar">
    <?php if ( is_active_sidebar( 'sidebar-widget-1' ) ) :
    dynamic_sidebar( 'sidebar-widget-1' );
    else: ?>
    <div class="widget">
      <h2>No Widget</h2>
      <p>It has no widget.</p>
    </div>
    <?php endif; ?>
  </div>
  <!-- /sidebar -->

</div>
