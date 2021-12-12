<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 50px;
        width: 50%;
        align-items: center;
    }

    .center {
        padding-left: 35%;
    }
    </style>
</head>

<body>

    <h3 style="text-align: center;">Contact Form</h3>
    <section class="center">
        <div class="container">
            <form action="contact.php" method="post">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="mobileno">Mobile No</label>
                <input type="text" id="mobileno" name="phone" placeholder="Your Mobile No" minlength="10"
                    maxlength="10">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Your Email">

                <label for="subject">Subject</label>
                <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>
    </section>

</body>

</html>