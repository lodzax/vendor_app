<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex justify-center max-w-12xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="md:flex md:-mx-4">
                    <div class="w-full mb-2 md:w-1/2 md:mx-4 border rounded shadow-sm">
                        <a href="#" class="mb-4">
                            <img class="rounded" src="{{ url('img/fv.jpg') }}">
                        </a>
                        <div class="px-4 py-4">
                            <div>
                                <a href="#" class="font-semibold leading-tight text-2xl text-gray-800 hover:text-gray-800">
                                Fresh Fruits and Vegetables
                                </a>
                            </div>
                            <hr class="border-gray-200 my-1 border-bottom-none" style="border-top-width:0">
                            <div class='flex text-gray-700 text-sm '>
                                <x-button class="ml-3">
                                    {{ __('View More') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-2 md:w-1/2 md:mx-4 border  shadow-sm">
                        <a href="#" class="mb-4">
                            <img class="rounded" src="{{ url('img/grocery.jpg') }}">
                        </a>
                        <div class="px-4 py-4">
                            <div>
                                <a href="#" class="font-semibold leading-tight text-2xl text-gray-800 hover:text-gray-800 ">
                                Food Variety
                                </a>
                            </div>
                            <hr class="border-gray-200 my-1 border-bottom-none" style="border-top-width:0">
                            <div class='text-gray-700 text-sm font-bold'>
                                <x-button class="ml-3">
                                    {{ __('View More') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-2 md:w-1/2 md:mx-4 border  shadow-sm">
                        <a href="#" class="mb-4">
                            <img class="rounded" src="{{ url('img/clothing.jpeg') }}">
                        </a>
                        <div class="px-4 py-4">
                            <div>
                                <a href="#" class="font-semibold leading-tight text-2xl text-gray-800 hover:text-gray-800 ">
                                Fashionable Clothing
                                </a>
                            </div>
                            <hr class="border-gray-200 my-1 border-bottom-none" style="border-top-width:0">
                            
                            <div class='text-gray-700 text-sm font-bold'>
                                <x-button class="ml-3">
                                    {{ __('View More') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-2 md:w-1/2 md:mx-4 border  shadow-sm">
                        <a href="#" class="mb-4">
                            <img class="rounded" src="{{ url('img/phones.png') }}">
                        </a>
                        <div class="px-4 py-4">
                            <div>
                                <a href="#" class="font-semibold leading-tight text-2xl text-gray-800 hover:text-gray-800 ">
                                Mobile Phones & Accessories
                                </a>
                            </div>
                            <hr class="border-gray-200 my-1 border-bottom-none" style="border-top-width:0">
                            <div class='text-gray-700 text-sm font-bold'>
                                <x-button class="ml-3">
                                    {{ __('View More') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                </div>
                  
           
            </div>
        </div>
    </div>
</x-app-layout>
