<native:top-bar title="Dashboard" subtitle="Welcome back">
    {{-- <native:top-bar-action id="search" label="Search" icon="search" @tap="openSearch" /> --}}
    <native:top-bar-action id="settings" icon="settings" label="Settings" @press="openSettings"/>
</native:top-bar>
<native:scroll-view class="w-full ">

@foreach ($notes as $note)
    <native:column @tap="openEdit({{ $note->id }})" class="w-full p-4 rounded-xl">
        <native:row class="gap-3 justify-between">
            <native:pressable>
                <native:column class="gap-1">
                    <native:text class="text-base font-semibold">
                    </native:text>
                    <native:text class="font-semibold text-theme-on-surface">
                        {{ Str::limit($note->title, 80) }}
                    </native:text>
                </native:column>
            </native:pressable>
            {{-- <native:button label="Delete" variant="destructive" @press="delete({{ $note->id }})" /> --}}
            <native:pressable class=" p-4 rounded-xl bg-theme-surface border border-theme-outline" @press="delete({{ $note->id }})">
                <native:icon name="delete" :size="24" color="#E43636" />
            </native:pressable>


        </native:row>


    </native:column>
    <native:divider />
@endforeach
</native:scroll-view>

<native:fab icon="add" @press="openCreate"  />
