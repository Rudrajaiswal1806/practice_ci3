<h2><?php echo $title ?></h2>
<?php echo form_open ('users/signup', array('id'=> 'signupForm', 'class'=>'sign-form'))?>
<!-- <?php echo form_input('first_name', 'Ajay')?> -->
<!-- <?php echo form_input(array('name'=>'firstname', 'id'=>'firstname', 'class'=>'firstname'))?> -->
<div class="form-group">
    <input type="text" name="first_name" id="first_name" style="width:400px" placeholder="First name"/>
    <?php echo form_error('first_name','<div class="error">', '</div>') ?>
</div>
<br/>
<div class="form-group">
    <input type="text" name="last_name" id="last_name" style="width:400px" placeholder="Last Name"/>
</div>
<br/>
<div class="form-group">
    <input type="email" name="email" id="email" style="width:400px" placeholder="Email"/>
    <?php echo form_error('email','<div class="error">', '</div>') ?>
</div>
<br/>
<div class="form-group">
    <input type="password" name="password" id="password" style="width:400px" placeholder="Password"/>
    <?php echo form_error('password','<div class="error">', '</div>') ?>
</div>
<br/>
<div class="form-group">
    <input type="password" name="confpass" id="confpass" style="width:400px" placeholder="Confirm Password"/>
    <?php echo form_error('confpass','<div class="error">', '</div>') ?>
</div>
<br/>
<div class="form-group">
    <input type="submit" name="submit" value="sign up"/>
</div>
<br/>
<?php echo form_close()?>