<div>
    
    <div class="p-2">

            {{-- outermost wrapper --}}
            <div id="dvPrint" class="grid w-full h-full grid-cols-8 font-serif bg-white border-collapse">


                {{-- G1 header part --}}
                <div class="col-span-8 bg-white border-t-4 border-l-4 border-r-4 border-black" id="toPrint">
                    <div class="grid grid-cols-7 bg-white grid-rows-7 ">
                        {{-- logo --}}
                        <div
                            class="flex grid-cols-10 col-span-5 col-start-1 row-span-3 row-start-1 leading-none border-b-2 border-r-2 border-black place-items-center">
                            {{-- <div class="grid grid-cols-10 grid-rows-5 m-2">
                                                <div class="col-span-2 col-start-1 row-span-3 row-start-1 pl-6 text-right">
                                                    <img src="http://sksu.edu.ph/wp-content/uploads/2020/09/512x512-1.png" alt="sksu logo" class="object-scale-down w-20 h-full mx-auto">
                                                </div>
                                                <div class="col-span-3 col-start-1 row-span-2 row-start-1 pl-6 text-right">
                                                    
                                                </div>
                                                <div class="col-span-4 col-start-4 row-span-2 row-start-1 text-left"><span class="text-sm font-bold text-green-600 uppercase">Sultan Kudarat State University</span></div>
                                                <div class="col-span-1 col-start-10 row-span-5 row-start-1 mr-3 ">
                                                
                                                    {!! QrCode::size(100)->margin(2)->generate((string)$dvno_temp); !!}

                                                </div>
                                            </div> --}}
                            <div class="col-span-3 m-2">
                                <div class="text-center">
                                    <img src="http://sksu.edu.ph/wp-content/uploads/2020/09/512x512-1.png"
                                        alt="sksu logo" class="object-scale-down h-full mx-auto w-14">
                                    <span class="text-xs text-center text-black">SKSU Works for Success!</span><br>
                                    {{-- <span class="text-sm font-bold text-center text-black"> ISO 9001:2015</span> --}}
                                </div>
                            </div>
                            <div class="col-span-5 m-2 place-items-center">
                                <div class="ext-left ">
                                    <span class="block text-sm font-bold text-green-600 uppercase">SULTAN KUDARAT STATE
                                        UNIVERSITY</span>
                                    <span class="block text-xs text-black">ACCESS, EJC Montilla, 9800 City of
                                        Tacurong</span>
                                    <span class="block text-xs text-black">Province of Sultan Kudarat</span>
                                </div>
                            </div>
                            <div class="col-span-2 pr-2 m-2">
                                <div class="m-3"> 
                                {!! QrCode::size(80)->margin(2)->backgroundColor(0, 0, 0,0)->generate((string)$dvInfo->dv_tracking_number); !!}
                                <span class="text-sm font-normal flex justify-center">{{$dvInfo->dv_tracking_number}}</span>
                                </div>
                                    
                            </div>
                        </div>
                        {{-- dV --}}
                        <div
                            class="flex col-span-5 col-start-1 row-span-1 row-start-4 text-center border-b-2 border-r-2 border-black">
                            <span class="mx-auto font-sans font-extrabold text-black uppercase text-md">Disbursement
                                Voucher</span>
                        </div>
                        {{-- fund cluster --}}
                        <div class="col-span-2 col-start-6 row-span-2 border-b-2 border-black">
                            <span class="ml-2 font-sans text-sm font-bold text-black uppercase o">Fund Cluster:</span>
                        </div>
                        {{-- Date and DV no --}}
                        <div class="col-span-2 col-start-6 row-span-2 border-b-2 border-black">
                            <div class="grid grid-rows-2 text-left">
                                <div>
                                    <span
                                        class="inline row-span-1 ml-2 font-sans text-sm font-extrabold text-black uppercase">Date:</span>
                                    <span class="inline font-sans text-xs font-extrabold text-black uppercase">{!!
                                        date('M d, Y', strtotime($dvInfo->created_at)) !!}</span>
                                </div>
                                <span class="ml-2 font-sans text-sm font-extrabold text-black uppercase ">DV No.:</span>
                                <span class="mx-auto ml-2 font-sans text-xs font-extrabold text-black uppercase ">DV No
                                    HERE</span>
                            </div>

                        </div>

                        <div class="flex col-span-4 row-span-1 text-right border-b-2 border-r-2 border-black">
                            <span class="flex px-2 text-sm font-semibold text-black border-r border-black">Address:
                            </span>
                            <span class="flex pl-2 my-auto text-xs font-semibold text-black uppercase"> ACCESS
                                CAMPUS</span>
                        </div>
                        <div class="flex col-span-3 row-span-1 text-right border-b-2 border-black">
                            <span class="flex px-2 font-semibold text-black border-r border-black">Mode of
                                Payment:</span>
                            <span class="pl-2 my-auto text-xs font-semibold text-black">{{$modeOfPayment->mode_of_payment}}</span>
                        </div>
                        <div class="flex col-span-3 row-span-1 text-right border-b-2 border-r-2 border-black">
                            <span class="flex px-2 text-sm font-semibold text-black border-r border-black">Payee:
                            </span>
                            <span class="flex pl-2 my-auto text-xs font-semibold text-black uppercase">
                                {{$payee->name}}</span>
                        </div>
                        <div class="flex col-span-2 row-span-1 text-right border-b-2 border-r-2 border-black">
                            <span class="flex px-2 text-xs font-normal text-black border-r border-black">TIN/Employee
                                No.: </span>
                            <span class="pl-2 my-auto text-xs font-semibold text-black"></span>
                        </div>
                        <div class="flex col-span-2 row-span-1 text-right border-b-2 border-black">
                            <span class="flex px-2 text-xs border-r border-black font-normaltext-black">ORS/BURS No.:
                            </span>
                            <span class="pl-2 my-auto text-xs font-semibold text-black"></span>
                        </div>
                        {{-- table for particulars --}}
                        <div class="col-span-8 bg-white">
                            <table class="min-w-full table-fixed ">
                                <thead class="text-sm border-2">
                                    <tr class="bg-gray-300 border-b-2 border-black ">
                                        <th class='w-2/5 uppercase border-r-2 border-black'>Particulars</th>
                                        <th class='w-1/5 text-xs uppercase border-r-2 border-black'>responsibility
                                            center</th>
                                        <th class='w-1/5 uppercase border-r-2 border-black'>mfo/pap</th>
                                        <th class='w-1/5 uppercase'>amount</th>
                                    </tr>
                                </thead>
                                <tbody class="text-xs bg-white border-black">

                                    <tr class="">
                                        <td class="p-2 whitespace-normal bg-blue-200 border-r-2 border-black">
                                            @if(isset($particulars))
                                            @foreach ($particulars as $particular)
                                            {{-- display vertically --}}
                                            <div class="flex flex-col">
                                                <span class="text-xs font-normal text-black">{{$particular->particulars}}</span>
                                                 {{$particular->entry}}
                                            </div>    
                                            @endforeach
                                            @endif
                                        </td>
                                        <td class="border-r-2 border-black ">
                                        @if(isset($particulars))
                                            @foreach ($particulars as $particular)
                                            {{-- display vertically --}}
                                            <div class="flex flex-col">
                                                <span class="text-xs font-normal text-black">{{$particular->particulars}}</span>
                                                 {{$particular->responsibility_center}}
                                            </div>    
                                            @endforeach
                                            @endif
                                            {{-- @if(isset($responsibility_center['0']))
                                            {{$responsibility_center['0']}}
                                            @endif --}}
                                        </td>
                                        <td class="border-r-2 border-black ">
                                        @if(isset($particulars))
                                            @foreach ($particulars as $particular)
                                            {{-- display vertically --}}
                                            <div class="flex flex-col">
                                                <span class="text-xs font-normal text-black">{{$particular->particulars}}</span>
                                                 {{$particular->mfo_pap}}
                                            </div>    
                                            @endforeach
                                            @endif
                                            {{-- @if(isset($mfo_pap['0']))
                                            {{$mfo_pap['0']}}
                                            @endif --}}
                                        </td>
                                        <td class="pr-2 text-right border-black ">
                                        @if(isset($particulars))
                                            @foreach ($particulars as $particular)
                                            {{-- display vertically --}}
                                            <div class="flex flex-col">
                                                <span class="text-xs font-normal text-black">{{$particular->particulars}}</span>
                                                 {{$particular->amount}}
                                            </div>    
                                            @endforeach
                                            @endif
                                            {{-- @if(isset($amount['0']))
                                            {{$amount['0']}}
                                            @endif --}}
                                        </td>
                                    </tr>
                                    {{-- @foreach ($inputs as $key => $value)
                                    <tr class="py-2">
                                        <td class="whitespace-normal bg-blue-200 border-r-2 border-black">
                                            @if(isset($entry[(string)$value]))
                                            {{$entry[(string)$value]}}
                                            @endif
                                        </td>
                                        <td class="border-r-2 border-black ">
                                            @if(isset($responsibility_center[(string)$value]))
                                            {{$responsibility_center[(string)$value]}}
                                            @endif
                                        </td>
                                        <td class="border-r-2 border-black ">
                                            @if(isset($mfo_pap[(string)$value]))
                                            {{$mfo_pap[(string)$value]}}
                                            @endif
                                        </td>
                                        <td class="pr-2 text-right border-black ">
                                            @if(isset($amount[(string)$value]))
                                            {{$amount[(string)$value]}}
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach --}}
                                    <tr class="py-2">
                                        <td class="whitespace-normal bg-blue-400 border-r-2 border-black">
                                            Additional information:
                                        </td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-black"></td>
                                    </tr>
                                    <tr class="py-2">
                                        <td class="whitespace-normal bg-pink-300 border-r-2 border-black">
                                            Status of accountability:

                                        </td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-black"></td>
                                    </tr>
                                    <tr class="py-2">
                                        <td class="whitespace-normal bg-pink-300 border-r-2 border-black">
                                            BTr fidelity bond CLTN:
                                        </td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-black"></td>
                                    </tr>
                                    <tr class="py-2">
                                        <td class="pr-2 whitespace-normal bg-pink-300 border-r-2 border-black">
                                            Period covered:
                                        </td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-r-2 border-black"></td>
                                        <td class="border-b-2 border-black"></td>
                                    </tr>
                                </tbody>
                                <tfoot class="text-xs bg-white border-b-2 border-black ">
                                    <tr>
                                        <td
                                            class="tracking-wide text-left whitespace-normal bg-pink-300 border-b-2 border-r-2 border-black">
                                            Maximum accountability:
                                        </td>
                                        <td class="border-b-2 border-r-2 border-black ">

                                        </td>
                                        <td class="border-b-2 border-r-2 border-black ">

                                        </td>
                                        <td class="pr-2 text-xs text-right border-b border-black">{{$total}}</td>
                                    </tr>
                                </tfoot>

                            </table>
                        </div>
                        {{-- table for particulars end--}}
                        {{-- signatory A--}}
                        <div class="col-span-8 bg-white">
                            <div class="grid grid-cols-5 grid-rows-4 border-b-2 border-black ">
                                <div class="col-span-5 row-span-1 text-sm text-left"><span
                                        class="border-b border-r border-black ">&nbsp;A.&nbsp;</span> Certified:
                                    Expenses/Cash Advance necessary, lawful and incurred under my direct supervision
                                </div>
                                @if(isset($signatory))
                                <div
                                    class="col-span-3 col-start-2 row-span-1 row-start-3 font-bold text-center border-b border-black">
                                    {{$signatory->name}}</div>
                             
                                @endif
                                @if(isset($position))
                                <div class="col-span-3 col-start-2 row-span-1 row-start-4 font-semibold text-center">
                                    @switch($position->position_name)
                                        @case('Registrar')
                                        {{$position->position_name}}
                                            @break
                                        @case('Accountant')
                                        {{$position->position_name}}
                                            @break
                                        @case('Treasurer')
                                        {{$position->position_name}}
                                            @break
                                        @case('University President')
                                        {{$position->position_name}}
                                            @break
                                    
                                        @default
                                        {{$position->position_name}} of {{$department->department_name}}   
                                    @endswitch
                                </div>
                                @endif
                            </div>
                        </div>
                        {{-- signatory A--}}
                        <div class="col-span-8 text-sm border-b-2 border-black">
                            <span class="font-bold border-b border-r border-black ">&nbsp;B.&nbsp;</span>
                            Accounting Entry:
                        </div>
                        {{-- signatory A end--}}

                        {{-- accounting entry --}}
                        <div class="col-span-8">
                            <table class="min-w-full border-b-2 border-collapse border-black table-fixed ">
                                <thead class="">
                                    <tr class="bg-gray-300 border-t border-b-2 border-black ">
                                        <th class='w-3/6 font-bold uppercase border-r-2 border-black'>Account Title</th>
                                        <th class='w-1/6 uppercase border-r-2 border-black '>UACS CODE</th>
                                        <th class='w-1/6 uppercase border-r-2 border-black '>Debit</th>
                                        <th class='w-1/6 uppercase border-black '>Credit</th>
                                    </tr>
                                </thead>
                                <tbody class="border-b-2 border-black">

                                    <tr>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="border-r-2 border-black ">&nbsp;</td>
                                        <td class="">&nbsp;</td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                        {{-- accounting entry end--}}
                        <div class="col-span-8 border-b-2 border-black">
                            <div class="grid grid-cols-6 grid-rows-9">
                                {{-- cd --}}
                                <div
                                    class="col-span-3 col-start-1 row-span-1 row-start-1 border-b-2 border-r-2 border-black">
                                    <span
                                        class="font-bold border-t border-b border-r-2 border-black">&nbsp;C.&nbsp;</span>
                                    Certified:
                                </div>
                                <div class="col-span-3 col-start-4 row-span-1 row-start-1 border-b-2 border-black">
                                    <span
                                        class="font-bold border-t border-b border-r-2 border-black ">&nbsp;D.&nbsp;</span>
                                    Approved for Payment
                                </div>
                                {{-- cd --}}
                                <div
                                    class="col-span-3 col-start-1 row-span-3 row-start-2 text-xs border-b-2 border-r-2 border-black">
                                    <div class="relative flex items-start m-3 ">
                                        <div class="flex items-center h-5">
                                            <input id="comments" aria-describedby="comments-description" name="comments"
                                                type="checkbox"
                                                class="w-4 h-4 text-indigo-600 border-gray-800 rounded focus:ring-indigo-500">
                                        </div>
                                        <div class="my-auto ml-3">
                                            <label for="comments" class="text-xs font-medium text-gray-700">Cash
                                                Available</label>
                                        </div>
                                    </div>
                                    <div class="relative flex items-start m-3">
                                        <div class="flex items-center h-5">
                                            <input id="comments" aria-describedby="comments-description" name="comments"
                                                type="checkbox"
                                                class="w-4 h-4 text-indigo-600 border-gray-800 rounded focus:ring-indigo-500">
                                        </div>
                                        <div class="my-auto ml-3">
                                            <label for="comments" class="text-xs font-medium text-gray-700">Subject to
                                                Authority to Debit Account (when applicable)</label>
                                        </div>
                                    </div>
                                    <div class="relative flex items-start m-3">
                                        <div class="flex items-center h-5">
                                            <input id="comments" aria-describedby="comments-description" name="comments"
                                                type="checkbox"
                                                class="w-4 h-4 text-indigo-600 border-gray-800 rounded focus:ring-indigo-500">
                                        </div>
                                        <div class="my-auto ml-3">
                                            <label for="comments" class="text-xs font-medium text-gray-700">Supporting
                                                documents complete and amount claimed proper</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-span-3 col-start-4 row-span-3 row-start-2 border-b-2 border-black">
                                </div>


                                <div class="col-span-1 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="ml-2">Signature</span>
                                </div>
                                <div class="col-span-2 col-start-2 row-span-1 border-b-2 border-r-2 border-black"></div>

                                <div class="col-span-1 col-start-4 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="ml-2">Signature</span>
                                </div>
                                <div class="col-span-2 col-start-5 row-span-1 border-b-2 border-black"></div>

                                <div class="col-span-1 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="ml-2">Printed Name</span>
                                </div>
                                {{-- accountant name --}}
                                <div
                                    class="col-span-2 col-start-2 row-span-1 text-center border-b border-r-2 border-black">
                                    <span class="text-sm font-semibold uppercase">JESHER Y. PALOMARIA, CPA</span>
                                </div>
                                <div class="col-span-1 col-start-4 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="ml-2">Printed Name</span>
                                </div>
                                <div class="col-span-2 col-start-5 row-span-1 text-center border-b border-black">
                                    <span class="text-sm font-semibold uppercase">ROLANDO F. HECHANOVA, PhD</span>
                                </div>
                                <div class="col-span-1 col-start-1 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="my-auto ml-2">Position</span>
                                </div>
                                <div
                                    class="grid col-span-2 col-start-2 grid-rows-2 row-span-1 text-center border-b-2 border-r-2 border-black">
                                    <div class="col-span-1 text-xs text-center border-b border-black"><span class="">
                                            Accountant</span></div>
                                    <div class="col-span-1 text-xs border-black">Head, Accounting Unit/Authorized
                                        Representative</div>
                                </div>
                                <div class="col-span-1 col-start-4 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="my-auto ml-2">Position</span>
                                </div>
                                <div
                                    class="grid col-span-2 col-start-5 grid-rows-2 row-span-1 text-center border-b-2 border-black">

                                    <div class="col-span-1 text-xs text-center border-b border-black">
                                        <span class=""> University President</span>
                                    </div>
                                    <div class="col-span-1 text-xs border-black">Agency Head/Authorized Representative
                                    </div>
                                </div>
                                <div class="col-span-1 col-start-1 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="ml-2">Date</span>
                                </div>
                                <div
                                    class="col-span-2 col-start-2 row-span-1 text-center border-b-2 border-r-2 border-black">
                                    <span class="font-extrabold"></span>
                                </div>
                                <div class="col-span-1 col-start-4 row-span-1 border-b-2 border-r-2 border-black">
                                    <span class="ml-2">Date</span>
                                </div>
                                <div class="col-span-2 col-start-5 row-span-1 text-center border-b-2 border-black">
                                    <span class="font-extrabold"></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-8 col-span-8 border-black grid-rows-10">
                                <div class="col-span-7 row-span-1 text-xs border border-black">
                                    <span
                                        class="font-bold border-t border-b border-r border-black ">&nbsp;E.&nbsp;</span>
                                    Reciept of Payment
                                </div>
                                <div class="col-span-7 col-start-1 row-span-1 row-start-4 text-xs border-black">
                                    <span class="ml-2">Official Receipt No. & Date/Other Documents</span>
                                </div>

                                <div class="col-span-1 row-span-1 row-start-2 text-xs border border-black "><span
                                        class="ml-2">Check/ADA No. :</span></div>
                                <div class="col-span-1 row-span-1 row-start-3 border border-black text-md"><span
                                        class="ml-2">Signature :</span></div>
                                <div class="col-span-2 col-start-2 row-span-1 row-start-2 border border-black"></div>
                                <div class="col-span-2 col-start-2 row-span-1 row-start-3 border border-black"></div>
                                <div class="col-span-1 col-start-4 row-span-1 row-start-2 border border-black">Date:
                                </div>
                                <div class="col-span-1 col-start-4 row-span-1 row-start-3 border border-black">Date:
                                </div>

                                <div class="col-span-3 col-start-5 row-span-1 row-start-2 text-xs border border-black">
                                    <span class="ml-2">Bank Name & Account Number:</span></div>
                                <div class="col-span-3 col-start-5 row-span-1 row-start-3 text-xs border border-black">
                                    <span class="ml-2">Printed Name:</span></div>

                                <div class="col-span-1 col-start-8 row-span-2 text-sm border border-black"><span
                                        class="ml-2">JEV No.</span></div>
                                <div class="col-span-1 col-start-8 row-span-2 row-start-3 text-sm border border-black">
                                    <span class="ml-2">Date</span></div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="grid grid-cols-9 mt-4">
                <div class="justify-end col-span-3 col-start-1">
                    <a
                        class="block w-full py-2 mt-3 text-lg text-center bg-gray-200 border-gray-300 rounded-lg shadow-sm text-primary-bg hover:bg-primary-bg hover:text-primary-text"
                        href="{{route('department-head')}}"> Back
                    </a>
                </div>
                <div class="justify-end col-span-1 col-start-9 mr-2">
                    <input type="button"
                        class="block w-full py-2 mt-3 text-lg border-gray-300 rounded-lg shadow-sm bg-primary-bg text-secondary-bg-alt hover:bg-primary-text-alt hover:text-primary-bg"
                       
                        onclick="printDiv('dvPrint')" value="Print DV" />
                </div>
            </div>








        </div>

@push('scripts')
        <script>
            function printDiv(divName) {


                var originalContents = document.body.innerHTML;

                var element = document.getElementById("toPrint");

                //element.classList.add("transform");
                //element.classList.add("scale-95");
                var printContents = document.getElementById(divName).innerHTML;


                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;


            }

        </script>
        @endpush
</div>
