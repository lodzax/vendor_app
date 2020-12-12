<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>
    @if(session()->has('message'))
        <section class="flex items-center justify-center mt-4 mx-3">
            <div class="flex items-center bg-white shadow  rounded mt-6 px-2 mx-8" style="width: 24rem;">
                <div class="mr-6 bg-green-500 rounded px-4 py-2  text-center -ml-3">
                    <svg fill="none" viewBox="0 0 24 24" class="w-8 h-8 text-white" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <div class="flex items-center">
                    <h2 class="text-green-500 text-2xl font-bold mr-2 ">Success</h2>
                </div>
            </div><!--one-->
        </section>
    @endif

    <div class="py-12">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8 grid grid-cols-3 gap-4">
            @foreach($products as $product)
            <article class="overflow-hidden rounded-lg shadow-lg">
                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="{{ $product->image_url }}">
                </a>

                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                            {{ $product->title }}
                        </a>
                    </h1>
                    
                    <p class="text-grey-darker text-sm">
                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($product->created_at))->diffForHumans() }}
                    </p>
                </header>

                <p class="flex items-center justify-between leading-tight p-2 md:p-4 text-grey-darker text-sm">
                    {{ $product->description }}
                </p>


                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <p class="ml-2 text-sm">
                            {{ $product->user->name }}
                        </p>
                    </a>
                   <a href="{{ route('addcart', $product->id) }}">
                    <button
                            type="button"
                            class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                            Add To Cart
                        </button>
                   </a>
                </footer>
            </article>
            @endforeach
        </div>
    </div>
</x-app-layout>
