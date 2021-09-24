<div class="row ">
<div class="col-5 m-auto ">
<h2 class="text-info mt-5 mb-3 text-center"><?php echo $title ?></h2>
<?php echo form_open ('users/signup', array('id'=> 'signupForm', 'class'=>'sign-form'))?>
<!-- <?php echo form_input('first_name', 'Ajay')?> -->
<!-- <?php echo form_input(array('name'=>'firstname', 'id'=>'firstname', 'class'=>'firstname'))?> -->
<div class="form-group">
    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First name"
        value="<?php echo set_value('first_name')?>" />
    
    <?php echo form_error('first_name','<div class="error">', '</div>') ?>
</div>

<div class="form-group">
    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name"/>
</div>

<div class="form-group">
    <input type="email" name="email" id="email" class="form-control" placeholder="Email"
        value="<?php echo set_value('first_name')?>"/>
    <?php echo form_error('email','<div class="error">', '</div>') ?>
</div>

<div class="form-group">
    <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
    <?php echo form_error('password','<div class="error">', '</div>') ?>
</div>

<div class="form-group">
    <input type="password" name="confpass" id="confpass" class="form-control" placeholder="Confirm Password"/>
    <?php echo form_error('confpass','<div class="error">', '</div>') ?>
</div>

<div class="form-group">
    <input type="submit" name="submit" value="sign up"/>
</div>

<?php echo form_close()?>
</div>
</div>