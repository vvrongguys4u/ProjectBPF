<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hanami Learning | Login & Signup Form</title>
    <link rel="shortcut icon" href="<?= base_url('assets/images/') ?>/" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    html, body {
      display: grid;
      height: 100%;
      width: 100%;
      place-items: center;
      background: -webkit-linear-gradient(left, #a445b2, #fa4299);
    }

    ::selection {
      background: #fa4299;
      color: #fff;
    }

    .wrapper {
      overflow: hidden;
      max-width: 400px; /* Set the maximum width of the wrapper */
      margin: 0 auto; /* Center the wrapper on the page */
      background: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
    }

    .form-inner form {
      width: 100%; /* Set the width of the form */
      transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    .title-text {
      display: flex;
      width: 200%;
    }

    .title {
      width: 50%;
      font-size: 35px;
      font-weight: 600;
      text-align: center;
      transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }



  </style>
  </head>
  <body>
    <!-- Header -->
    <header>
      <h1>Hanami Learning</h1>
    </header>