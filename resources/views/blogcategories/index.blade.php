<x-app-layout>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <span class="mr-10 py-8"><a href="/blogs">{{ __('Blogs') }}</a></span>
                <span class="text-blue-500 border-blue-500 border-b-4 py-8"><a href="/blogs/categories">{{ __('Category') }}</a></span>
            </h2>
            <a href="/blogs/categories/create"><div title="Add a new blog category" class="general-bg-color text-white font-bold cursor-pointer rounded-full h-12 w-12 flex items-center justify-center">+</div></a>
        </div>
    </x-slot>

    <x-slot name="slot">
        <div class="m-auto px-4">
            <section class="flex items-center justify-center table-section p-4">
                <div class="container">
                    @if(\Session::has("success"))
                        <div class="mt-4">
                            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b relative text-teal-900 px-4 py-3 shadow-md" role="alert">
                                <div class="flex">
                                  <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                  <div>
                                    <p class="font-bold">Success</p>
                                    <p class="text-sm">{{Session::get("success")}}</p>
                                  </div>
                                </div>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                </span>
                              </div>
                        </div>
                    @endif
                    @if(\Session::has("error"))
                        <div class="mt-4">
                            <div class="bg-red-100 border-t-4 border-red-500 rounded-b relative text-red-900 px-4 py-3 shadow-md" role="alert">
                                <div class="flex">
                                  <div class="py-1"><svg class="fill-current h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                  <div>
                                    <p class="font-bold">Error</p>
                                    <p class="text-sm">{{Session::get("error")}}</p>
                                  </div>
                                </div>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                                </span>
                              </div>
                        </div>
                    @endif
                </div>
            </section>
            
            @foreach ($blogcategories as $blogcategory)
                <section class="grid grid-cols-12 mb-20">
                    <div class="col-span-8 border-b-2">
                        <div class="grid grid-cols-12 my-2 ml-4">
                            <div class="flex text-white items-center general-bg-color p-5 col-span-3">Category</div>
                            <div class="col-span-9 p-5 border-2">{{$blogcategory->blog_category}}</div>
                        </div>
                        @livewire('actions-for-blog-category', ['blogcategory' => $blogcategory, 'viewing' => true, 'styleClass' => "text-center mt-5 mb-4 grid grid-cols-12"], key($blogcategory->id))
                    </div>
                </section>
            @endforeach
            
        </div>
    </x-slot>
    
</x-app-layout>