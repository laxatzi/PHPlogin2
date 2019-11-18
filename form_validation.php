
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Form validation example!</title>
   <link rel="stylesheet" href="form_styles.css">
</head>
<body>

   <h1>Complete the form to be in touch!</h1>
   <div class="container">
      <form action="" method="POST" id="contact_form" class="contact_form">
         <div class="form_item">
            <div class="form_item-first">
               <label for="name"><span class="aster">&ast;</span>Name:</label>
            </div>
            <div class="form_item-second">
               <input type="text" id="name" name="name" placeholder="Enter your name"  value="<?php echo $form['name']; ?>"><?php echo $error['name'] ?>
            </div>
         </div>

         <div class="form_item">
            <div class="form_item-first">
                <label for="phone">Phone:</label>
            </div>
            <div class="form_item-second">
                <input type="number" id="phone" name="phone" placeholder="Enter your phone number">
            </div>
         </div>

         <div class="form_item">
            <div class="form_item-first">
                <label for="email"><span class="aster">&ast;</span>Email:</label>
            </div>
            <div class="form_item-second">
               <input type="email" id="email" name="email" placeholder="Enter your email"  value="<?php echo $form['email']; ?>"><?php echo $error['email'] ?>
            </div>
         </div>

         <div class="form_item">
            <div class="form_item-first">
                <label for="fax">Fax:</label>
            </div>
            <div class="form_item-second">
                <input type="number" id="fax" name="fax" placeholder="Enter fax number">
            </div>
         </div>

         <div class="form_item">
            <div class="form_item-first">
                <label for="comments">Comments: </label>
            </div>
            <div class="form_item-second">
                <textarea class="form-control"  name="message"  placeholder="Enter your message here ..."><?php echo $form['message']; ?></textarea>
            </div>
         </div>

         <div class="form_submit">
            <input type="submit" name="submit" id="submit" value="Send">
         </div>
         <small class="fine"><span class="aster">&ast;</span>Fields marked with asterisk are     mandatory</small>
         </div>
      </form>
   </div>
</body>
</html>
