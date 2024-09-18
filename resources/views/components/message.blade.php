@props(["message"])
<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->

  <div>

    <div class="w-full border border-gray-600 bg-gray-800 flex p-1 text-white justify-between">
       <div>
        <div class="flex"> 
            <div class="w-10 h-10 p-[1.5px] rounded-full bg-slate-700 text-white mr-9">
            <h1>{{substr($message->name,0) ?? "U" }}</h1> 
        </div>
        <div>
         <p>{{$message->name ?? "Unknown"}}</p>
         <p>{{$message->Subject}}</p>
         <p>{{$message->email}}</p>
         

         </div>
       
        <div > 

    @php

        $date = \Carbon\Carbon::parse($message->created_at);

    @endphp
        {{$date->format("D m Y").'  '. $date->format("h:i:s a")}}</div>
       
    </div>
    </div> </div>
    
    <div class="bg-gray-800 h-96 p-5 text-white">
    <p>{{$message->Message}}</p>
    </div>
  </div>
   <div class="bg-gray-800  p-8">
    <form action="{{route('mail', [ "email"=>$message->email , "name" => $message->name ] )}}">
        <input class="p-4 bg-gray-500 w-full" type="text" placeholder="Reply" name="message">
        <input type="hidden" name="name" value="{{$message->name ?? "Unknown user "}}">
        <button class="bg-slate-500 text-white px-10 py-3 rounded-md m-4 ">Send Reply</button>
    </form>
   </div>
</div>