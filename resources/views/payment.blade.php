<x-master>
    <div class="dashboard-bg px-5 w-full">

        {{-- top sprofiection --}}
        <div class="flex my-5 ">
            <div class="bg-white mr-5 chart p-5 w-3/5">
                <div class="flex justify-between ">
                    <h1 class="text-lg font-bold">Total Trends</h1>
                    <div class="flex items-center min-w-max bg-white border-2 border-gray-100 ml-[11px]">
                                <span class="pl-2 pr-1">
                                <img src="{{'assets/img/Iconly/Light'}}/Calendar.svg" alt="">
                                </span>
                        <select class="py-[9px] border-none text-gray-600  focus:ring-0 focus:outline-none w-[140px]"
                                name="" id="">
                            <option>December</option>
                            <option value="Dec">Dec</option>
                            <option value="Asc">Asc</option>
                        </select>
                    </div>
                </div>
                <div class="chartBox">
                    <div id="myChart"></div>
                </div>
            </div>
            <div class="bg-white w-2/5  chart pl-[25px] pt-[19px] pr-[18px]">
                <div class="flex justify-between mb-[5px] ">
                    <h1 class="text-lg font-bold">Profit Sharing</h1>
                    <div class="flex items-center min-w-max bg-white border-2 border-gray-100 ml-[11px]">
                                <span class="pl-2 pr-1">
                                <img src="{{'assets/img/Iconly/Light'}}/Calendar.svg" alt="">
                                </span>
                        <select class="py-[9px] border-none text-gray-600  focus:ring-0 focus:outline-none w-[140px]"
                                name="" id="">
                            <option>December</option>
                            <option value="Dec">Dec</option>
                            <option value="Asc">Asc</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-between items-center mb-5">
                    <div class="w-2/3">
                        <h2 class="text-sm">Bkash, Debit & Credit</h2>
                        <h1 class="text-[32px] font-bold text-gray-900 ">$1,256</h1>
                        <h2 class="text-sm mb-2">+ 1,0% from last month</h2>
                    </div>
                    <div class="chart-bar w-24">
                        <div class="" id="barChart"></div>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="w-2/3">
                        <h2 class="text-sm mb-2">Bkash, Debit & Credit</h2>
                        <h1 class="text-[32px] font-bold text-gray-900 mb-2">$1,256</h1>
                        <h2 class="text-sm mb-2">+ 1,0% from last month</h2>
                    </div>
                    <div class="chart-bar w-24">
                        <div class="" id="barChart2"></div>
                    </div>
                </div>

            </div>
        </div>
        {{-- end top section --}}


        <table class="dashboardTable w-full text-base table-auto text-left border-collapse border-spacing-0">
            <thead>
            <tr class="base-color text-white font-medium mb-1.5">
                <th class="p-[11px]">Booking ID</th>
                <th class="p-[11px]">Payment Id</th>
                <th class="p-[11px]">Name</th>
                <th class="p-[11px]">Date</th>
                <th class="p-[11px]">Type</th>
                <th class="p-[11px] ">Amount</th>
                <th class="p-[11px]"></th>
            </tr>
            </thead>
            <tbody>
                
                <tr class="text-gray-600  font-medium mt-2 border-t-[10px]">
                    <td class="p-[15px] bg-white">126802736</td>
                    <td class="p-[15px] bg-white">#3573257326</td>
                    <td class="p-[15px] bg-white">ratul ahmed</td>
                    <td class="p-[15px] bg-white">12-11-2023</td>
                    <td class="p-[15px] bg-white">Bkash</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-green-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/dollar.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-green-400">59.00</span>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-gray-600 bg-white">
                        <div @click.prevent="optionOpen: true" class="relative"  x-data="{ open: false }">
                            <a href="#" x-on:click="open = ! open">
                                <img src="{{ asset('assets/img/Iconly/Light/3dots.svg') }}" alt="">
                            </a>
                            <div x-show="open" @click.outside="open = false" class="absolute drop-shadow-2xl -top-10 right-12 bg-white min-w-max px-4 py-2">
                                <a class="flex text-blue-600 inline-block gap-1 py-3" href="">
                                    <span class="inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </span>
                                    <p>edit</p>
                                </a>
        
                                <a class="flex text-red-600 inline-block gap-1 " href="">
                                    <span class="inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </span>
                                    <p>delete</p>
                                </a>
        
                            </div>
                        </div>
                    </td>
    
                </tr>
            
                
                <tr class="text-gray-600  font-medium mt-2 border-t-[10px]">
                    <td class="p-[15px] bg-white">126802736</td>
                    <td class="p-[15px] bg-white">#3573257326</td>
                    <td class="p-[15px] bg-white">ratul ahmed</td>
                    <td class="p-[15px] bg-white">12-11-2023</td>
                    <td class="p-[15px] bg-white">Bkash</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-green-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/dollar.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-green-400">59.00</span>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-gray-600 bg-white">
                        <div @click.prevent="optionOpen: true" class="relative"  x-data="{ open: false }">
                            <a href="#" x-on:click="open = ! open">
                                <img src="{{ asset('assets/img/Iconly/Light/3dots.svg') }}" alt="">
                            </a>
                            <div x-show="open" @click.outside="open = false" class="absolute drop-shadow-2xl -top-10 right-12 bg-white min-w-max px-4 py-2">
                                <a class="flex text-blue-600 inline-block gap-1 py-3" href="">
                                    <span class="inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </span>
                                    <p>edit</p>
                                </a>
        
                                <a class="flex text-red-600 inline-block gap-1 " href="">
                                    <span class="inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </span>
                                    <p>delete</p>
                                </a>
        
                            </div>
                        </div>
                    </td>
    
                </tr>
                
                <tr class="text-gray-600  font-medium mt-2 border-t-[10px]">
                    <td class="p-[15px] bg-white">126802736</td>
                    <td class="p-[15px] bg-white">#3573257326</td>
                    <td class="p-[15px] bg-white">ratul ahmed</td>
                    <td class="p-[15px] bg-white">12-11-2023</td>
                    <td class="p-[15px] bg-white">Bkash</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-green-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/dollar.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-green-400">59.00</span>
                            </div>
                        </div>
                    </td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div @click.prevent="optionOpen: true" class="relative"  x-data="{ open: false }">
                            <a href="#" x-on:click="open = ! open">
                                <img src="{{ asset('assets/img/Iconly/Light/3dots.svg') }}" alt="">
                            </a>
                            <div x-show="open" @click.outside="open = false" class="absolute drop-shadow-2xl -top-10 right-12 bg-white min-w-max px-4 py-2">
                                <a class="flex text-blue-600 inline-block gap-1 py-3" href="">
                                    <span class="inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </span>
                                    <p>edit</p>
                                </a>
        
                                <a class="flex text-red-600 inline-block gap-1 " href="">
                                    <span class="inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </span>
                                    <p>delete</p>
                                </a>
        
                            </div>
                        </div>
                    </td>
    
                </tr>
                
                <tr class="text-gray-600  font-medium mt-2 border-t-[10px]">
                    <td class="p-[15px] bg-white">126802736</td>
                    <td class="p-[15px] bg-white">#3573257326</td>
                    <td class="p-[15px] bg-white">ratul ahmed</td>
                    <td class="p-[15px] bg-white">12-11-2023</td>
                    <td class="p-[15px] bg-white">Bkash</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-green-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/dollar.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-green-400">59.00</span>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-gray-600 bg-white">
                        <div @click.prevent="optionOpen: true" class="relative"  x-data="{ open: false }">
                            <a href="#" x-on:click="open = ! open">
                                <img src="{{ asset('assets/img/Iconly/Light/3dots.svg') }}" alt="">
                            </a>
                            <div x-show="open" @click.outside="open = false" class="absolute drop-shadow-2xl -top-10 right-12 bg-white min-w-max px-4 py-2">
                                <a class="flex text-blue-600 inline-block gap-1 py-3" href="">
                                    <span class="inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </span>
                                    <p>edit</p>
                                </a>
        
                                <a class="flex text-red-600 inline-block gap-1 " href="">
                                    <span class="inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </span>
                                    <p>delete</p>
                                </a>
        
                            </div>
                        </div>
                    </td>
    
                </tr>
                
                <tr class="text-gray-600  font-medium mt-2 border-t-[10px]">
                    <td class="p-[15px] bg-white">126802736</td>
                    <td class="p-[15px] bg-white">#3573257326</td>
                    <td class="p-[15px] bg-white">ratul ahmed</td>
                    <td class="p-[15px] bg-white">12-11-2023</td>
                    <td class="p-[15px] bg-white">Bkash</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-green-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/dollar.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-green-400">59.00</span>
                            </div>
                        </div>
                    </td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div @click.prevent="optionOpen: true" class="relative"  x-data="{ open: false }">
                            <a href="#" x-on:click="open = ! open">
                                <img src="{{ asset('assets/img/Iconly/Light/3dots.svg') }}" alt="">
                            </a>
                            <div x-show="open" @click.outside="open = false" class="absolute drop-shadow-2xl -top-10 right-12 bg-white min-w-max px-4 py-2">
                                <a class="flex text-blue-600 inline-block gap-1 py-3" href="">
                                    <span class="inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </span>
                                    <p>edit</p>
                                </a>
        
                                <a class="flex text-red-600 inline-block gap-1 " href="">
                                    <span class="inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </span>
                                    <p>delete</p>
                                </a>
        
                            </div>
                        </div>
                    </td>
    
                </tr>
                
                <tr class="text-gray-600  font-medium mt-2 border-t-[10px]">
                    <td class="p-[15px] bg-white">126802736</td>
                    <td class="p-[15px] bg-white">#3573257326</td>
                    <td class="p-[15px] bg-white">ratul ahmed</td>
                    <td class="p-[15px] bg-white">12-11-2023</td>
                    <td class="p-[15px] bg-white">Bkash</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-green-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/dollar.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-green-400">59.00</span>
                            </div>
                        </div>
                    </td>
                    <td class="p-4 text-gray-600 bg-white">
                        <div @click.prevent="optionOpen: true" class="relative"  x-data="{ open: false }">
                            <a href="#" x-on:click="open = ! open">
                                <img src="{{ asset('assets/img/Iconly/Light/3dots.svg') }}" alt="">
                            </a>
                            <div x-show="open" @click.outside="open = false" class="absolute drop-shadow-2xl -top-10 right-12 bg-white min-w-max px-4 py-2">
                                <a class="flex text-blue-600 inline-block gap-1 py-3" href="">
                                    <span class="inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </span>
                                    <p>edit</p>
                                </a>
        
                                <a class="flex text-red-600 inline-block gap-1 " href="">
                                    <span class="inline-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </span>
                                    <p>delete</p>
                                </a>
        
                            </div>
                        </div>
                    </td>
    
                </tr>
    
            </tbody>
        </table>
    
        {{--        Pagination--}}
        <div class="flex  items-center justify-between mr-5 mt-5">
            <p class="min-w-max text-gray-600">
                Showing Results 10 of 109
            </p>
            <div class="min-w-max flex gap-2 items-center">
                <button class="w-8 h-8 rotate-180 bg-white flex items-center justify-center"><img
                        src="{{ asset('assets/img/Iconly/Light/arrow-right.svg') }}" alt=""></button>
                <p
                    class="w-8 h-8 bg-white border border-gray-100 flex items-center justify-center text-blue-600 text-[10px]">
                    10</p>
                <p class="text-xs text-gray-600">of 128</p>
                <button class="w-8 h-8 bg-white flex items-center justify-center"><img
                        src="{{ asset('assets/img/Iconly/Light/arrow-right.svg') }}" alt=""></button>
            </div>
        </div>
        {{--          End Pagination--}}
    </div>
</x-master>
