<!DOCTYPE html>
<html>

<head>
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
                <li><a href = "chat.php">Chat</a></li>
                <li><a href="../html/newTopic.html">New Topic</a></li>
            </div>
        </ul>
    </div>
    <br/>
    <div id="content">
        
        <img id="banner" src="../images/banner.jpeg">
        <div id="profileInfo">
            <h2>Your Posts</h2>
        </div>
    </div>

    <div id="profileHeader">

        <?php
            session_start();
            if(isset($_SESSION["profPic"])){
             echo "<img id=\"profilePicture\"src=\"../uploads/".  $_SESSION["profPic"] ."\">";
            }else{
             echo "<img id=\"profilePicture\"src=\"../images/baseprofile.jpeg\">";
           }

        ?>
        <form action="../php/upload.php" method="post" enctype="multipart/form-data">Change Profile Picture:
            <br>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <br>
            <input type="submit" value="Upload Image" name="submit">
        </form>

    </div>

</div>
</body>
</html>