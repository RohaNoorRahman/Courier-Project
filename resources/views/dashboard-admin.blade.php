<x-master>

    
    <div class="dashboard-bg  w-full">
        
        <div class="bg-secondary-color min-h-[110px] flex px-[30px] justify-between items-center">
            <div class="flex items-center">
                <div class="mr-5">
                    <img src="{{ asset('assets/img/Iconly/profilepic.svg') }}" alt="">
                </div>
                <div class="">
                    <h1 class="text-white font-medium">Welcome back, Ratul Ahmed 👏🏻</h1>
                    <h2 class="text-[#A2A6AA] font-medium">Dashboard</h2>
                </div>
            </div>
            <div>
                <div class="flex items-center bg-white px-5 py-3 bg-opacity-[7%] rounded-full">
                    <a class="mr-5 " href=""><img src="{{ asset('assets/img/Iconly/Light/calendarwhite.svg') }}" alt=""></a>
                    <p class="text-white">Oct 22,2022</p>
                </div>
            </div>
        </div>
        <div class="px-5">
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
        </div>

        <div class="flex px-5">
            <div  class="w-2/5">
                <div class="min-h-[325px] bg-white mb-[22px]">
                    <div class="flex justify-between p-[22px] ">
                        <h1 class="text-black text-lg font-bold w-[250px]">Weekly Transaction Summary</h1>
                        <div class="flex items-center min-w-max bg-white border-2 border-[#F5F5F5] ml-[11px] pr-3 ">
                            <input class="border-none date-ranger " placeholder="last 12 month" type="date" value="Last 12 Month">
                            <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5 2.75H2.5C1.67157 2.75 1 3.42157 1 4.25V13.25C1 14.0784 1.67157 14.75 2.5 14.75H11.5C12.3284 14.75 13 14.0784 13 13.25V4.25C13 3.42157 12.3284 2.75 11.5 2.75Z" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 1.25V4.25" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4 1.25V4.25" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M1 7.25H13" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.25 10.25H7" stroke="#5329FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7 10.25V12.5" stroke="#5329FF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <div id="stackedChart"></div>
                    </div>
                </div>

                <div class="flex items-center justify-between bg-white px-6 py-9 mr-9 w-full">
                    <div class="mr-9">
                        <div class="flex items-center mb-4">
                            <h1 class="mr-2 text-lg font-bold">Income Analysis</h1>
                            <img src="{{ asset('assets/img/Iconly/Light/info-circle.svg') }}" alt="">
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex justify-center items-center">
                                <h1 class="mr-2 text-[36px] font-bold">$8,527,224</h1>
                                <span class="bg-purple-100 p-0.5">+3.1%</span>
                            </div>
                        </div>
                        <h1 class="text-6 font-medium">Expense increased by<span class="text-[#5329FF]">$2.172</span>This Month</h1>
                    </div>
                    <div class="w-full">
                        <div class="chart-bar w-full ">
                            <div class="" id="barChart3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-3/5 mr-5">
                <div class="flex justify-center items-center chart ml-5 w-full h-[500px] bg-white">
                    <div class="w-[450px]" id="chartdonut"></div>
        
                </div>
                <div class="bg-white w-full chart pl-[25px] pt-[19px] ml-5 mt-5 mr-5 pr-[18px]">
                    <div class="flex justify-between items-center mb-5">
                        <h1 class="text-lg font-bold">Recent Shipment History</h1>
                        <div class="flex items-center min-w-max bg-white border-2 border-gray-100 ml-[11px]">
                                    <span class="pl-2">
                                    <img src="/images/icons/Calendar.svg" alt="">
                                    </span>
                            <select class="py-[9px] border-none text-gray-600  focus:ring-0 focus:outline-none w-[140px]" name="" id="">
                                <option>December</option>
                                <option value="Dec">Dec</option>
                                <option value="Asc">Asc</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-5">
                        <table class="w-full table-auto">
                            <thead>
                                <tr class="text-gray-500 font-semibold border-b border-t border-gray-200">
                                    <th class="py-4 text-left">Id</th>
                                    <th class="py-4 text-left">Hub</th>
                                    <th class="py-4 text-left">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white text-gray-600 font-semibold text-[16px] border-b border-gray-200">
                                    <td class="py-4">126802736</td>
                                    <td class="py-4">Hub Manager</td>
                                    <td class="py-4">
                                        <div class="flex">
                                            <div class="flex justify-center border border-green-300 px-3 py-1">
                                                <img src="/images/icons/Tick.svg" alt="" class="mr-2">
                                            <span class="">Delivered</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white text-gray-600 font-semibold text-[16px] border-b border-gray-200">
                                    <td class="py-4">126802736</td>
                                    <td class="py-4">Hub Manager</td>
                                    <td class="py-4">
                                        <div class="flex">
                                            <div class="flex justify-center border border-green-300 px-3 py-1">
                                                <img src="/images/icons/Tick.svg" alt="" class="mr-2">
                                            <span class="">Delivered</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white text-gray-600 font-semibold text-[16px] border-b border-gray-200">
                                    <td class="py-4">126802736</td>
                                    <td class="py-4">Hub Manager</td>
                                    <td class="py-4">
                                        <div class="flex">
                                            <div class="flex justify-center border border-green-300 px-3 py-1">
                                                <img src="/images/icons/Tick.svg" alt="" class="mr-2">
                                            <span class="">Delivered</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <button class="brand-blue my-5 px-4 py-2 text-white font-bold text-[11px]">View All</button>
                    </div>
                </div>
            </div>
            
            
        </div>

        
    </div>
</x-master>
