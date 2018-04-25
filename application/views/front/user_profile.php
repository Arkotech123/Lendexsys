<?php
$user_id=$this->session->userdata('user_id');
 
if(!$user_id){
 
  redirect('user/login_view');
}
 
 ?> 
<div class="container">
  <div class="row">
    <div class="col-md-4">
 
      <table class="table table-bordered table-striped">
         <tr>
          <th colspan="2"><h4 class="text-center">User Info</h3></th>
 
        </tr>
          <tr>
            <td>User Name</td>
            <td><?php echo $this->session->userdata('name'); ?></td>
          </tr>
          <tr>
            <td>User Email</td>
            <td><?php echo $this->session->userdata('email');  ?></td>
          </tr>
          <tr>
            <td>User Age</td>
            <td><?php echo $this->session->userdata('age');  ?></td>
          </tr>
          <tr>
            <td>User Mobile</td>
            <td><?php echo $this->session->userdata('mobile');  ?></td>
          </tr>
      </table>
 
 
    </div>
  </div>
<a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>