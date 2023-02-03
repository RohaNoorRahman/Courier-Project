<div class="sidbar">
    <div class="sidebar w-64 h-full flex flex-col border-r-2 justify-between">
        <div class="inline-block">
            <div class="menu pl-9 pt-8">
                <h3 class="text-black font-bold -mx-0.5 uppercase font-base mb-4 ">Menu</h3>
                <ul class="mb-5">
                    <li class="py-3.5 inline flex"><a class="flex" href=""><img src="{{'assets/img/Iconly/Light'}}/dashboard.svg" alt=""><span class="ml-[11px]">Dashboard</span></a></li>
                    <li class="py-4 inline flex "><a class="flex" href="{{route('shipment')}}"><img src="{{'assets/img/Iconly/Light'}}/more.svg" alt=""><span class="ml-[11px] text-purple-600 font-bold">Shipments</span></a></li>
                    <li class="py-4 inline flex"><a class="flex" href="{{route('payment')}}"><img src="{{'assets/img/Iconly/Light'}}/creditcard.svg" alt=""><span class="ml-[11px]">Payments</span></a></li>
                    <li class="py-4 inline flex"><a class="flex" href="{{route('employee')}}"><img src="{{'assets/img/Iconly/Light'}}/Location.svg" alt=""><span class="ml-[11px]">Location</span></a></li>
                </ul>

            </div>
            <div class="menu pl-9 pt-8">
                <h3 class="text-black font-bold -mx-0.5 uppercase font-base mb-4 ">Organization</h3>
                <ul class="mb-5">
                    <li class="py-3.5 inline flex"><a class="flex" href="{{route('employee')}}"><img src="{{'assets/img/Iconly/Light'}}/employee.svg" alt=""><span class="ml-[11px]">Employee</span></a></li>
                    <li class="py-4 inline flex"><a class="flex" href="{{route('vehicle')}}"><img src="{{'assets/img/Iconly/Light'}}/truck.svg" alt=""><span class="ml-[11px]">Vehicles</span></a></li>
                </ul>
            </div>

        </div>

        <div class="inline-block">
            <div class="px-9 pt-8">
                <a href="#" class="bg-[#F9F9F9] p-4 flex gap-4 mb-2.5">
                    <img src="{{'assets/img/Iconly/Light'}}/setting.svg" alt="">
                    Settings
                </a>
                <a href="#" class="bg-[#F9F9F9] p-4 flex gap-4">
                    <img src="{{'assets/img/Iconly/Light'}}/login.svg" alt="">
                    Log Out
                </a>
            </div>

            <p class="border-b dc-header-broder-color -ml-4 my-3.5"></p>
            <div class="flex items-center pl-9 py-5">

                <div class="profile-bg w-[50px] h-[50px] bg-center bg-contain bg-no-repeat rounded-full"><a href=""><img src="{{'assets/img/Iconly/'}}/profilepic.svg" alt=""></a></div>
                <div>
                    <h4 class="text-lg font-medium text-gray-900">Ratul Ahmed</h4>
                    <span class="text-lg text-gray-300">Admin</span>
                </div>
            </div>
        </div>

    </div>
</div>
