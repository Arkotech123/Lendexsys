<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
       Borrower Data Management
      </h3>
    </section>
    
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php //echo base_url(); ?>index.php/addNew"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Borrower Data List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php //echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Amount</th>
                      <th class="text-center">Actions</th>
                    </tr>
                    <?php
                   if(!empty($bRecords))
                    {
                        foreach($bRecords as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo $record->id ?></td>
                       <td><?php echo $record->Name; ?></td>
                      <td><?php echo $record->Email; ?></td>
                      <td><?php echo $record->Phone; ?></td>
                      <td>$ <?php echo $record->Amount; ?></td>
                      <td class="text-center">
                         
                          <a class="btn btn-sm btn-info" href="<?php //echo base_url().'index.php/faq/editOld/'.$record->Id; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php //echo $record->Id; ?>" title="Delete"><i class="fa fa-trash"></i></a>
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