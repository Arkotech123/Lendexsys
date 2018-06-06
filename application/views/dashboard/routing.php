<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> <?php echo $users->name;?>'s Funding Info with Bank Detail</h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Id</th>
                      <th>Routig</th>
                      <th>Checking</th>
                      <th>Funding Amount</th>
                      <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($cRecords))
                    {
                        foreach($cRecords as $record)
                        {
                    ?>
                    <tr>
                      <td>1</td>
                      <td>XXXXXXXXX<?php echo substr($record->routingNo,-4); ?></td>
                      <td>XXXXXXXXX<?php echo substr($record->checkingNo,-4); ?></td>
                      <td><?php echo $record->borrow_amount; ?> USD</td>
                      <td class="text-center">
                         
                          <a class="btn btn-sm btn-info" href="<?php echo base_url().'uploads/paystub/'.$record->paystub ?>" title="Edit" target="_blank">See Pay Stub</a>
                         
                      </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php //echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
