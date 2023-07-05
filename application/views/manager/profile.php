
<html>
<head>
  <title>User Profile</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/frontend/profile.css">
</head>
<body>
  <div class="profile-container">
    <img src="https://www.pngmart.com/files/21/Account-Avatar-Profile-PNG-Photo.png" >
    <div class="profile-info">
      <label for="name"><p style="font-size:24px;">Name:</p></label>
      <span id="name">John Doe</span>
    </div>
    <div class="profile-info">
      <label for="role"><p style="font-size:24px;">Role:</p></label>
      <span id="role">Administrator</span>
    </div>
    <div class="profile-info">
      <label for="password"><p style="font-size:24px;"> Password:</p></label>
      <span id="password">******</span><br> <br>
      <input type="submit"  class="button" value="Edit" name="Edit">
    </div>
  </div>
</body>
</html>

