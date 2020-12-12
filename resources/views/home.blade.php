<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

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
                    <!-- <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="hidden">Like</span>
                        <i class="fa fa-heart"></i>
                    </a> -->
                </footer>
            </article>
            @endforeach
        </div>
    </div>
</x-app-layout>
