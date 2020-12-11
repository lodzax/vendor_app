<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add A Product
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-center">
                <div class="w-full max-w-md">
                    <form 
                        class="bg-white shadow-lg rounded px-12 pt-6 pb-8 mb-4" 
                        method="POST"
                        action="{{ route('product.store') }}"
                        enctype="multipart/form-data">
                        <!-- @csrf -->
                        @csrf
                        <div class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4">
                            Add Product
                        </div>
                        <div class="mb-4">
                            <label
                                class="block text-gray-700 text-sm font-normal mb-2"
                                for="name">Product Name</label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                name="name"
                                v-model="form.name"
                                type="name"
                                required
                                autofocus
                                placeholder="Product Name"/>
                        </div>
                        <div class="mb-6">
                        <label
                            class="block text-gray-700 text-sm font-normal mb-2"
                            for="description">
                            Product Description
                        </label>
                        <textarea 
                            cols="30" 
                            rows="6"
                            type="text"
                            class="shadow appearance-none rounded border-none w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
                            placeholder="Product Description"
                            required
                            autofocus
                            name="description"></textarea>
                        </div>
                        <div class="flex w-full mb-4 items-center justify-center bg-grey-lighter">
                            <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border cursor-pointer hover:bg-blue hover:text-indigo-400">
                                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 text-base leading-normal">Select a File</span>
                                <input type='file' class="hidden form-control" name='image' />
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <button 
                                class="px-4 py-2 rounded text-white inline-block shadow-lg bg-blue-500 hover:bg-blue-600 focus:bg-blue-700" 
                                type="submit">Add Product</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>