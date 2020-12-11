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
                        action="{{ route('product.store') }}">
                        <!-- @csrf -->
                        @csrf
                        <div
                        class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4"
                        >
                        Add Product
                        </div>
                        <div class="mb-4">
                        <label
                            class="block text-gray-700 text-sm font-normal mb-2"
                            for="name"
                        >
                            Product Name
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            name="name"
                            v-model="form.name"
                            type="name"
                            required
                            autofocus
                            placeholder="Product Name"
                        />
                        </div>
                        <div class="mb-6">
                        <label
                            class="block text-gray-700 text-sm font-normal mb-2"
                            for="description"
                        >
                            Product Description
                        </label>
                        <textarea 
                            cols="30" 
                            rows="8" 
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
                            placeholder="Product Description"
                            name="description"
                            v-model="form.description">
                        </textarea>
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