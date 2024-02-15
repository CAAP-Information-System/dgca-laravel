<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title></title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Protest+Riot&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
    }

    .email-header {
        font-size: 1.2rem;
    }

    .email-body {
        margin-top: 9vh;
        font-size: 16px;
    }

    .highlight {
        color: #001E50;
        font-weight: bold;
    }

    .image-section {
        margin-top: 5vh;
        display: flex;
        align-items: center;
        float: left;
        gap: 4vh;
    }

    .email-img {
        width: 100px;
        height: auto;
    }
    .regards{
        margin-top: 5vh;
    }
</style>

<body>
    <header class="email-header">Greetings Delegate,</header>

    <div class="email-body">
        <p>We are pleased to inform you that your account has been <span class="highlight">successfully approved</span> by the conference administrators.</p>
        <p>You can now access all the features and functionalities available on our platform. If you have any questions or need further assistance, please contact our DGCA Secretariat thru <a href="#">dgca-secretariat@gmail.com</a>.</p>
        <p>Thank you for joining us!</p>
        <div class="regards">
            <i>Best regards,</i>
            <br>
            <div style="margin-top: 2vh; font-weight:bold">The DGCA Registration Committee</div>
        </div>
    </div>
    <div class="image-section">
        <img src="{{ asset('img/logo/dgca-logo.png') }}" alt="dgca logo" class="email-img">
        <img src="{{ asset('img/logo/caap_logo.png') }}" alt="caap logo" class="email-img">
    </div>
</body>

</html>
