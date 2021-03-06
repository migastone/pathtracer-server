<?php $this->load->view('view_includes/header'); ?>
<!-- #################### Work Area Start #################### -->
<?php $this->load->view('view_includes/sidebar'); ?>
<!-- BEGIN PAGE BAR -->
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li> <a href="<?php echo base_url();?>">Home</a> <i class="fa fa-circle"></i> </li>
    <li> <span> <?php echo $strPageTitle; ?> </span> </li>
  </ul>
</div>
<!-- END PAGE BAR --> 
<!-- BEGIN PAGE TITLE-->
<h3 class="page-title"> <?php echo $strPageTitle; ?> </h3>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->

<!-- BEGIN FORM-->
<form action="<?php echo base_url();?>update-user" id="form_profile" class="form-horizontal" method="post">
    <input type="hidden" name="pk_user_id" value="<?php echo $objUser->pk_user_id; ?>" /> 
    <div class="form-body">
    	<?php $this->load->view('messages'); ?>
        <div class="form-group">
            <label class="control-label col-md-3">First Name
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">
                <input type="text" name="user_first_name" data-required="1" class="form-control" value="<?php echo $objUser->user_first_name; ?>" /> 
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Last Name
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">
                <input type="text" name="user_last_name" data-required="1" class="form-control" value="<?php echo $objUser->user_last_name; ?>" /> 
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Email
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">
                <input name="user_email" type="text" class="form-control" value="<?php echo $objUser->user_email; ?>" /> 
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Group
                <span class="required"> * </span>
            </label>
            <div class="col-md-4">
                <select class="form-control pull-right" name="fk_group_id">
					<?php
                    foreach($arrGroups['results'] as $objGroup)
                    {
                    ?>	
                    	<option value="<?php echo $objGroup->pk_group_id; ?>" <?php if($objGroup->pk_group_id == $objUser->fk_group_id){?>selected="selected"<?php } ?>><?php echo $objGroup->group_name; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">New Password
                <span class="required"></span>
            </label>
            <div class="col-md-4">
                <input type="password" name="user_password" id="user_password" data-required="1" class="form-control" /> 
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Re-Type New Password
                <span class="required"></span>
            </label>
            <div class="col-md-4">
                <input type="password" name="user_password_retype" data-required="1" class="form-control" /> 
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn green">Update User</button>
                <button type="reset" class="btn grey-salsa btn-outline">Cancel</button>
            </div>
        </div>
    </div>
</form>
<!-- END FORM-->
</div>
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
</div>
<!-- END CONTAINER --> 
<!-- #################### Work Area End #################### -->
<?php $this->load->view('view_includes/footer'); ?>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url();?>assets/pages/scripts/my_profile.js" type="text/javascript"></script> 
<!-- END PAGE LEVEL SCRIPTS --> 