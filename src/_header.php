<!DOCTYPE html>
<html dir="rtl">
<head>
    <link rel="icon" type="image/png" href="img/favico.png" />
    <title>Appointment</title>
    <meta charset="utf-8">
    <style>
        body
        {
            background-color: #fff;
            font-family: Tahoma, Geneva, sans-serif;
            text-align: center;
        }
        div
        {
            margin-left: auto;
            margin-right: auto;
            background-color: #AAA;
            border-radius: 4px;
        }
        img
        {
            width: 772px;
            border-radius: 4px;
        }
        input {
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding: 8px;
        }
        .button
        {
            display: inline-block;
            width: 125px;
            background-color: #0442D8;
            line-height: 44px;
            border-radius: 4px;
            margin-top: 14px;
            margin-bottom: 14px;
            margin-left: 7px;
            margin-right: 7px;
            text-decoration: none;
            color: #fff;
        }
        .button:hover
        {
            background-color: #666;
        }
        #orgin
        {
            width: 800px;
            margin-top: 14px;
        }
        #s
        {
            height: 14px;
        }
        #header
        {
            width: 772px;
        }
        #tabs
        {
            width: 772px;
            background-color: #fff;
            margin-top: 14px;
        }
        #main
        {
            width: 744px;
            background-color: #fff;
            margin-top: 14px;
            padding: 14px;
            padding-top: 100px;
            padding-bottom: 100px;
        }
        #footer
        {
            width: 744px;
            background-color: #FFF;
            padding: 14px;
        }
        #schedule
        {
            text-align: right;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="orgin">
        <div id="s"></div>
        <div id="header">
            <img src="img/cover.jpg" />
        </div>
        <div id="tabs">
            <a class="button" href="index.php">خانه</a>
            <a class="button" href="admin_login.php">پنل مدیران</a>
            <a class="button" href="doctor_login.php">پنل پزشکان</a>
            <a class="button" href="patient_login.php">پنل بیماران</a>
            <a class="button" href="logout.php">خروج</a>
        </div>
        <div id="main">
