<!DOCTYPE html>

<html>

<head>
  <title>Bike Details</title>
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
  </style>

  </style>
</head>

<body>
  <header class="w3-container w3-bar w3-black w3-wide w3-padding">
    <h1 class=" w3-text-white w3-large w3-lobster w3-xlarge w3-center"><b>Vehicle Buy and Sell</b></h1>
  </header>

  <div class="w3-padding-16 w3-light-grey w3-display-container">
    <div class="w3-container w3-text-black">
      <h3 class="w3-center"><b>Bike Data (Admin Panel)</b></h3>
    </div>
  </div>

 <th><a class="w3-button  w3-indigo w3-centre w3-text-black w3-round-large" href="{{URL::to('/bikecreate')}}">Add Record</a></th>
    <table class="w3-table-all">
      <tr class="w3-blue">
        <th>Id</th>
        <th>Bike Name</th>
        <th>Bike Type</th>
        <th>Bike Model</th>
        <th>Bike Registration</th>
        <th>Bike Price </th>
        <th>update Row</th>
        <th> Delete Row<th>
      </tr>

      
      
      @foreach ($bike_details ?? '' as $bike_detail)
            <tr>
                <td> {{$bike_detail->id}}</td> 
                <td> {{$bike_detail->Enter_bike_name}}  </td> 
                <td> {{$bike_detail->Enter_bike_type}}</td> 
                <td> {{$bike_detail->Enter_bike_model}} </td> 
                <td> {{$bike_detail->Enter_bike_registration}} </td> 
                <td> {{$bike_detail->Enter_bike_price}} </td> 
                
        <th> <a class="btn" style="border: 1px solid;" href="{{URL::to('/bikeupdate', $bike_detail->id)}}" title="update -> {{$bike_detail->Enter_bike_name}}"> <i button class="w3-button w3-green w3-text-black w3-round-large">update</i></a>                           
                <a href="{{URL::to('/bikeupdate', $bike_detail->id)}}"  title="update -> {{$bike_detail->name}}"> 
                </button></a></th>
        <th>
        <a class="btn" style="border: 1px solid;" href="{{URL::to('/bikedelete', $bike_detail->id)}}" onclick="return confirm ('Are you sure to delete the record {{$bike_detail->id}} having name {{$bike_detail->Enter_bike_name}}?')" title="Delete -> {{$bike_detail->Enter_bike_name}}"> <i button class="w3-button w3-pink w3-text-black w3-round-large">Delete</i></a>                           
                <a href="{{URL::to('/delete', $bike_detail->id)}}" onclick="return confirm ('Are you sure to delete the bike_detail {{$bike_detail->Enter_bike_name}} having bike_name id = {{$bike_detail->id}}?')" title="Delete -> {{$bike_detail->name}}"> 
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
