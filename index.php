

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="section" media="screen">
    <title>Kepsticker</title>
</head>

<body>
    <header>
        <div class="logo">Kepsticker</div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li>
                    <a href="" class="active">Home</a>
                </li>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
        </nav>
    </header>


    <section class="contact">
        <div class="contact-form">
            <h1>Contact <span>Us</span></h1>
            <p>Contact us if you want something embroiderd and
                send a picture for reference if you want to.<br>
                <span>*</span> 
                If the image looks blurry, 
                don't worry since the image is upscaled, we will get the original size
                <span>*</span>.
            </p>
            <form method="post" action="mail.php" enctype="multipart/form-data">
                <input type="text" placeholder="Your Name" name="name" id="" required>
                <input type="text" placeholder="Your E-mail" name="email" id="" required>
                <input type="text" placeholder="Subject" name="subject" id="" required>
                <textarea name="message" id="" cols="30" rows="10" placeholder="Additional Information" required>

                </textarea>
                <input type="file" name="attachment" id="image-input">
                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
        </div>

        <div class="contact-img">
            <img src="Cap.png" id="loaded_image">
        </div>
    </section>
</body>
<script src="hamburger.js"></script>
<script src="imageDisplay.js"></script>

</html>