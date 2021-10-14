<?php
// include"config.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $text = $_POST['text'];
    $lang = $_POST['lang'];
    $web_lang = $_POST['web_lang'];


    $sql = "INSERT INTO tbl_contact_us ('name','email','number','text','lang','web_lang')
 VALUES ('$name','$email','$number','$text','$lang','$web_lang')";

    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "New Masage created succesfully";
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<div class="contact">
    <center>
        <h1>Contact Us</h1>
        <form action="" method="POST">
            <div class="column col-xl-6 col-lg-12 col-md-12 col-sm-12">

                <div class="contact-form">
                    <form action="#" method="post" id="email">

                        <div class="form-group">
                            <div class="response"></div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="name" class="username" placeholder="Your Name *">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="email" placeholder="Your Email *">
                        </div>

                        <div class="form-group">
                            <input type="number" name="number" class="email" placeholder="Your Number *">
                        </div>

                        <div class="form-group">
                            <textarea name="contact_message" placeholder="Text Message"></textarea>
                        </div>

                        <input type="checkbox" id="lang" name="lang" value="lang">
                        <label for="vehicle1"> Arabic</label>
                        <input type="checkbox" id="lang" name="lang" value="Car">
                        <label for="lang"> English</label><br>

                        <p>Choose your favorite Web language:</p>


                          <input type="radio" id="html" name="web_lang" value="HTML">
                          <label for="html">HTML</label><br>
                          <input type="radio" id="css" name="web_lang" value="CSS">
                          <label for="css">CSS</label><br>
                          <input type="radio" id="javascript" name="web_lang" value="JavaScript">
                          <label for="javascript">JavaScript</label>
                        <div class="form-group">
                            <button class="button" type="button" id="submit" name="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
</div>
</div>
</div>
</form>
</center>
</div>
</div>