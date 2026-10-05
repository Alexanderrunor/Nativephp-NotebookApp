<native:top-bar title="Counter">

    <native:top-bar-action
        id="back"
        icon="home"
        label="Settings"
        @navigate='/'
    />
</native:top-bar>
<native:column class="flex-1 items-center justify-center gap-6 p-6">

    <native:text class="text-4xl text-white font-bold">
        {{ $count }}
    </native:text>

    <native:row class="gap-4">
        <native:button label="−" @press="decrement" />
        <native:button label="+" @press="increment" />
    </native:row>
    <native:pressable @navigate='/counter' class="px-6 py-3 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold rounded-lg shadow-md hover:from-blue-600 hover:to-purple-700 hover:shadow-xl transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-opacity-75 transition-all duration-300 ease-in-out active:scale-95">
    <native:text >Counters</native:text>
</native:pressable>

</native:column>
<native:bottom-nav label-visibility="labeled">
    <native:bottom-nav-item
        id="home"
        icon="home"
        label="Home"
        @navigate='/'
    />
    <native:bottom-nav-item
        id="counter"
        icon="add"
        label="Counter"
        :active="true"

    />
    <native:bottom-nav-item
        id="profile"
        icon="person"
        label="Profile"
        url="/profile"
        badge="3"
    />
</native:bottom-nav>
