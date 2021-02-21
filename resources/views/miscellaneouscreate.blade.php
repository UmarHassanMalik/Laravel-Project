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
        Add Record
      
    </h2>
<div>
    <form action="{{ route('miscellaneousadd')}}" method="post">
        @csrf
        <label for="name">Enter miscellaneous  Name: &nbsp;</label><br/>
        <input class="fields" type="text" id="Enter_miscellaneous_name" name="Enter_miscellaneous_name" >

        <label for="address">Enter miscellaneous  Type: &nbsp;</label><br/>
        <input class="fields" type="text" id="Enter_miscellaneous_type" name="Enter_miscellaneous_type" >

        <label for="model">Enter miscellaneous  Model &nbsp;</label><br/>
        <input class="fields"  type="text" id="Enter_miscellaneous_model" name="Enter_miscellaneous_model" >

        
        <label for="registration">Enter miscellaneous  Registration &nbsp;</label><br/>
        <input class="fields"  type="text" id="Enter_miscellaneous_registration" name="Enter_miscellaneous_registration" >

        
        <label for="price">Enter miscellaneous  Price &nbsp;</label><br/>
        <input class="fields"  type="text" id="Enter_miscellaneous_price" name="Enter_miscellaneous_price" >
 </div>       

        <input class="fbutton" type="submit" value="save">
    </form> 
</div>
</body>
</html>

