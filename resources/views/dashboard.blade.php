<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil">
    </x-slot>
<style>
.margin{
        margin-left: 150px;
        margin-top: 20px;

}

</style>

    <div class="margin">
      
        
        <th><a class="w3-button   w3-indigo w3-centre w3-text-black w3-round-large" href="{{URL::to('/busread')}}">Bus Record</a></th>
        <th><a class="w3-button w3-margin-left  w3-indigo w3-centre w3-text-black w3-round-large" href="{{URL::to('/bikeread')}}">Bike Record</a></th>
        <th><a class="w3-button w3-margin-left  w3-indigo w3-centre w3-text-black w3-round-large" href="{{URL::to('/carread')}}">Car Record</a></th>
        <th><a class="w3-button w3-margin-left  w3-indigo w3-centre w3-text-black w3-round-large" href="{{URL::to('/miscellaneousread')}}">Miscellaneous Record</a></th>
        <th><a class="w3-button w3-margin-left  w3-indigo w3-centre w3-text-black w3-round-large" href="{{URL::to('/read')}}">User Record</a></th>
        <th><a class="w3-button  w3-margin-left  w3-indigo w3-centre w3-text-black w3-round-large" href="{{URL::to('/vehicleread')}}">Vehicle Data </a></th>


            
        
    </div>
</x-app-layout>
