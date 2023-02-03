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

        
    </div>
</x-master>
