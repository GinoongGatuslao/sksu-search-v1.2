<div class="p-5">

    <div class="items-center mx-auto mb-5 text-center">
        <h3 class="font-sans text-4xl font-extrabold text-primary-bg drop-shadow-md">SELECT TRANSACTION</h3>
    </div>

    <ul role="list" class="grid grid-cols-1 gap-3">
        {{-- loop here for type --}}
        @foreach ($types as $type)

        <h3 class="hidden">{{Illuminate\Support\Facades\Hash::make('aasd'.$dv_type_id = $type->id)}}</h3>
        @if($dv_type_id != 1 || $dv_type_id != '1' )

        @php
        if(isset($dv_type_id)){

        $categories = App\Models\DVCategory::where('dv_type_id', '=', $dv_type_id)->get();

        }
        @endphp
        <li class="flex flex-col col-span-1 text-left rounded-md shadow-sm bg-orange-ripe" x-data="{showMe : false}">
            @if($categories->count()>0)
            <div class="flex justify-between min-w-full p-3" x-on:click="showMe = !showMe ">
                <h3 class="my-auto text-xl font-extrabold text-primary-bg">{{$type->dv_type}}</h3>
                <div class="flex">
                    <button> <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 my-auto text-transparent text-primary-bg" id="chevron" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
            </div>
            @else
            <a href="{{route('travel-order', ['id' => $dv_type_id])}}">
                <div class="flex justify-between min-w-full p-3">
                    <h3 class="my-auto text-xl font-extrabold text-primary-bg">{{$type->dv_type}}</h3>
                    <div class="flex">
                        <button> <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-5 h-5 my-auto text-transparent text-primary-bg" id="chevron" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </a>
            @endif


            <div class="p-3 mt-1 mb-1 ml-3 mr-1 rounded-md bg-primary-text " x-cloak x-show="showMe">
                {{-- loop category here --}}

                @foreach ($categories as $category)
                <h3 class="hidden">
                    {{Illuminate\Support\Facades\Hash::make('aasd'.$dv_category_id = App\Models\DVTypeSorter::where('dv_category_id','=', $category->id)->where('sorter','LIKE', '2')->limit(1)->get())}}
                </h3>
                <div x-data="{openCA:false}">
                    {{-- sub cat only a --}}
                    @php
                    if(isset($dv_type_id)){
                    $sub_categories = App\Models\DVSubCategory::where('dv_category_id', '=',
                    $category->id)->get();

                    }
                    @endphp
                    @if($sub_categories->count()==0)
                    <h3 class="p-2 rounded-md text-primary-bg text-md hover:bg-primary-bg hover:text-secondary-text">

                        <a
                            href="{{route('cdv', ['id' => $dv_category_id[0]['id'] , 'sorter' => '2'])}}">{{$category->dv_category}}</a>
                    </h3>
                    <div class="grid flex-col grid-cols-1 p-3 ml-3 rounded-md bg-primary-bg-alt " x-cloak
                        x-show="openCA"></div>
                    @else
                    @php
                    $dv_category_id = App\Models\DVTypeSorter::where('dv_category_id','=',
                    $category->id)->where('sorter','LIKE', '3')->limit(1)->get();
                    @endphp

                    <h3 class="p-2 rounded-md text-primary-bg text-md hover:bg-primary-bg hover:text-secondary-text"
                        x-on:click="openCA = !openCA ">{{$category->dv_category}}</h3>
                    <div class="grid flex-col grid-cols-1 p-3 ml-3 rounded-md bg-primary-bg-alt " x-cloak
                        x-show="openCA">



                        @foreach ($sub_categories as $sub_category)
                        <a href="{{route('cdv', ['id' => $dv_category_id[0]['id'], 'sorter' => '3'])}}"
                            class="p-2 rounded-md text-secondary-text text-md hover:bg-gray-300 hover:text-primary-bg">{{$sub_category->dv_sub_category}}-----{{ $dv_category_id[0]['id']}}</a>
                        {{-- sub cat only a end--}}
                        @endforeach
                    </div>
                    @endif
                </div>
                @endforeach
                {{-- loop category here end--}}
            </div>
        </li>
        @endif
        @endforeach
        {{-- loop here for type  end--}}
    </ul>

</div>
