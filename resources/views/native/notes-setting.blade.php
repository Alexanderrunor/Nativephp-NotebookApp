<native:top-bar title="Settings">
    {{-- <native:top-bar-action id="search" label="Search" icon="search" @tap="openSearch" /> --}}
    <native:top-bar-action icon="home" @press="goHome" />
</native:top-bar>
<native:spacer class="h-2 flex-grow-0" />

<native:column class="w-full p-6 rounded-2xl bg-theme-surface gap-3">

        <native:column class="gap-1">
            <native:text class="text-2xl font-bold text-white">
                Update Name
            </native:text>


            <native:text class="text-sm text-gray-400 "native:model="email">
                Drop your email. No spam, ever.
            </native:text>
        </native:column>

        <native:bare-text-input
            placeholder="you@example.com"
            keyboard="email"
            native:model="email"
            class="w-full p-4 rounded-xl bg-[#3a3c3b] text-white"
            color="#ffffff"
        />

        <native:pressable
            @tap="submit"
            class="w-full py-4 rounded-xl bg-[#9f3c16] items-center"
        >
            <native:text class="text-base font-semibold text-white">
                Request access →
            </native:text>
        </native:pressable>

    </native:column>
<native:spacer class="h-2 flex-grow-0" />

{{-- Danger Zone --}}
<native:column class="w-full p-4 rounded-xl border bg-theme-surface gap-3">

    <native:row class="items-center gap-2">
        <native:icon name="warning" size="20" color="#F05454" />
        <native:text class="text-base font-semibold " color="#F05454">
            Danger Zone
        </native:text>
    </native:row>

    <native:text class="text-sm leading-relaxed" color="#F05454">
        Permanently delete all notes. This action cannot be undone.
    </native:text>

    <native:button
        label="Delete all notes"
        variant="destructive"
        @press="confirmDeleteAll"
    />

</native:column>

