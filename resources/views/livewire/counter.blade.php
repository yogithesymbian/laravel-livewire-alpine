<div style="text-align: center">
    <h1>Hello World!</h1>
    <button wire:click="increment">+</button>
    <h1>{{ $count }}</h1>

    <div x-data>
        <span x-show="$wire.showMessage">...</span>

        <button x-on:click="$wire.toggleShowMessage()">...</button>
    </div>
</div>