<!DOCTYPE html> 
<html lang="en-US">
  <head>
    <title>Sample Project</title>
    <meta charset="utf-8">
    <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
  </head>
  <body>
<?php
//form validation
echo validation_errors();
?>  	
<div class="container login">
<?php
// $attributes = array('class' => 'form-signin');   
// echo form_open('admin/create_member', $attributes);
// echo '<h2 class="form-signin-heading">Create an account</h2>';
// echo form_input('first_name', set_value('first_name'), 'placeholder="First name"');
// echo form_input('last_name', set_value('last_name'), 'placeholder="Last name"');
// echo form_input('email_address', set_value('email_address'), 'placeholder="Email"');

// echo form_input('username', set_value('username'), 'placeholder="Username"');
// echo form_password('password', '', 'placeholder="Password"');
// echo form_password('password2', '', 'placeholder="Password confirm"');

// echo form_submit('submit', 'submit', 'class="btn btn-large btn-primary"');
// echo form_close();

$attributes = array('class' => 'form-signin');   
echo form_open('admin/create_member', $attributes);
echo '<h2 class="form-signin-heading">Create an account</h2>';
echo form_input('display_name', set_value('name'), 'placeholder="Display Name"');
echo form_input('user_name', set_value('user_name'), 'placeholder="Username"');

echo form_password('password', '', 'placeholder="Password"');
echo form_password('password2', '', 'placeholder="Confirm Password"');
?>
<select name="status">
	<option value="admin" <?php echo set_select('status', 'admin'); ?> >Admin</option>
	<option value="client" <?php echo set_select('status', 'client'); ?> >Client</option>
</select>
<?php
// echo "  
// 	<select name="Status">
//     		<option value="admin">Admin</option>
//    		<option value="client">Client</option>
//   	</select>";
echo "<br/>";
echo form_submit('submit', 'submit', 'class="btn btn-large btn-primary"');
echo form_close();
?>
</div>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.7.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>    
    