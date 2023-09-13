<div>
    {{-- <h1>{{$title}}</h1>
    <h5>{{count($users)}}</h5>
    <p>Knowing others is intelligence; knowing yourself is true wisdom.</p>
    <button wire:click="handleClick">Click Me</button>

    <button wire:click="createNewUser">Create New User</button> --}}

    <form wire:submit="createNewUser" action="" method="post">
        <input wire:model="name" type="text" placeholder="name">
        @error('name')
            <span class="text-red-500 text-xs"{{$message}}></span>
        @enderror

        <input wire:model="email" type="email" placeholder="email">
        @error('email')
            <span class="text-red-500 text-xs"{{$message}}></span>
        @enderror

        <input wire:model="password" type="password" placeholder="password">
        @error('password')
            <span class="text-red-500 text-xs"{{$message}}></span>
        @enderror

        <button>Create</button>
    </form>

    @foreach ($users as $user)
        <h3>{{$user->name}}</h3>
    @endforeach
</div>
