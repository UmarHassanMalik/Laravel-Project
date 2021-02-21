<!DOCTYPE html>

<html>

<head>
  <title>Miscellaneous Details</title>
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
      <h3 class="w3-center"><b> Miscellaneous Category Vehicle Data (Admin Panel)</b></h3>
    </div>
  </div>
  
  <div class="w3-container w3-padding-16 w3-light-grey">
  <th><a class="w3-button  w3-indigo w3-centre w3-text-black w3-round-large" href="{{URL::to('/miscellaneouscreate')}}">Add Record</a></th>

    <table class="w3-table-all">
      <tr class="w3-blue">
        <th>Id</th>
        <th>miscellaneous Name</th>
        <th>miscellaneous Type</th>
        <th>miscellaneous Model</th>
        <th>miscellaneous Registration</th>
        <th>miscellaneous Price </th>
        <th>Update Row</th>
        <th> Delete Row<th>
      </tr>
      
      @foreach ($miscellaneous_details ?? '' as $miscellaneous_detail)
            <tr>
                <td> {{$miscellaneous_detail->id}}</td> 
                <td> {{$miscellaneous_detail->Enter_miscellaneous_name}}  </td> 
                <td> {{$miscellaneous_detail->Enter_miscellaneous_type}}</td> 
                <td> {{$miscellaneous_detail->Enter_miscellaneous_model}} </td> 
                <td> {{$miscellaneous_detail->Enter_miscellaneous_registration}} </td> 
                <td> {{$miscellaneous_detail->Enter_miscellaneous_price}} </td>  
                
        <th> <a class="btn" style="border: 1px solid;" href="{{URL::to('/miscellaneousupdate', $miscellaneous_detail->id)}}" title="Update -> {{$miscellaneous_detail->Enter_miscellaneous_name}}"> <i button class="w3-button w3-green w3-text-black w3-round-large">Update</i></a>                           
                <a href="{{URL::to('/update', $miscellaneous_detail->id)}}"  title="update -> {{$miscellaneous_detail->Enter_miscellaneous_name}}"> 
                </button></a></th>
        <th>
        <a class="btn" style="border: 1px solid;" href="{{URL::to('/miscellaneousdelete', $miscellaneous_detail->id)}}" onclick="return confirm ('Are you sure to delete the User {{$miscellaneous_detail->id}} having Name {{$miscellaneous_detail->Enter_miscellaneous_name}}?')" title="Delete -> {{$miscellaneous_detail->Enter_miscellaneous_name}}"> <i button class="w3-button w3-pink w3-text-black w3-round-large">Delete</i></a>                           
                <a href="{{URL::to('/delete', $miscellaneous_detail->id)}}" onclick="return confirm ('Are you sure to delete the miscellaneous_detail {{$miscellaneous_detail->Enter_miscellaneous_name}} having miscellaneous_detail id = {{$miscellaneous_detail->id}}?')" title="Delete -> {{$miscellaneous_detail->Enter_miscellaneous_name}}"> 
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
