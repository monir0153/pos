<x-layouts.app>
    <div class="flex justify-between my-10 mx-8 h-screen bg-slate-100">
        <div class=" w-4/6 me-7">
            <div class="">
                <div class="flex justify-between">
                    <div>
                        <p class="text-2xl font-bold">Company Name</p>
                        <p class="text-base ">{{ date("D, F-d-y")}}</p>
                    </div>
                    <div class=" w-3/5"><!-- component -->
                        {{-- search bar --}}
                        <div class=''>
                            <div class=" relative flex items-center w-full h-12 rounded-lg border border-solid border-blue-600 focus-within:shadow-lg bg-white overflow-hidden">
                                <div class="grid place-items-center h-full w-12 text-gray-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                        
                                <input
                                class="peer h-full w-full outline-none text-sm text-gray-700 pr-2"
                                type="text"
                                id="search"
                                placeholder="Search something.." /> 
                            </div>
                        </div>
                        {{-- search bar end --}}
                    </div>
                    
                </div>
                <div class=" text-center scroll-smooth overflow-x-auto "> 
                    {{-- <p class="text-xl bg-white text-start"> Category Item</p> --}}
                    <ul class="flex mt-2 border-b border-solid border-gray-300">
                        <li class="bg-white text-black  me-2 px-2 py-2 border-white border-b border-b-2 border-solid hover:border-blue-700 duration-200">All</li>
                        <li class="bg-white text-black  mx-2 px-2 py-2 border-white border-b-2 border-solid hover:border-blue-700 duration-200">Coffe</li>
                        <li class="bg-white text-black  mx-2 px-2 py-2 border-white border-b-2 border-solid hover:border-blue-700 duration-200">Mango</li>
                        <li class="bg-white text-black  mx-2 px-2 py-2 border-white  border-b-2 border-solid hover:border-blue-700  duration-200">Banana</li>
                                    
                    </ul>
                </div>
            </div>
            
            <div class="grid gap-4 my-4 ">

                
                <div class="col-span-2">
                    {{-- <p class="text-xl bg-white text-black border-solid border-2 px-6 py-3 rounded-lg border-blue-700  shadow-lg mb-3">product</p> --}}
                    <div class="h-screen">

                        <div class="scroll-smooth h-screen overflow-y-scroll">

                            <div class="grid gap-5 grid-cols-2">
                                {{-- product --}}
                                @for ($i = 0; $i <15; $i++)
                                <div class="flex flex-col bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl ">
                                    <img class="p-3 m-3 object-cover rounded-lg h-24 bg-slate-100 md:w-28 " src="https://cdn.pixabay.com/photo/2017/01/20/15/06/oranges-1995056_960_720.jpg" alt="">
                                    <div class="w-full">
                                        <h5 class="text-xl mt-2 text-start font-bold tracking-tight text-gray-900">Noteworthy 1</h5>
                                        <p class=" text-gray-500 text-start">$: 3800</p>
                                        <div id="#">
                                            <p class="mt-1 text-start text-gray-500 text-sm font-medium">VARIENT</p>
                                            <input type="checkbox" id="s" class="p-3"><label class="p-2" for="s">S</label>
                                            <input type="checkbox" id="m" class="p-3"><label class="p-2" for="m">M</label>
                                            <input type="checkbox" id="l" class="p-3"><label class="p-2" for="l">L</label>
                                        </div>
                                        <div class="flex items-end justify-end">

                                            <a href="#" class="font-semibold text-sm border border-solid border-purple-500 rounded-xl px-4 py-1 my-3 me-4 ">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                                
                                {{-- product end --}}
                                
                               
                                
                            </div>
                            
                        </div>

                        {{-- Variation start --}}
                        {{-- <div class="w-2/5">
                        <p class=" text-base bg-white text-black border-solid border-2 px-6 py-3 rounded-t-md border-blue-700  shadow-lg mb-3 ">Variation</p>
                        
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-900 uppercase bg-gray-50 dark:bg-gray-200 dark:text-gray-900">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b bg-gray-100">
                                        
                                        <td class="px-6 py-4">
                                            <input type="checkbox" name="" id="check" class="">
                                            <label for="check">silver</label>
                                        </td>
                                        <td class="px-6 py-4">
                                            $2999
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b bg-gray-100">
                                        
                                        <td class="px-6 py-4">
                                            <input type="checkbox" name="" id="check" class="">
                                            <label for="check">silver</label>
                                        </td>
                                        <td class="px-6 py-4">
                                            $2999
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b bg-gray-100">
                                        
                                        <td class="px-6 py-4">
                                            <input type="checkbox" name="" id="check" class="">
                                            <label for="check">silver</label>
                                        </td>
                                        <td class="px-6 py-4">
                                            $2999
                                        </td>
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-900 uppercase bg-gray-50 dark:bg-gray-200 dark:text-gray-900">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            qty
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b bg-gray-100">
                                        
                                        <td class="px-6 py-4">
                                            <input type="checkbox" name="" id="check" class="">
                                            <label for="check">silver</label>
                                        </td>
                                        <td class="px-6 py-4">
                                            <input type="checkbox" name="" id="check" class="">
                                            <label for="check">silver</label>
                                        </td>
                                        <td class="px-6 py-4">
                                            $2999
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

                        
                        </div> --}}
                        {{-- <div class="w-1/4">
                        <p class=" text-base bg-white text-black border-solid border-2 px-6 py-3 rounded border-blue-700  shadow-lg mb-3">Customer</p>
                        </div> --}}

                    </div>
                </div>
                
                
                    
            </div>
        </div>


    {{-- Selling or ORder list --}}
        <div class="w-2/6 rounded-md font-bold h-screen scroll-smooth  overflow-scroll scroll-bar-w-0">
            {{-- <p class="text-xl bg-white text-black border-solid border-2 px-6 py-3 rounded border-blue-700  shadow-lg mb-3">selling</p> --}}
            
            <div class=" scroll-smooth overflow-y-auto">
                {{-- ORder lsit --}}
                <div class="rounded-xl bg-white ps-3">
                    <p class="text-2xl font-bold">Order list</p>
                    <p class="mt-1 text-start text-gray-500 text-sm font-medium">#INVOICE NO</p>
                    <p class="mt-1 text-start text-gray-500 text-lg font-bold">Items</p>

                    {{-- item list --}}
                    @for ($p= 0; $p <9; $p++) 
                    <div class="bg-white rounded-xl my-4 me-2 p-4 border border-solid border-gray-400">
                        <div class="flex justify-between">
                            <p class="mt-1 text-start text-gray-700 text-lg font-medium">Indomie noddles extra</p>
                            <div>
                                <button class="p-2 border border-solid rounded-lg">-</button>
                                <input type="number" class="p-2 text-center w-12 border border-solid rounded-lg" name="" id="" value="7">
                                <button class="p-2 border border-solid rounded-lg">+</button>
                            </div>
                        </div>
                        <div id="#">
                            <p class="mt-1 text-start text-gray-500 text-sm font-medium inline">VARIENT</p>
                            <label class="p-2" for="m">M</label>
                        </div>
                        <p class=" text-gray-500 text-start">$: 3800</p>
                    </div>
                    @endfor
                    {{-- item list end --}}

                </div>
                {{-- ORder lsit End --}}


            </div>
        </div>
    </div>
    

</x-layouts.app>