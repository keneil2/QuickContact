@props(['messages'])
<div class=" bg-gray-800 text-white w-fit p-4 ">
    <div class="w-96  p-4  flex justify-between bg-gray-800 text-white">
        <h1 class="text-3xl">Inbox</h1> <div class="bg-gray-600 p-1 flex rounded-sm w-48 justify-between"><button class="">All Mail</button> <button class="bg-black p-1 px-3 rounded-sm">UnRead</button></div>
    </div>
    <div>
        <input class="border-gray-500 rounded-md p-1 text-zinc-700 w-full bg-transparent border" type="search" placeholder="...search" >
    </div>
    <h1 class="text-bold text-2xl mt-5 mb-5">Notifications</h1>
    @foreach ($messages as $message)
        @php
            $shortMessage = \Illuminate\Support\Str::limit($message->Message, 100);
        @endphp

       <a href="{{route('message',$message->id)}}"><div class="border-gray-400 rounded-md p-4 border hover:bg-gray-700 w-full">

            <div class="flex justify-between">
                <h4 class="text-bold">{{ $message->name ?? 'Unknown' }}</h4>  {{ $message->created_at }}
            </div>

            <div class="mb-4">
               <h5>{{ $message->Subject}}</h5> 

            </div>

            <div>
                {{ $shortMessage."..."}}
            </div>

        </div></a> 
    @endforeach
</div>
