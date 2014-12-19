<div class="plugin__row">
  <div class="plugin__widget">
    <div class="plugin__inner">
      <h3><?php echo __( 'Activity Summary' ); ?></h3>
      <table class="plugin__table">
        <thead>
          <tr>
            <th><?php echo __( 'Merchant' ); ?></th>
            <th><?php echo __( 'This Months Commissions' ); ?></th>
            <th><?php echo __( 'Total Commissions' ); ?></th>
            <th><?php echo __( 'This Months Hits' ); ?></th>
            <th><?php echo __( 'Total Hits' ); ?></th>
            <th><?php echo __( 'This Months Sales' ); ?></th>
            <th><?php echo __( 'Total Sales' ); ?></th>
            <th><?php echo __( 'This Months Conversions' ); ?></th>
            <th><?php echo __( 'Total Conversions' ); ?></th>
            <th><?php echo __( 'This Months EPC' ); ?></th>
            <th><?php echo __( 'Total EPC' ); ?></th>
            <th><?php echo __( 'Merchant Status' ); ?></th>
            <th><?php echo __( 'Sales Commissions' ); ?></th>
          </tr>
        </thead>
        <tbody><?php print_r($activity_summary['activitysummaryreportrecord']); ?>
          <?php foreach( $activity_summary['activitysummaryreportrecord'] as $key => $array ): ?>
          <tr>
            <td><?php echo $array['merchant']; ?> (#<?php echo $array['merchantid']; ?>)</td>
            <td>$<?php echo $array['commissionsmonth']; ?></td>
            <td>$<?php echo $array['commissionstotal']; ?></td>
            <td>$<?php echo $array['hitsmonth']; ?></td>
            <td><?php echo $array['hitstotal']; ?></td>
            <td><?php echo $array['salesmonth']; ?></td>
            <td><?php echo $array['salestotal']; ?></td>
            <td><?php echo $array['conversionmonth']; ?></td>
            <td><?php echo $array['conversiontotal']; ?></td>
            <td><?php echo $array['epcmonth']; ?></td>
            <td><?php echo $array['epctotal']; ?></td>
            <td><?php echo $array['merchantstatus']; ?></td>
            <td><?php echo $array['salecomm.']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
