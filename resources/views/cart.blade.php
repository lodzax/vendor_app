<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shopping Cart') }}
        </h2>
    </x-slot>
    <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
        <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
            <div class="mb-4">
                <h1 class="text-grey-darkest">Shopping Cart</h1>
            </div>
            <div>
                <div class="flex mb-4 items-center">
                    <p class="w-full text-grey-darkest">Product 1</p>
                    <button class="flex-no-shrink p-2 ml-2 border-2 rounded text-red">Remove</button>
                </div>
            </div>
            <div>
                <div class="flex mb-4 items-center">
                    <p class="w-full text-grey-darkest">Product 2</p>
                    <button class="flex-no-shrink p-2 ml-2 border-2 rounded text-red">Remove</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>