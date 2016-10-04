<!DOCTYPE html>

<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel ="stylesheet" type = "text/css" href = "../css/home.css"></link>
  </head>

  <body>

    <?php

       print htmlspecialchars(print_r($_POST,true));
    ?>

      <div id = "navDiv">
        <ul>
          <li><a href="home.html">Home</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a href = "chat.php">Chat</a></li>
          <li><a href="../html/newTopic.html">New Topic</a></li>
        </ul>
      </div>

      <br/>

      <div id = "centerDiv">
        <div id = "topicDiv">
          <h2>Topic:</h2>
          <p>This is some info about the topic</p>
        </div>

        <div id = "topicDiv">
          <h2>Topic</h2>
          <p>This is some info about another topic</p>
        </div>

      </div>

    </body>
</html>
