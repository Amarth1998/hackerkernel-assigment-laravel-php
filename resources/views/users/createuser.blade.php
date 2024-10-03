<x-layout>
     
    <x-slot name="title">Add User</x-slot>
    <x-slot name="main">
    <div class="createuser-outerdiv">  

    <h1>Add User</h1>
    <form action="/storeuser" method="post">
        @csrf

        <div class="createuser-innerdiv">
           
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter user name">
            @if ($errors->has('name'))
                <div class="error">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="createuser-innerdiv">
            
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter user email">
            @if ($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
            @endif
        </div>

        <div class="createuser-innerdiv">
        
            <input type="text" name="mobile" value="{{ old('mobile') }}" placeholder="Enter user mobile number">
            @if ($errors->has('mobile'))
                <div class="error">{{ $errors->first('mobile') }}</div>
            @endif
        </div>

        <button type="submit">Submit</button>
    </form>

</div>

</x-slot name="main">

</x-layout>
