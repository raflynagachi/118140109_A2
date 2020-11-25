<p>
    <?php echo $this->session->flashdata('verify_msg'); ?>
</p>
 
<h4>User Registration Form</h4>
 
<?php $attributes = array("name" => "registrationform");
echo form_open("user/register", $attributes);?>
<table>
    <tr>
        <td align="center" colspan="2">Enter Login Details</td>
    </tr>
    <tr>
        <td align="right">Username</td>
        <td><input type="text" name="username"></td>
    </tr>
    <tr>
        <td align="right">fname</td>
        <td><input type="text" name="fname"></td>
    </tr>
    <tr>    
        <td><label for="subject">Password</label></td>
        <td><input name="password" placeholder="Password" type="password" /> <span style="color:red"><?php echo form_error('password'); ?></span></td>
    </tr>    
    <tr>    
        <td><label for="subject">Confirm Password</label></td>
        <td><input name="cpassword" placeholder="Confirm Password" type="password" /> <span style="color:red"><?php echo form_error('cpassword'); ?></span></td>
    </tr>    
    <tr>    
        <td></td>
        <td><button name="submit" type="submit">Signup</button></td>        
    </tr>
</table>    
<?php echo form_close(); ?>
 
<p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
<p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>