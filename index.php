<html>
<body>
<h1>This is my linkedin profile</h1>
   <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
<div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="en_US" data-type="horizontal" data-theme="dark" data-vanity="shubham-kumar-jain-533010163"><a class="LI-simple-link" href='https://in.linkedin.com/in/shubham-kumar-jain-533010163?trk=profile-badge'>SHUBHAM KUMAR JAIN</a></div>
<h3>And my picture</h3>
<?php
   $cloudant_url=`head -n1 path.txt`;
   $img_path="https://".$cloudant_url."/terraform.png";
   echo "<br>";
   echo "<img src='${img_path}' width=100 height=100>";
?>
</body> 
</html> 
