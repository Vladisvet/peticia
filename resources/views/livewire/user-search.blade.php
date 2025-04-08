<div>
    <h1 class="m-6">This is a Livewire Component</h1>

    Message:<br>
    <textarea wire:model.debounce.1000ms="message" name="" id="" cols="30" rows="1"></textarea><br>

    Marital Status:<br>
    Single <input wire:model="marital_status" type="radio" value="single">
    Maried <input wire:model="marital_status" type="radio" value="maried">
<hr>
    Favourite Color:<br>
    Red <input wire:model="colors" type="checkbox" value="red"><br>
    Green <input wire:model="colors" type="checkbox" value="green"><br>
    Blue <input wire:model="colors" type="checkbox" value="blue"><br>
<hr>
    Favourite Fruits:<br>
    <select wire:model="fruit" name="" id="">
        <option value="">Select Fruit</option>
        <option value="Apple">Apple</option>
        <option value="Mango">Mango</option>
        <option value="Banana">Banana</option>
    </select>
<hr>
    <input type="text" wire:model.debounce.1000ms="name" placeholder="Vyhľadávanie..."  class="form-control">
    Name : {{ $name }}<br>
    Message : {{ $message }}<br>
    Marital Status : {{ $marital_status }}<br>
    Colors :
    <ul>
    @foreach ($colors as $color)
    <li>{{ $color }}</li>
    @endforeach
    </ul>


    Fruit : {{ $fruit }}<hr>

    <button wire:click="addTwoNumbers(40,50)" type="button" class="btn btn-primary">Sum</button><br>
    <textarea wire:keydown.enter="DisplayMessages($event.target.value)" cols="10" rows="1"></textarea><br>

    <form wire:submit.prevent="getSum" action="">
        Enter Num 1: <input type="text" name="num1" wire:model="num1">
        Enter Num 2:<input type="text" name="num2" wire:model= "num2">
        <button type="submit">|Submit|</button>
    </form>

    Sum: {{ $sum }}<br>
    Message: {{ $message }}

    <hr>
    Title: <input wire:model="title" type="text"><br>
    Name: <input wire:model="name" type="text"><br>

    <h3>Title : {{ $title }}</h3>
    <h3>Name: {{ $name }}</h3>

    <h3>Lifacycle Hooks Method</h3>
    @foreach ($infos as $info)
        <h4>{{ $info }}</h4>
    @endforeach
    <hr>

</div>

