
<div class="container">
  <div class="row">
    <div class="col-md-12" style="margin-top:50px;">
    
      <table class="table table-bordered table-striped">
 
 
        <tr>
          <th colspan="2"><h4 class="text-center">Your Profile Setting</h3></th>
 
        </tr>
          <tr>
            <td>User Name</td>
            <td><?php echo $this->session->userdata('user_name'); ?></td>
          </tr>
          <tr>
            <td>User Email</td>
            <td><?php echo $this->session->userdata('email');  ?></td>
          </tr>
          
          <tr>
            <td>User Mobile</td>
            <td><?php echo $user->mobile;  ?></td>
          </tr>
          <tr>
            <td>User Company</td>
            <td><?php echo $user->company;  ?></td>
          </tr>
          <tr>
            <td>Address</td>
            <td><?php echo $user->address;  ?>, <?php echo $user->city;  ?> <?php echo $user->state;  ?></td>
          </tr>
           <tr>
            <td>Zip</td>
            <td><?php echo $user->zip;  ?></td>
          </tr>
          
          <tr>
            <td>Occupation</td>
            <td><?php echo $user->occupation;  ?></td>
          </tr>
          
          <tr>
            <td>Social Security Number</td>
            <td><?php echo $user->social_security;  ?></td>
          </tr>
          
          <tr>
            <td>Profile Picture</td>
            <td><?php echo $user->profile;  ?></td>
          </tr>
      </table>
 
 
    </div>
  </div>
<a href="<?php echo base_url('usser/user_logout');?>" >  <button type="button" class="btn-primary">Logout</button></a>
</div>