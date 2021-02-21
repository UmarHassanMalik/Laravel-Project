<!DOCTYPE html>

<html>

<head>
  <title>Create Account</title>
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
      <h3 class="w3-center"><b>User Create Account Data (Admin Panel)</b></h3>
    </div>
  </div>

  <div class="w3-container w3-padding-16 w3-light-grey">
  <th><a class="w3-button  w3-indigo w3-centre w3-text-black w3-round-large" href="{{URL::to('/create')}}">Add Record</a></th>

    <table class="w3-table-all">
      <tr class="w3-blue">
        <th>Id</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Update Row</th>
        <th> Delete Row<th>
      </tr>
      
      @foreach ($user_registrations ?? '' as $user_registration)
            <tr>
                <td> {{$user_registration->id}}</td> 
                <td> {{$user_registration->Enter_User_Name}}  </td> 
                <td> {{$user_registration->Enter_Email}}</td> 
                <td> {{$user_registration->Enter_Password}} </td> 
              
        <th> <a class="btn" style="border: 1px solid;" href="{{URL::to('/update', $user_registration->id)}}" title="Update -> {{$user_registration->Enter_Email}}"> <i button class="w3-button w3-green w3-text-black w3-round-large">Update</i></a>                           
                <a href="{{URL::to('/update', $user_registration->id)}}"  title="update -> {{$user_registration->email}}"> 
                </button></a></th>
        <th>
        <a class="btn" style="border: 1px solid;" href="{{URL::to('/delete', $user_registration->id)}}" onclick="return confirm ('Are you sure to delete the User {{$user_registration->id}} having Email {{$user_registration->Enter_Email}}?')" title="Delete -> {{$user_registration->Enter_Email}}"> <i button class="w3-button w3-pink w3-text-black w3-round-large">Delete</i></a>                           
                <a href="{{URL::to('/delete', $user_registration->id)}}" onclick="return confirm ('Are you sure to delete the user_registration {{$user_registration->Enter_Email}} having user_registration id = {{$user_registration->id}}?')" title="Delete -> {{$user_registration->email}}"> 
                </button></a></th>
              </tr>
      @endforeach
    </table>
    <br /> <br /> <br />
  </div>
  <div class="footer">
    <footer class="w3-container w3-black w3-text-white w3-center">
      <h5>All Rights Reserved © 2020  </h5>
    </footer>
  </div>

</body>

          

</html>
