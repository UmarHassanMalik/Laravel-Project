<!DOCTYPE html>
<html>
<head>
    <title>U of CRUD means Update Operation</title>
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
    <form action="{{ route('save',$user_registrations->id)}}" method="post">
        @csrf
        <label for="name">User Name: &nbsp;</label><br/>
        <input class="fields" type="text" id="Enter_User_Name" name="Enter_User_Name" value="{{$user_registrations->Enter_User_Name}}"><br><br>

        <label for="address">User Enter_Email: &nbsp;</label><br/>
        <input class="fields" type="text" id="Enter_Email" name="Enter_Email" value="{{$user_registrations->Enter_Email}}"><br><br>

        <label for="registration">Enter Password &nbsp;</label><br/>
        <input class="fields"  type="text" id="Enter_Password" name="Enter_Password" value="{{$user_registrations->Enter_Password}}"><br><br>
 </div>       

        <input class="fbutton" type="submit" value="save">
    </form> 
</div>
</body>
</html>

