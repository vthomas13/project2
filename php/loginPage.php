<html>
<head>
  <title>HTML Form</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="../css/loginPage.css"/>
</head>
<body>
    <div id = "navDiv">
      <ul>
        <div id = "leftNavDiv">
        <li><a href="../php/home.php">Home</a></li>
        <li><a href="../php/profile.php">Profile</a></li>
        <li><a href = "chat.php">Chat</a></li>
        <li><a href="../html/newTopic.html">New Topic</a></li>
        </div>
        <li id ="loginButton"><a href="../html/loginPage.html"><?php print htmlspecialchars($_POST['username']); ?></a></li>
      </ul>
    </div>
</body>
</html>