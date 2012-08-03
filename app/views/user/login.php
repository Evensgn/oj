<?php
$title = 'Sign In';
include(__DIR__ . '/../layout/header.php');
?>
<form action="<?php echo SITE_BASE; ?>/login" method="POST" class="form-horizontal">
  <fieldset>
    <legend>Sign In</legend>
    <div class="control-group">
      <label class="control-label" for="username">Username</label>
      <div class="controls">
        <input type="text" class="input-xlarge" id="username" name="username" placeholder="Username">
        <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" class="input-xlarge" id="password" name="password" placeholder="Password">
        <p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>
      </div>
    </div>
    <div class="form-actions">
      <button type="submit" class="btn btn-primary">Sign In</button>
      <a class="btn" href="javascript:history.go(-1);void(0);">Cancel</a>
    </div>
  </fieldset>
</form>
<?php
include(__DIR__ . '/../layout/footer.php');