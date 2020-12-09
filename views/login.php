<?php require 'partials/header.php' ?>

<?php 
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
?>

<body class="container--signup">
  <form class="my-form" action="/auth/login" method='post'>
    <div class="signup--logo">
      <span> Logo</span>
    </div>
    <h2 class="signup--form-tile">Sign in</h2>
    <div class="signup-subtitle">Please enter your credentials to proceed.</div>
    <div class="form-group">
      <div class="msgbox"> <?php echo '<p>'.$msg.'</p>'; ?> </div>
      <label>Email address</label>
      <input type="text" name="email" class="form-control" placeholder="samplemail@mail.com">
      <small>Forgot password?</small>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" placeholder="...................">
    </div>
    <input type="submit" value="Sign in" class="btn btn-primary sign-btn">
    <span class="sign-up-text">
      <span>Dont’ have an account? </span>
      <a href="/auth/register">Sign up</a>
    </span>
  </form>
</body>

</html>