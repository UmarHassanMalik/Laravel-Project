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
    <form action="{{ route('bussave',$bus_details->id)}}" method="post">
        @csrf
        <label for="name">Enter Bus Name: &nbsp;</label><br/>
        <input class="fields" type="text" id="Enter_bus_Name" name="Enter_bus_name" value="{{$bus_details->Enter_bus_name}}"><br><br>

        <label for="type">Enter Bus Type: &nbsp;</label><br/>
        <input class="fields" type="text" id="Enter_bus_type" name="Enter_bus_type" value="{{$bus_details->Enter_bus_type}}"><br><br>

        <label for="model">Enter_bus_model &nbsp;</label><br/>
        <input class="fields"  type="text" id="Enter_bus_model" name="Enter_bus_model" value="{{$bus_details->Enter_bus_model}}"><br><br>

        
        <label for="registration">Enter Bus Registration &nbsp;</label><br/>
        <input class="fields"  type="text" id="Enter_bus_registration" name="Enter_bus_registration" value="{{$bus_details->Enter_bus_registration}}"><br><br>

        
        <label for="price">Enter Bus Price &nbsp;</label><br/>
        <input class="fields"  type="text" id="Enter_bus_price" name="Enter_bus_price" value="{{$bus_details->Enter_bus_price}}"><br><br>
 </div>       

        <input class="fbutton" type="submit" value="save">
    </form> 
</div>
</body>
</html>

