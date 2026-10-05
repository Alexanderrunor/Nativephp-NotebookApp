<native:column class="w-full p-4 gap-4 safe-area">

    <native:row class="items-center justify-between">
        <native:button label="← Back" variant="ghost" @press="goBack" />
        <native:text class="text-lg font-bold text-theme-on-surface">
            {{ $isEditing ? 'Edit Note' : 'New Note' }}
        </native:text>
            <native:button
        label="{{ $isEditing ? 'Update' : 'Save' }}"
        @press="save"
    />

    </native:row>


    <native:outlined-text-input
        placeholder="Title"
        native:model="title"
        class="w-full p-3 rounded-xl text-theme-on-surface"
    />





</native:column>
<native:column class="w-full p-3 rounded-xl min-h-[160]">
    <native:bare-text-input
        placeholder="Write your note..."
        native:model="body"
        multiline
        min-lines="6"
        class="w-full"
    />
</native:column>
    {{-- <native:outlined-text-input
        placeholder="Write your note..."
        native:model="body"
        class="w-full  text-theme-on-surface h-48"
        multiline
min-lines="5"
    /> --}}
