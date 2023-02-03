<x-master>
    <div class="dashboard-bg  w-full">
        <div class="bg-[#100937] py-8 pl-9 pr-4 min-h-[206px]">
            <h1 class="text-2xl text-white mb-2">Vehicles</h1>
            <ul class="flex items-center">
                <li  class="mr-[20px] inline-block text-[#A2A6AA] text-sm"><a href="">vehicles</a></li>
                <li class="mr-[20px] inline-block"><img src="{{ asset('assets/img/Iconly/Light/breadcumb-arrow.svg') }}" alt=""></li>
                <li class="text-sm text-white mr-[20px] inline-block"><a href="">add vehicles</a></li>
            </ul>
        </div>

        <div class="bg-white mx-8 px-7 py-7 -mt-[85px]">
            <div class="flex items-center mb-7">
                <h1 class="mr-2 text-lg font-bold">Add Vehicles</h1>
                <img src="{{ asset('assets/img/Iconly/Light/info-circle.svg') }}" alt="">
            </div>

            <div class="">
                <form class="w-full min-w-max">
                    <div class="w-full mb-8 ">
                        <label class="block  tracking-wide text-gray-500 text-xs font-bold mb-2" for="grid-first-name">Add Driver Name</label>
                        <input class="appearance-none block text-black font-semibold placeholder:text-black font-semibold w-full text-black font-semibold border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white h-[60px]" id="grid-first-name" type="text" placeholder="Ratul Ahmed">
                    </div>
                    
                    <div class="w-full mb-8 ">
                        <label class="block  tracking-wide text-gray-500 text-xs font-bold mb-2" for="grid-email">Driver  Email  Address</label>
                        <input class="appearance-none block text-black font-semibold placeholder:text-black font-semibold w-full text-black font-semibold border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white h-[60px]" id="grid-email" type="text" placeholder="rahmed357@gmail.com">
                    </div>

                    <div class="flex -mx-3 mb-8">
                      <div class="w-full md:w-1/2 px-3 ">
                        <label class="block  tracking-wide text-gray-500 text-bold text-xs font-bold mb-2" for="grid-first-name">Driver ID</label>
                        <input class="appearance-none block text-black font-semibold placeholder:text-black font-semibold w-full text-bold border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white h-[60px]" id="grid-first-name" type="text" placeholder="248438635">
                      </div>
                      <div class="w-full md:w-1/2 px-3">
                        <label class="block  tracking-wide  text-gray-500 text-bold text-xs font-bold mb-2" for="grid-last-name">Delivery Address</label>
                        <input class="appearance-none block text-black font-semibold placeholder:text-black font-semibold w-full text-bold border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white h-[60px]" id="grid-last-name" type="text" placeholder="126802736">
                      </div>
                    </div>

                    <div class="w-full mb-8">
                        <label class="block  tracking-wide text-xs  text-gray-500 font-bold mb-2" for="grid-state">Hub</label>
                        <div class="relative">
                          <select class="appearance-none block w-full text-black font-semibold font-semibold border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white h-[60px]" id="grid-state">
                            <option>Bheramara</option>
                            <option>Faridpur</option>
                            <option>Dhaka</option>
                          </select>
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-wrap -mx-3 mb-8 border-b border-[#EDF1F3]">
                            <div class="w-full md:w-1/3 px-3 mb-8">
                                <label class="block  tracking-wide text-gray-500 text-bold text-xs font-bold mb-2" for="grid-state">Date</label>
                                <div class="relative">
                                  <select class="appearance-none block w-full text-black font-semibold text-bold border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white h-[60px]" id="grid-state">
                                    <option>1 February 2023</option>
                                    <option>2 February 2023</option>
                                    <option>3 February 2023</option>
                                  </select>
                            </div>
                        </div>
    
                        <div class="w-full md:w-1/3 px-3 mb-8">
                            <label class="block  tracking-wide text-gray-500 text-bold text-xs font-bold mb-2" for="grid-state">Address</label>
                            <div class="relative">
                              <select class="appearance-none block text-black font-semibold w-full text-bold border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white h-[60px]" id="grid-state">
                                <option>Kustia, Bheramara</option>
                                <option>Kustia, Bheramara</option>
                                <option>Kustia, Bheramara</option>
                              </select>
                            </div>
                        </div>
    
                        <div class="w-full md:w-1/3 px-3 mb-8">
                            <label class="block  tracking-wide text-gray-500 text-bold text-xs font-bold mb-2" for="grid-state">Status</label>
                            <div class="relative">
                              <select class="appearance-none block w-full text-black font-semibold text-bold border border-[#DCE4E8] py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white h-[60px]" id="grid-state">
                                <option>Delivered</option>
                                <option>Delivered</option>
                                <option>Delivered</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-8">
                         <button class="px-8 text-white font-bold py-3 base-color mr-6">Add Shipments</button>
                         <a  class="px-8 py-3 bg-white text-[#1A1C1E] font-bold border border-[#ACB5BB]" href="">cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master>
