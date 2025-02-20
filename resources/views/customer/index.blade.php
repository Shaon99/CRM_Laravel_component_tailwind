@extends('layouts.app')

@section('content')
    <div class="bg-white border rounded-2xl border-zinc-200 dark:border-white/10 dark:bg-zinc-900">
        <div class="px-2 py-4 overflow-x-auto">        
            <x-button href="{{ route('customers.create') }}" icon="heroicon-o-plus">
                Add Customer
            </x-button>
            
            <div class="flex justify-center m-auto">
                <div class="w-full overflow-x-auto lg:px-2">
                    <div>
                        <div class="overflow-x-auto">
                            <table
                                class="w-full divide-y text-zinc-800 divide-zinc-800/10 dark:divide-white/20 whitespace-nowrap">
                                <thead>
                                    <tr>
                                        <th class="py-3 px-3 first:pl-0 last:pr-0 text-left text-sm font-medium text-zinc-800 dark:text-white  last:[&amp;_[data-flux-table-sortable]]:mr-0"
                                            data-flux-column="">
                                            <div class="flex group-[]/right-align:justify-end">Customer</div>
                                        </th>
                                        <th class="py-3 px-3 first:pl-0 last:pr-0 text-left text-sm font-medium text-zinc-800 dark:text-white  last:[&amp;_[data-flux-table-sortable]]:mr-0"
                                            wire:click="sort('date')" data-flux-column="">
                                            <div class="flex group-[]/right-align:justify-end">
                                                <button type="button"
                                                    class="group/sortable flex items-center gap-1 -my-1 -ml-2 -mr-2 px-2 py-1  group-[]/right-align:flex-row-reverse group-[]/right-align:-mr-2 group-[]/right-align:-ml-8"
                                                    data-flux-table-sortable="">
                                                    <div>Date</div>

                                                    <div
                                                        class="rounded text-zinc-400 group-hover/sortable:text-zinc-800 dark:group-hover/sortable:text-white">
                                                        <!--[if BLOCK]><![endif]--> <!--[if BLOCK]><![endif]--> <svg
                                                            class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon=""
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                                            <path fill-rule="evenodd"
                                                                d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>

                                                        <!--[if ENDBLOCK]><![endif]-->
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                </button>
                                            </div>
                                        </th>
                                        <th class="py-3 px-3 first:pl-0 last:pr-0 text-left text-sm font-medium text-zinc-800 dark:text-white  last:[&amp;_[data-flux-table-sortable]]:mr-0"
                                            wire:click="sort('status')" data-flux-column="">
                                            <div class="flex group-[]/right-align:justify-end">
                                                <button type="button"
                                                    class="group/sortable flex items-center gap-1 -my-1 -ml-2 -mr-2 px-2 py-1  group-[]/right-align:flex-row-reverse group-[]/right-align:-mr-2 group-[]/right-align:-ml-8"
                                                    data-flux-table-sortable="">
                                                    <div>Status</div>

                                                    <div
                                                        class="rounded text-zinc-400 group-hover/sortable:text-zinc-800 dark:group-hover/sortable:text-white">
                                                        <!--[if BLOCK]><![endif]-->
                                                        <div class="opacity-0 group-hover/sortable:opacity-100">
                                                            <svg class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon=""
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                fill="currentColor" aria-hidden="true" data-slot="icon">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>

                                                        </div>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                </button>
                                            </div>
                                        </th>
                                        <th class="py-3 px-3 first:pl-0 last:pr-0 text-left text-sm font-medium text-zinc-800 dark:text-white  last:[&amp;_[data-flux-table-sortable]]:mr-0"
                                            wire:click="sort('amount_float')" data-flux-column="">
                                            <div class="flex group-[]/right-align:justify-end">
                                                <button type="button"
                                                    class="group/sortable flex items-center gap-1 -my-1 -ml-2 -mr-2 px-2 py-1  group-[]/right-align:flex-row-reverse group-[]/right-align:-mr-2 group-[]/right-align:-ml-8"
                                                    data-flux-table-sortable="">
                                                    <div>Amount</div>

                                                    <div
                                                        class="rounded text-zinc-400 group-hover/sortable:text-zinc-800 dark:group-hover/sortable:text-white">
                                                        <!--[if BLOCK]><![endif]-->
                                                        <div class="opacity-0 group-hover/sortable:opacity-100">
                                                            <svg class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon=""
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                                                fill="currentColor" aria-hidden="true" data-slot="icon">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>

                                                        </div>
                                                        <!--[if ENDBLOCK]><![endif]-->
                                                    </div>
                                                </button>
                                            </div>
                                        </th>
                                        <th class="py-3 px-3 first:pl-0 last:pr-0 text-left text-sm font-medium text-zinc-800 dark:text-white  last:[&amp;_[data-flux-table-sortable]]:mr-0"
                                            data-flux-column="">
                                            <div class="flex group-[]/right-align:justify-end"></div>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody
                                    class="divide-y divide-zinc-800/10 dark:divide-white/20 [&amp;:not(:has(*))]:!border-t-0"
                                    data-flux-rows="">
                                    <!--[if BLOCK]><![endif]-->
                                    <tr wire:key="table-415" data-flux-row="">
                                        <td class="flex items-center gap-3 px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <div class="overflow-hidden rounded size-6" data-flux-avatar="">
                                                <img src="https://i.pravatar.cc/100?img=13" alt="">
                                            </div>

                                            Gustavo Mango
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300 whitespace-nowrap"
                                            data-flux-cell="">
                                            Jul 31, 9:50 AM
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <div data-flux-badge="data-flux-badge"
                                                class="inline-flex items-center font-medium whitespace-nowrap -mt-1 -mb-1 [print-color-adjust:exact] text-xs py-1 [&amp;_[data-flux-badge-icon]]:size-3 [&amp;_[data-flux-badge-icon]]:mr-1 rounded-md px-2 text-green-800 [&amp;_button]:!text-green-800 dark:text-green-200 [&amp;_button]:dark:!text-green-200 bg-green-400/20 dark:bg-green-400/40 [&amp;:is(button)]:hover:bg-green-400/30 [&amp;:is(button)]:hover:dark:bg-green-400/50">
                                                Paid
                                            </div>
                                        </td>
                                        <td class="px-3 py-3 text-sm font-medium first:pl-0 last:pr-0 text-zinc-800 dark:text-white"
                                            data-flux-cell="">
                                            $162.00
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <ui-dropdown position="bottom end" offset="-25" data-flux-dropdown="">
                                                <button type="button"
                                                    class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-8 text-sm rounded-md w-8 inline-flex -mt-1.5 -mb-1.5 bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white"
                                                    data-flux-button="data-flux-button" aria-haspopup="true"
                                                    aria-controls="lofi-dropdown-1bed76cc0958d" aria-expanded="false">
                                                    <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon=""
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                                        <path
                                                            d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z">
                                                        </path>
                                                    </svg>
                                                </button>

                                                <ui-menu
                                                    class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-none"
                                                    popover="manual" data-flux-menu="" id="lofi-dropdown-1bed76cc0958d"
                                                    role="menu" tabindex="-1">
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-422bcc59fa55c" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path fill-rule="evenodd"
                                                                d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm2.25 8.5a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 3a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        View invoice
                                                    </button>
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-1b6d45d59adc5" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path fill-rule="evenodd"
                                                                d="M4.93 2.31a41.401 41.401 0 0 1 10.14 0C16.194 2.45 17 3.414 17 4.517V17.25a.75.75 0 0 1-1.075.676l-2.8-1.344-2.8 1.344a.75.75 0 0 1-.65 0l-2.8-1.344-2.8 1.344A.75.75 0 0 1 3 17.25V4.517c0-1.103.806-2.068 1.93-2.207Zm4.822 3.997a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 0 0 1.004-1.114L8.704 8.75h1.921a1.875 1.875 0 0 1 0 3.75.75.75 0 0 0 0 1.5 3.375 3.375 0 1 0 0-6.75h-1.92l1.047-.943Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        Refund
                                                    </button>
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:text-red-600 data-[active]:bg-red-50 dark:text-white dark:data-[active]:bg-red-400/20 dark:data-[active]:text-red-400 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-c874432265cc1" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path
                                                                d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M2 7.5h16l-.811 7.71a2 2 0 0 1-1.99 1.79H4.802a2 2 0 0 1-1.99-1.79L2 7.5ZM7 11a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        Archive
                                                    </button>
                                                </ui-menu>
                                            </ui-dropdown>
                                        </td>
                                    </tr>
                                    <tr wire:key="table-421" data-flux-row="">
                                        <td class="flex items-center gap-3 px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <div class="overflow-hidden rounded size-6" data-flux-avatar="">
                                                <img src="https://i.pravatar.cc/100?img=7" alt="">
                                            </div>

                                            Desirae George
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300 whitespace-nowrap"
                                            data-flux-cell="">
                                            Jul 31, 12:08 PM
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <div data-flux-badge="data-flux-badge"
                                                class="inline-flex items-center font-medium whitespace-nowrap -mt-1 -mb-1 [print-color-adjust:exact] text-xs py-1 [&amp;_[data-flux-badge-icon]]:size-3 [&amp;_[data-flux-badge-icon]]:mr-1 rounded-md px-2 text-green-800 [&amp;_button]:!text-green-800 dark:text-green-200 [&amp;_button]:dark:!text-green-200 bg-green-400/20 dark:bg-green-400/40 [&amp;:is(button)]:hover:bg-green-400/30 [&amp;:is(button)]:hover:dark:bg-green-400/50">
                                                Paid
                                            </div>
                                        </td>
                                        <td class="px-3 py-3 text-sm font-medium first:pl-0 last:pr-0 text-zinc-800 dark:text-white"
                                            data-flux-cell="">
                                            $32.00
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <ui-dropdown position="bottom end" offset="-25" data-flux-dropdown="">
                                                <button type="button"
                                                    class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-8 text-sm rounded-md w-8 inline-flex -mt-1.5 -mb-1.5 bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white"
                                                    data-flux-button="data-flux-button" aria-haspopup="true"
                                                    aria-controls="lofi-dropdown-4c0960e477b9e" aria-expanded="false">
                                                    <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon=""
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                                        <path
                                                            d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z">
                                                        </path>
                                                    </svg>
                                                </button>

                                                <ui-menu
                                                    class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-none"
                                                    popover="manual" data-flux-menu="" id="lofi-dropdown-4c0960e477b9e"
                                                    role="menu" tabindex="-1">
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-7fe63d59fea42" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path fill-rule="evenodd"
                                                                d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm2.25 8.5a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 3a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        View invoice
                                                    </button>
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-17203d416431d" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path fill-rule="evenodd"
                                                                d="M4.93 2.31a41.401 41.401 0 0 1 10.14 0C16.194 2.45 17 3.414 17 4.517V17.25a.75.75 0 0 1-1.075.676l-2.8-1.344-2.8 1.344a.75.75 0 0 1-.65 0l-2.8-1.344-2.8 1.344A.75.75 0 0 1 3 17.25V4.517c0-1.103.806-2.068 1.93-2.207Zm4.822 3.997a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 0 0 1.004-1.114L8.704 8.75h1.921a1.875 1.875 0 0 1 0 3.75.75.75 0 0 0 0 1.5 3.375 3.375 0 1 0 0-6.75h-1.92l1.047-.943Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        Refund
                                                    </button>
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:text-red-600 data-[active]:bg-red-50 dark:text-white dark:data-[active]:bg-red-400/20 dark:data-[active]:text-red-400 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-34bf26b8f2258" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path
                                                                d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M2 7.5h16l-.811 7.71a2 2 0 0 1-1.99 1.79H4.802a2 2 0 0 1-1.99-1.79L2 7.5ZM7 11a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        Archive
                                                    </button>
                                                </ui-menu>
                                            </ui-dropdown>
                                        </td>
                                    </tr>
                                    <tr wire:key="table-405" data-flux-row="">
                                        <td class="flex items-center gap-3 px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <div class="overflow-hidden rounded size-6" data-flux-avatar="">
                                                <img src="https://i.pravatar.cc/100?img=23" alt="">
                                            </div>

                                            Emery Madsen
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300 whitespace-nowrap"
                                            data-flux-cell="">
                                            Jul 31, 11:50 AM
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <div data-flux-badge="data-flux-badge"
                                                class="inline-flex items-center font-medium whitespace-nowrap -mt-1 -mb-1 [print-color-adjust:exact] text-xs py-1 [&amp;_[data-flux-badge-icon]]:size-3 [&amp;_[data-flux-badge-icon]]:mr-1 rounded-md px-2 text-green-800 [&amp;_button]:!text-green-800 dark:text-green-200 [&amp;_button]:dark:!text-green-200 bg-green-400/20 dark:bg-green-400/40 [&amp;:is(button)]:hover:bg-green-400/30 [&amp;:is(button)]:hover:dark:bg-green-400/50">
                                                Paid
                                            </div>
                                        </td>
                                        <td class="px-3 py-3 text-sm font-medium first:pl-0 last:pr-0 text-zinc-800 dark:text-white"
                                            data-flux-cell="">
                                            $163.00
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <ui-dropdown position="bottom end" offset="-25" data-flux-dropdown="">
                                                <button type="button"
                                                    class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-8 text-sm rounded-md w-8 inline-flex -mt-1.5 -mb-1.5 bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white"
                                                    data-flux-button="data-flux-button" aria-haspopup="true"
                                                    aria-controls="lofi-dropdown-dda81314985db" aria-expanded="false">
                                                    <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon=""
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                                        <path
                                                            d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z">
                                                        </path>
                                                    </svg>
                                                </button>

                                                <ui-menu
                                                    class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-none"
                                                    popover="manual" data-flux-menu="" id="lofi-dropdown-dda81314985db"
                                                    role="menu" tabindex="-1">
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-27412a09bc406" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path fill-rule="evenodd"
                                                                d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm2.25 8.5a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 3a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        View invoice
                                                    </button>
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-99270315b20ca" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path fill-rule="evenodd"
                                                                d="M4.93 2.31a41.401 41.401 0 0 1 10.14 0C16.194 2.45 17 3.414 17 4.517V17.25a.75.75 0 0 1-1.075.676l-2.8-1.344-2.8 1.344a.75.75 0 0 1-.65 0l-2.8-1.344-2.8 1.344A.75.75 0 0 1 3 17.25V4.517c0-1.103.806-2.068 1.93-2.207Zm4.822 3.997a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 0 0 1.004-1.114L8.704 8.75h1.921a1.875 1.875 0 0 1 0 3.75.75.75 0 0 0 0 1.5 3.375 3.375 0 1 0 0-6.75h-1.92l1.047-.943Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        Refund
                                                    </button>
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:text-red-600 data-[active]:bg-red-50 dark:text-white dark:data-[active]:bg-red-400/20 dark:data-[active]:text-red-400 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-944532544688b" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path
                                                                d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M2 7.5h16l-.811 7.71a2 2 0 0 1-1.99 1.79H4.802a2 2 0 0 1-1.99-1.79L2 7.5ZM7 11a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        Archive
                                                    </button>
                                                </ui-menu>
                                            </ui-dropdown>
                                        </td>
                                    </tr>
                                    <tr wire:key="table-425" data-flux-row="">
                                        <td class="flex items-center gap-3 px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <div class="overflow-hidden rounded size-6" data-flux-avatar="">
                                                <img src="https://i.pravatar.cc/100?img=4" alt="">
                                            </div>

                                            kaylynn.schleifer@gmail.com
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300 whitespace-nowrap"
                                            data-flux-cell="">
                                            Jul 31, 11:15 AM
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <div data-flux-badge="data-flux-badge"
                                                class="inline-flex items-center font-medium whitespace-nowrap -mt-1 -mb-1 [print-color-adjust:exact] text-xs py-1 [&amp;_[data-flux-badge-icon]]:size-3 [&amp;_[data-flux-badge-icon]]:mr-1 rounded-md px-2 text-amber-700 [&amp;_button]:!text-amber-700 dark:text-amber-200 [&amp;_button]:dark:!text-amber-200 bg-amber-400/25 dark:bg-amber-400/40 [&amp;:is(button)]:hover:bg-amber-400/40 [&amp;:is(button)]:hover:dark:bg-amber-400/50">
                                                Incomplete
                                            </div>
                                        </td>
                                        <td class="px-3 py-3 text-sm font-medium first:pl-0 last:pr-0 text-zinc-800 dark:text-white"
                                            data-flux-cell="">
                                            $29.00
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <ui-dropdown position="bottom end" offset="-25" data-flux-dropdown="">
                                                <button type="button"
                                                    class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-8 text-sm rounded-md w-8 inline-flex -mt-1.5 -mb-1.5 bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white"
                                                    data-flux-button="data-flux-button" aria-haspopup="true"
                                                    aria-controls="lofi-dropdown-dd5d4e99f8eb1" aria-expanded="false">
                                                    <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon=""
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                                        <path
                                                            d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z">
                                                        </path>
                                                    </svg>
                                                </button>

                                                <ui-menu
                                                    class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-none"
                                                    popover="manual" data-flux-menu="" id="lofi-dropdown-dd5d4e99f8eb1"
                                                    role="menu" tabindex="-1">
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-7a9766efeaa27" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path fill-rule="evenodd"
                                                                d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm2.25 8.5a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 3a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        View invoice
                                                    </button>
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-56b56970ce957" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path fill-rule="evenodd"
                                                                d="M4.93 2.31a41.401 41.401 0 0 1 10.14 0C16.194 2.45 17 3.414 17 4.517V17.25a.75.75 0 0 1-1.075.676l-2.8-1.344-2.8 1.344a.75.75 0 0 1-.65 0l-2.8-1.344-2.8 1.344A.75.75 0 0 1 3 17.25V4.517c0-1.103.806-2.068 1.93-2.207Zm4.822 3.997a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 0 0 1.004-1.114L8.704 8.75h1.921a1.875 1.875 0 0 1 0 3.75.75.75 0 0 0 0 1.5 3.375 3.375 0 1 0 0-6.75h-1.92l1.047-.943Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        Refund
                                                    </button>
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:text-red-600 data-[active]:bg-red-50 dark:text-white dark:data-[active]:bg-red-400/20 dark:data-[active]:text-red-400 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-c53909d236209" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path
                                                                d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M2 7.5h16l-.811 7.71a2 2 0 0 1-1.99 1.79H4.802a2 2 0 0 1-1.99-1.79L2 7.5ZM7 11a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        Archive
                                                    </button>
                                                </ui-menu>
                                            </ui-dropdown>
                                        </td>
                                    </tr>
                                    <tr wire:key="table-412" data-flux-row="">
                                        <td class="flex items-center gap-3 px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <div class="overflow-hidden rounded size-6" data-flux-avatar="">
                                                <img src="https://i.pravatar.cc/100?img=16" alt="">
                                            </div>

                                            Kaiya Bator
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300 whitespace-nowrap"
                                            data-flux-cell="">
                                            Jul 31, 11:08 AM
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <div data-flux-badge="data-flux-badge"
                                                class="inline-flex items-center font-medium whitespace-nowrap -mt-1 -mb-1 [print-color-adjust:exact] text-xs py-1 [&amp;_[data-flux-badge-icon]]:size-3 [&amp;_[data-flux-badge-icon]]:mr-1 rounded-md px-2 text-red-700 [&amp;_button]:!text-red-700 dark:text-red-200 [&amp;_button]:dark:!text-red-200 bg-red-400/20 dark:bg-red-400/40 [&amp;:is(button)]:hover:bg-red-400/30 [&amp;:is(button)]:hover:dark:bg-red-400/50">
                                                Failed
                                            </div>
                                        </td>
                                        <td class="px-3 py-3 text-sm font-medium first:pl-0 last:pr-0 text-zinc-800 dark:text-white"
                                            data-flux-cell="">
                                            $72.00
                                        </td>
                                        <td class="px-3 py-3 text-sm first:pl-0 last:pr-0 text-zinc-500 dark:text-zinc-300"
                                            data-flux-cell="">
                                            <ui-dropdown position="bottom end" offset="-25" data-flux-dropdown="">
                                                <button type="button"
                                                    class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none h-8 text-sm rounded-md w-8 inline-flex -mt-1.5 -mb-1.5 bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white"
                                                    data-flux-button="data-flux-button" aria-haspopup="true"
                                                    aria-controls="lofi-dropdown-b38b9f66fd854" aria-expanded="false">
                                                    <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon=""
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true" data-slot="icon">
                                                        <path
                                                            d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z">
                                                        </path>
                                                    </svg>
                                                </button>

                                                <ui-menu
                                                    class="[:where(&amp;)]:min-w-48 p-[.3125rem] rounded-lg shadow-sm border border-zinc-200 dark:border-zinc-600 bg-white dark:bg-zinc-700 focus:outline-none"
                                                    popover="manual" data-flux-menu="" id="lofi-dropdown-b38b9f66fd854"
                                                    role="menu" tabindex="-1">
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-6a8747f216dd4" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path fill-rule="evenodd"
                                                                d="M4.5 2A1.5 1.5 0 0 0 3 3.5v13A1.5 1.5 0 0 0 4.5 18h11a1.5 1.5 0 0 0 1.5-1.5V7.621a1.5 1.5 0 0 0-.44-1.06l-4.12-4.122A1.5 1.5 0 0 0 11.378 2H4.5Zm2.25 8.5a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Zm0 3a.75.75 0 0 0 0 1.5h6.5a.75.75 0 0 0 0-1.5h-6.5Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        View invoice
                                                    </button>
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:bg-zinc-50 dark:text-white data-[active]:dark:bg-zinc-600 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-e4e1f696bfdee" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path fill-rule="evenodd"
                                                                d="M4.93 2.31a41.401 41.401 0 0 1 10.14 0C16.194 2.45 17 3.414 17 4.517V17.25a.75.75 0 0 1-1.075.676l-2.8-1.344-2.8 1.344a.75.75 0 0 1-.65 0l-2.8-1.344-2.8 1.344A.75.75 0 0 1 3 17.25V4.517c0-1.103.806-2.068 1.93-2.207Zm4.822 3.997a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 0 0 1.004-1.114L8.704 8.75h1.921a1.875 1.875 0 0 1 0 3.75.75.75 0 0 0 0 1.5 3.375 3.375 0 1 0 0-6.75h-1.92l1.047-.943Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        Refund
                                                    </button>
                                                    <button type="button"
                                                        class="flex items-center px-2 py-1.5 w-full focus:outline-none rounded-md text-left text-sm font-medium [&amp;[disabled]]:opacity-50 text-zinc-800 data-[active]:text-red-600 data-[active]:bg-red-50 dark:text-white dark:data-[active]:bg-red-400/20 dark:data-[active]:text-red-400 [&amp;_[data-flux-menu-item-icon]]:text-zinc-400 dark:[&amp;_[data-flux-menu-item-icon]]:text-white/60 [&amp;[data-active]_[data-flux-menu-item-icon]]:text-current"
                                                        data-flux-menu-item="data-flux-menu-item"
                                                        data-flux-menu-item-has-icon="data-flux-menu-item-has-icon"
                                                        id="lofi-menu-item-e77252d229497" role="menuitem" tabindex="-1">
                                                        <svg class="shrink-0 [:where(&amp;)]:size-5 mr-2"
                                                            data-flux-menu-item-icon="data-flux-menu-item-icon"
                                                            data-flux-icon="" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                                            data-slot="icon">
                                                            <path
                                                                d="M2 3a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M2 7.5h16l-.811 7.71a2 2 0 0 1-1.99 1.79H4.802a2 2 0 0 1-1.99-1.79L2 7.5ZM7 11a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1Z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>


                                                        Archive
                                                    </button>
                                                </ui-menu>
                                            </ui-dropdown>
                                        </td>
                                    </tr>
                                    <!--[if ENDBLOCK]><![endif]-->
                                </tbody>
                            </table>
                        </div>
                        @if ($customers->hasPages())
                            {{ $customers->links('partial.pagination') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!--[if ENDBLOCK]><![endif]-->
    </div>
@endsection
