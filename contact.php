<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact form</title>
</head>
<body>
    <div class="container">
        <form class="contact-form" action="contactform.php" method="post">
      
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Your name..">
      
          <label for="email">Email</label>
          <input type="text" id="email" name="email" placeholder="Your email">
      
          <label for="Subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Your subject">

      
          <label for="subject">message</label>
          <textarea id="message" name="message" placeholder="Write something.." ></textarea>
      
          <input type="submit" value="Submit">
      
        </form>
      </div>
</body>
</html>