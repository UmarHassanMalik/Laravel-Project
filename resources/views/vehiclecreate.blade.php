<!DOCTYPE html>
<html>
<head>
    <title>Adding Record </title>
<style>
.container{ 
  background-color:rgb(238, 221, 221);
  padding: 30px 50px;
  box-shadow: 0 0 20px brown;
  max-width: 400px;
  max-height: 900px;
  margin: auto;
  margin-top: 40px;
  margin-bottom: 40px;
  font-style:inherit;
}
.fbutton {
  
  background-color: #5890FF;
  height: 35px;
  color: white;
  text-emphasis:initial;
  border: none;
  font-size: 15px;
  margin-top: 40px ;
  width: 415px;
  border-radius: 8px;
}
.fbutton:hover {background-color: rgb(132, 187, 238)}
.fbutton:active {
  transform: translateY(3px);
}
.fields{
  padding: 3px;
  width: 400px ;
  margin: 3px ;
  margin-bottom: 4px;
}
    

</style>
</head>


<body>
    <div class="container"> 
    <h2 style="border: 1px solid black; background-color:#5890FF; text-align:center;">
    <th><a class="w3-button  w3-indigo w3-centre w3-text-black w3-round-large" href="{{URL::to('/vehilecreate')}}">Add Record</a></th>
      
    </h2>
<div>
    <form action="{{ route('vehicleadd')}}" method="post">
       


        <select id="dropdown" name = "car_details">
         @foreach ($car_details as $car_detail)  
            <option value = "{{$car_detail->id}} "> {{$car_detail->name}} </option>
            @endforeach
            </select>    

            <select id="dropdown" name = "bike_details">
            @foreach ($bike_details as $bike_detail)  
            <option value = "{{$bike_detail->id}} "> {{$bike_detail->name}} </option>
            @endforeach
            </select>  

            <select id="dropdown" name = "bus_details">
            @foreach ($bus_details as $bus_detail)  
            <option value = "{{$bus_detail->id}} "> {{$bus_detail->name}} </option>
            @endforeach
            </select>  

 </div>       

        <input class="fbutton" type="submit" value="save">
    </form> 
</div>
</body>
</html>

