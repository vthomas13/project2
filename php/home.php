<!DOCTYPE html>

<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel ="stylesheet" type = "text/css" href = "../css/home.css"></link>
  </head>

  <body>

    <?php
      if(isset($_POST))
      {
        $file = '../topics.txt';
        $current = file_get_contents($file);
        $delimiter = "asdfqwerty123";
        foreach ($_POST as $key => $value)
        {
          $current .= $value;
          $current .= $delimiter;
        }
        file_put_contents($file, $current);
      }
    ?>

      <div id = "navDiv">
        <ul>
          <div id = "leftNavDiv">
          <li><a href="../php/home.php">Home</a></li>
          <li><a href="../php/profile.php">Profile</a></li>
          <li><a href = "chat.php">Chat</a></li>
          <li><a href="../html/newTopic.html">New Topic</a></li>
        </div>
          <li id ="loginButton"><a href="../html/loginPage.html">Log In</a></li>
        </ul>
      </div>

      <br/>

      <div id = "centerDiv">

        <?php
          $file = '../topics.txt';
          $current = file_get_contents($file);
          $delimiter = "asdfqwerty123";


          if($current != "")
          {
            $current = explode($delimiter, $current, -1);
            foreach ($current as $key => $value)
            {
              if($key % 2 == 0 && $value != PHP_EOL)
              {
                echo "<div id = topicDiv>";
                echo "<h2>Topic:</h2>";
                echo "$value";
              }
              else
              {
                echo"<h2>Description:</h2>";
                echo "<p>$value</p>";
                echo "</div>";
              }
            }
          }

        ?>

      </div>

    </body>
</html>
