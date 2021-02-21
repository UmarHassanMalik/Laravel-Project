<!DOCTYPE html>

<html>

<head>
  <title>Sign up read</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">

  <style>
    #abcd {
      visibility: hidden;
    }

    .footer {

      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
    }

    body {
      background-image: url("pexels-photo-531880.jpeg");
    }
  </style>

  </style>
</head>

<body>
  <header class="w3-container w3-bar w3-black w3-wide w3-padding">
    <h1 class=" w3-text-white w3-large w3-lobster w3-xlarge w3-center"><b>Vehicle Buy and Sell</b></h1>
  </header>

  <div class="w3-padding-16 w3-light-grey w3-display-container">
    <div class="w3-container w3-text-black">
      <h3 class="w3-center"><b>User Login Account Data (Admin Panel)</b></h3>
    </div>
  </div>

  <div class="w3-container w3-padding-16 w3-light-grey">

    <table class="w3-table-all">
      <tr class="w3-blue">
        <th>Id</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Update Data</th>
        <th>Delete Data</th>
      </tr>
      
      @foreach ($user_registrations ?? '' as $user_registration)
            <tr>
                <td> {{$user_registration->id}} </td> 
                <td> $user_registration->Enter User Name  </td> 
                <td> {{$user_registration->Enter Email}} </td> 
                <td> {{$user_registrationSS->Enter Password}} </td> 
                <th><button class="w3-button  w3-green w3-text-black w3-round-large">Update</button></th>
                <th><button class="w3-button  w3-red w3-text-black w3-round-large">Delete</button></th>
            </tr>
            @endforeach
      <tr>
        <td>04</td>
        <td>Hassan</td>
        <td>hassan32@gmail.com</td>
        <td id=abcd>hassan32</td>
   
      </tr>
    </table>
    <br /> <br /> <br />
  </div>
  <div class="footer">
    <footer class="w3-container w3-black w3-text-white w3-center">
      <h5>All Rights Reserved © 2020 Umar Hassan Malik </h5>
    </footer>
  </div>

</body>

          

</html>
