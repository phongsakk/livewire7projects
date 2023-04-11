<nav class="flex bg-slate-700 text-white">
    <a href="{{ route('counter') }}"
        class="cursor-pointer py-4 px-6 hover:bg-slate-800{{ request()->routeIs('counter') ? ' bg-slate-800' : null }}">
        Counter
    </a>
    <a href="{{ route('calculator') }}"
        class="cursor-pointer py-4 px-6 hover:bg-slate-800{{ request()->routeIs('calculator') ? ' bg-slate-800' : null }}">
        Calculator
    </a>
    <a href="{{ route('todo-list') }}"
        class="cursor-pointer py-4 px-6 hover:bg-slate-800{{ request()->routeIs('todo-list') ? ' bg-slate-800' : null }}">
        Todo List
    </a>
    <a href="{{ route('cascading-dropdown') }}"
        class="cursor-pointer py-4 px-6 hover:bg-slate-800{{ request()->routeIs('cascading-dropdown') ? ' bg-slate-800' : null }}">
        Cascading Dropdown
    </a>
    <a href="{{ route('products') }}"
        class="cursor-pointer py-4 px-6 hover:bg-slate-800{{ request()->routeIs('products') ? ' bg-slate-800' : null }}">
        Products
    </a>
    <a href="{{ route('image-upload') }}"
        class="cursor-pointer py-4 px-6 hover:bg-slate-800{{ request()->routeIs('image-upload') ? ' bg-slate-800' : null }}">
        Image Upload
    </a>
    <a href="{{ route('register') }}"
        class="cursor-pointer py-4 px-6 hover:bg-slate-800{{ request()->routeIs('register') ? ' bg-slate-800' : null }}">
        Register
    </a>
</nav>
