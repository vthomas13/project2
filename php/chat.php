<!DOCTYPE html>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel ="stylesheet" type = "text/css" href = "../css/profile.css"/>
</head>

<body>

<div class="container">

    <div id = "navDiv">
        <ul>
            <div id = "leftNavDiv">
                <li><a href="../php/home.php">Home</a></li>
                <li><a href="../php/profile.php">Profile</a></li>
                <li><a href = "../chat.php">Chat</a></li>
                <li><a href="../html/newTopic.html">New Topic</a></li>
            </div>
        </ul>
    </div>

    <div class="container">

    <div id="chatSection">



    </div>

 <div id="inputSection">
    <form action="client.php" method="post">
        <br>
        Enter your Message: <textarea cols="100" rows="1" name="message"></textarea>
        <input type="submit" value="Submit" name="submit">
    </form>


    </div>
    </div>



</div>
</body>
</html>