<x-master>
    <div class="dashboard-bg py-[28px] pl-5 pr-4 w-full">
        <div class="flex items-center justify-between mb-[13px]">
            <div class="min-w-max">
                <h4 class="font-size-22 text-black font-bold">Vehicle</h4>
                <p class="text-gray-600">109 orders found</p>
            </div>
    
            <div class="min-w-max text-base">
                <div class="flex items-center">
                    <span >Sort By:-</span>
                    <div class="flex items-center min-w-max bg-white border-2 border-gray-100 ml-[11px]">
                                    <span class="pl-2 pr-1">
                                    <img src="{{'assets/img/Iconly/Light'}}/Paper.svg" alt="">
                                    </span>
                        <select class="py-[9px] border-none text-gray-600 focus:ring-0 focus:outline-none w-[140px]"
                                name="" id="">
                            <option>All Orders</option>
                            <option value="Dec">Dec</option>
                            <option value="Asc">Asc</option>
                        </select>
                    </div>
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
                    <div class=" min-w-max base-color ml-[11px]">
    
                        <a class="text-white p-[9px] inline-block" href="">Add New +</a>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>
    
        <table class="dashboardTable w-full text-base table-auto text-left border-collapse border-spacing-0">
            <thead>
            <tr class="base-color text-white font-medium mb-1.5">
                <th class="p-[11px]">Vehicles ID</th>
                <th class="p-[11px]">Name</th>
                <th class="p-[11px]">Address</th>
                <th class="p-[11px]">type</th>
                <th class="p-[11px]">Hub</th>
                <th class="p-[11px] text-center">Status</th>
                <th class="p-[11px]"></th>
            </tr>
            </thead>
            <tbody>
                
                <tr class="text-gray-600  font-medium mt-2 border-t-[10px]">
                    <td class="p-[15px] bg-white">126802736</td>
                    <td class="p-[15px] bg-white">Ratul Ahmed</td>
                    <td class="p-[15px] bg-white">Bheramara, Kushtia, Khulna</td>
                    <td class="p-[15px] bg-white">Admin</td>
                    <td class="p-[15px] bg-white">Bheramara</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-green-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/TickSquare.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-green-400">Active</span>
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
                    <td class="p-[15px] bg-white">Ratul Ahmed</td>
                    <td class="p-[15px] bg-white">Bheramara, Kushtia, Khulna</td>
                    <td class="p-[15px] bg-white">Admin</td>
                    <td class="p-[15px] bg-white">Bheramara</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-green-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/TickSquare.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-green-400">Active</span>
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
                    <td class="p-[15px] bg-white">Ratul Ahmed</td>
                    <td class="p-[15px] bg-white">Bheramara, Kushtia, Khulna</td>
                    <td class="p-[15px] bg-white">Admin</td>
                    <td class="p-[15px] bg-white">Bheramara</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-red-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/CloseSquare.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-red-400">Inactive</span>
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
                    <td class="p-[15px] bg-white">Ratul Ahmed</td>
                    <td class="p-[15px] bg-white">Bheramara, Kushtia, Khulna</td>
                    <td class="p-[15px] bg-white">Admin</td>
                    <td class="p-[15px] bg-white">Bheramara</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-green-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/TickSquare.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-green-400">Active</span>
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
                    <td class="p-[15px] bg-white">Ratul Ahmed</td>
                    <td class="p-[15px] bg-white">Bheramara, Kushtia, Khulna</td>
                    <td class="p-[15px] bg-white">Admin</td>
                    <td class="p-[15px] bg-white">Bheramara</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-red-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/CloseSquare.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-red-400">Inactive</span>
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
                    <td class="p-[15px] bg-white">Ratul Ahmed</td>
                    <td class="p-[15px] bg-white">Bheramara, Kushtia, Khulna</td>
                    <td class="p-[15px] bg-white">Admin</td>
                    <td class="p-[15px] bg-white">Bheramara</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-green-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/TickSquare.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-green-400">Active</span>
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
                    <td class="p-[15px] bg-white">Ratul Ahmed</td>
                    <td class="p-[15px] bg-white">Bheramara, Kushtia, Khulna</td>
                    <td class="p-[15px] bg-white">Admin</td>
                    <td class="p-[15px] bg-white">Bheramara</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-red-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/CloseSquare.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-red-400">Inactive</span>
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
                    <td class="p-[15px] bg-white">Ratul Ahmed</td>
                    <td class="p-[15px] bg-white">Bheramara, Kushtia, Khulna</td>
                    <td class="p-[15px] bg-white">Admin</td>
                    <td class="p-[15px] bg-white">Bheramara</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-green-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/TickSquare.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-green-400">Active</span>
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
                    <td class="p-[15px] bg-white">Ratul Ahmed</td>
                    <td class="p-[15px] bg-white">Bheramara, Kushtia, Khulna</td>
                    <td class="p-[15px] bg-white">Admin</td>
                    <td class="p-[15px] bg-white">Bheramara</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-red-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/CloseSquare.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-red-400">Inactive</span>
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
                    <td class="p-[15px] bg-white">Ratul Ahmed</td>
                    <td class="p-[15px] bg-white">Bheramara, Kushtia, Khulna</td>
                    <td class="p-[15px] bg-white">Admin</td>
                    <td class="p-[15px] bg-white">Bheramara</td>
    
                    <td class="p-4 text-gray-600 bg-white">
                        <div class="flex items-center">
                            <div class="flex items-center border border-green-300 px-2 py-1 min-w-max">
                                <img src="{{ asset('assets/img/Iconly/Light/TickSquare.svg') }}" alt="" class="mr-1">
                                <span class="font-semibold text-green-400">Active</span>
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