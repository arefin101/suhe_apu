<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="cv1.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        p{
            font-size: 1rem;
            padding-bottom: 0;
        }
        .main-wrapper{
            padding: 4rem;
        }
        .main-wrapper > div {
            margin-bottom: 1rem;
        }
        .main-wrapper .label{
            background-color: rgb(196, 196, 196);
            display: inline-block;
            font-weight: 700;
        }
        .main-wrapper .upper{
            text-transform: uppercase;
        }
        .main-wrapper .skill ul, .main-wrapper .lang ul{
            margin-left: 2rem;
        }
        .info-sec-1{
            display: flex;
            justify-content: space-between;
            margin-bottom: .7rem;
        }
        .info-sec-1 .cv-image{
            width: 150px;
            height: 150px;
            border: 1px solid black;
            float: right;
        }
        .info-sec-1 .title, .info-sec-1 .name{
            text-transform: uppercase;
            font-family: 'Poppins', 'Medium 500';
        }
        .info-sec-1 .name{ font-weight: 900;}

        .personal-info .p-info{
            /* display: grid; */
            /* grid-template-columns: 11rem 2rem 15rem; */
        }
        .personal-info .p-info .item1 {
            width: 10rem;
        }
        .personal-info .p-info .item2 {
            width: 2rem;
        }
        .personal-info .p-info .item3 {
            width: 20rem;
        }
        .sign{ 
            display: flex;
            flex-direction: row;
            width: 100px;
            margin-top: 3rem;
        }
        .sign-field{
            padding: 0 5rem;
            border-bottom: 1px solid black;
        }

    </style>
</head>
<body>
    <div class="main-wrapper">

        <div class="info-sec-1">
            <div class="contact-info">
                <p class="title">bio data</p>
                <p class="name">swpon shikder</p>
                <p>Passport: <span>EE8579465645</span></p>
                <p>Mobile: <span>+88011727-61756</span></p>
                <p>E-mail: <span>henten@gmail.com</span></p>
                <p>Amirabad, Notun Mirpur, Bera, Pabna</p>
            </div>
            <div class="cv-image" style=""></div>
        </div>

        <div class="obj">
            <p class="label">Objectives:</p>
            <p>A Position as a General Labour in an organization where I can use my working experience.</p>
        </div>

        <div style="clear:both; position:relative;">
            <div style="position:absolute; left:0pt; width:192pt;">
                LEFT COLUMN
            </div>
            <div style="margin-left:200pt;">
                RIGHT COLUMN
            </div>
        </div>

        <div class="personal-info">
            <p class="label p-info-title">Personal Information:</p>
            <div class="p-info">
                <p class="item1">Name</p>
                <p class="item2">:</p>
                <p class="item3">Rafiqul Islam</p>
            </div>
            <div class="p-info">
                <p class="item1">Father's Name</p>
                <p class="item2">:</p>
                <p class="item3">Abul Kashem</p>
            </div>
            <div class="p-info">
                <p class="item1">Mother's Name</p>
                <p class="item2">:</p>
                <p class="item3" class="item1">Razia Khatun</p>
            </div>
            <div class="p-info">
                <p class="item1">Passport No</p>
                <p class="item2">:</p>
                <p class="item3">EE8579465645</p>
            </div>
            <div class="p-info">
                <p class="item1">Passport Issue Date</p>
                <p class="item2">:</p>
                <p class="item3">15/12/2021</p>
            </div>
            <div class="p-info">
                <p class="item1">Passport Exp Date</p>
                <p class="item2">:</p>
                <p class="item3">12/12/2021</p>
            </div>
            <div class="p-info">
                <p class="item1">Date of Birth</p>
                <p class="item2">:</p>
                <p class="item3">01 May 1972</p>
            </div>
            <div class="p-info">
                <p class="item1">Religion</p>
                <p class="item2">:</p>
                <p class="item3">Islam</p>
            </div>
            <div class="p-info">
                <p class="item1">Height</p>
                <p class="item2">:</p>
                <p class="item3">5ft 2inc</p>
            </div>
            <div class="p-info">
                <p class="item1">Weight</p>
                <p class="item2">:</p>
                <p class="item3">50kg</p>
            </div>
            <div class="p-info">
                <p class="item1">Nationality</p>
                <p class="item2">:</p>
                <p class="item3">Bangladesh</p>
            </div>
            <div class="p-info">
                <p class="item1">Permanent Address</p>
                <p class="item2">:</p>
                <p class="item3">Amirabad, Notun Mirpur, Bera, Pabna</p>
            </div>
        </div>

        <div class="exp">
            <p class="label upper">Experience:</p>
            <p>Have Three years of experience as a "<strong>Carpenter</strong>" in "Zero Point Commercial".</p>
        </div>

        <div class="edu">
            <p class="label upper">education:</p>
            <p>Higher Secondary School Certificate (H.S.C.) Passed.</p>
        </div>

        <div class="skill">
            <p class="label upper">computer skill:</p>
            <ul>
                <li>Microsoft Office Fundamental</li>
            </ul>
        </div>

        <div class="lang">
            <p class="label upper">language:</p>
            <ul>
                <li>Efficient in Bangla</li>
                <li>Efficient in English</li>
            </ul>
        </div>

        <div class="statement">
            I hereby declare that all the information stated above is true and complete to the best of my knowledge.
        </div>

        
        <div class="sign">
            <p>Signature</p>
            <div class="sign-field"></div>
        </div>
    </div>
</body>
</html>
