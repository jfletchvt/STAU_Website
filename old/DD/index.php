<!DOCTYPE html>
<html>
<head>
  <title>DD Test Location</title>
  <meta charset="UTF-8">
  <script src="js/fbAccess.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="//www.parsecdn.com/js/parse-1.3.2.min.js"></script>
</head>
<body>
  <script>
//  Parse.initialize("Khu0lINcin5I4n1dqmNghba6aBM2mTDVthQBXEJb", "hoT5kItKWUTKe6EX7cJisfM6i6yvqr3hBmRpnSmT");

//   var TestObject = Parse.Object.extend("TestObject");
// var testObject = new TestObject();
// testObject.save({foo: "bar"}).then(function(object) {
//   alert("yay! it worked");
// });

</script>
  <!--
    Below we include the Login Button social plugin. This button uses
    the JavaScript SDK to present a graphical Login button that triggers
    the FB.login() function when clicked.
  -->
  <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
  </fb:login-button>

  <button id="logOut" onclick="fbLogout()">Logout</button>

  <?php
  $servername = "localhost";
  $username = "stau_client";
  $password = "6vDA#lF,WKC9";
  $dbname = "stau_info";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // // sql to create table
  // $sql = "CREATE TABLE Users (
  // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  // firstname VARCHAR(30) NOT NULL,
  // lastname VARCHAR(30) NOT NULL,
  // email VARCHAR(50),
  // phone INT(10) NOT NULL,
  // reg_date TIMESTAMP
  // )";

  $sql = "INSERT INTO Users (firstname, lastname, email, phone)
  VALUES ('John', 'Doe', 'john@example.com', 1234567890)";

  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  ?>

  <div id="status">
  </div>

</body>
</html>