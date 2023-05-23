<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/jfif" sizes="32x32" href="image/logo.jfif">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&family=Bellefair&family=Barlow:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Our custom CSS -->
    <link rel="stylesheet" href="css/index.css">
    <title>Edenland Hotel Reservations</title>
    <script src="javascript/navigation.js" defer></script>
    <script src="javascript/tabs.js" defer></script>
</head>
<style>
    .book-hotel-details a{
        width: 100%;
        border: none;
        padding: 5px 20px;
        border-radius: 5px;
        background-color: #1ec0e9;
        translate: -50%;
        color: white;
        text-align:center;
    }
    .book-hotel-details .logout{
        margin-top: 30px; 
    }
    .error-txt {
        color: #fdfdfd;
        font-size: 18px;
        padding: 10px 12px;
        text-align: center;
        border-radius: 5px;
        background: #032f3d;
        border: 1px solid var(--white-bg-color);
        margin-bottom: 10px;
    }
    .hotels .title .text-center{
        text-align: center;
    }
    .container .check-availability{
        display: flex;
        /* align-items: flex-start; */
        background-color: #032f3d;
        border-radius: 5px;
        list-style-type: none;
    }
    .container .check-availability .filterDropdown{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .container .check-availability .filterDropdown .check{
        font-size: 16px;
        color: white;
        display: flex;
        flex-direction: column;
        margin: 10px 0;
    }
    .container .check-availability .filterDropdown .type{
        display:flex;
        align-items: center;
        flex-direction: column;
    }
</style>