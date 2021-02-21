<!DOCTYPE html>
<html>
<head>
    <title>Updating </title>
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
        Updating Table
    </h2>
<div>
    <form action="{{ route('carsave',$car_details->id)}}" method="post">
        @csrf
        <label for="name">Enter_car_name: &nbsp;</label><br/>
        <input class="fields" type="text" id="Enter_User_Name" name="Enter_car_name" value="{{$car_details->Enter_car_name}}">

        <label for="type">Enter_car_type: &nbsp;</label><br/>
        <input class="fields" type="text" id="Enter_car_type" name="Enter_car_type" value="{{$car_details->Enter_car_type}}">

        <label for="model">Enter_car_model &nbsp;</label><br/>
        <input class="fields"  type="text" id="Enter_car_model" name="Enter_car_model" value="{{$car_details->Enter_car_model}}">

        
        <label for="registration">Enter_car_registration &nbsp;</label><br/>
        <input class="fields"  type="text" id="Enter_car_registration" name="Enter_car_registration" value="{{$car_details->Enter_car_registration}}">

        
        <label for="price">Enter_car_price &nbsp;</label><br/>
        <input class="fields"  type="text" id="Enter_car_price" name="Enter_car_price" value="{{$car_details->Enter_car_price}}">
 </div>       

        <input class="fbutton" type="submit" value="save">
    </form> 
</div>
</body>
</html>

