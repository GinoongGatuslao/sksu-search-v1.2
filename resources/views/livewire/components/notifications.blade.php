<div class="max-h-screen mt-3 -mx-2 overflow-y-auto bg-white rounded-md h-screen-80 -px-6">
    <ul role="list" class="mx-2 ">
        @if (count($notifs) >0)
            @foreach ($notifs as $notif)
            <button type="button" x-data="{read_status : {{ $notif->read_status }} }" class="w-full text-left group group-hover:cursor-pointer"  wire:click="readNotif('{{ $notif->route_url }}','{{ $notif->id }}')">
                <li class="py-4 pl-3 rounded-md group hover:bg-primary-100" :class="read_status == false ? 'bg-gray-100' : ''">
                    <span class="text-black" >{{ $notif->message }}</span>
                </li>
            </button>
            @endforeach            
        @endif
    </ul>
    @push('scripts')
        <script>
            //Listen for wire event notify
            windows.livewire.on('notify', () => {
                
                const sound = new Audio('./ringtones/notif-pop.wav');
                sound.play();

            })
        </script>
    @endpush
</div>
