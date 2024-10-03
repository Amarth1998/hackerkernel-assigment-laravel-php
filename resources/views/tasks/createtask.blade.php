<x-layout>
     
    <x-slot name="title">Assign Task</x-slot>
    <x-slot name="main">
    <div class="task-container"> 
    <h1>Assign Task</h1>
     
    <form action="/storetask" method="post">
        @csrf 

        <select name="username" id="">
            <option value="">Select User</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }} &nbsp; &nbsp;{{ $user->email }}</option>
            @endforeach
        </select>

        <textarea name="taskdetail"  cols="10" rows="5" placeholder="Task details...."></textarea>
  
        <select name="tasktype" >
            <option value="">Task Type</option>
            <option value="Pending">Pending</option>
            <option value="Done">Done</option>
        </select>

        <button type="submit">Submit</button>
    </form>

</div>
</x-slot name="main">

</x-layout>
