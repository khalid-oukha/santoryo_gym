<div class="max-w-lg  mx-auto rounded-lg shadow-lg overflow-hidden lg:max-w-none lg:flex">
    <div class="flex-1  bg-gray-900 px-6 py-8 lg:p-12">
        <h3 class="text-2xl font-extrabold text-white sm:text-3xl">{{ $offer[0]->title }}</h3>
        <p class="mt-6 text-base text-gray-300">{{ $offer[0]->description }}</p>
        <div class="mt-8">
            <div class="flex items-center">
                <h4 class="flex-shrink-0 pr-4 bg-gray-900 text-sm tracking-wider font-semibold uppercase text-rose-600">
                    What's included</h4>
                <div class="flex-1 border-t-2  border-gray-600"></div>
            </div>
            <ul role="list" class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                @foreach ($features as $feature)
                <li class="flex items-start lg:col-span-1">
                    <div class="flex-shrink-0"><svg class="h-5 w-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg></div>
                    <p class="ml-3 text-sm  text-gray-300">{{$feature->name}}</p>
                </li>
            @endforeach

            </ul>
        </div>
    </div>
    <div class="py-8 px-6 text-center bg-gray-900 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
        <p class="text-lg leading-6 font-medium text-white">Membership expired on</p>
        <div class="">
            <span style="opacity:0.5"
                class="font-mono text-xl md:text-lg font-medium text-gray-400 ">{{ $subscriptions[0]->end_date }}</span>
            @if ($subscriptions[0]->status == 'active')
                <span class="text-green-600 text-sm">{{ $subscriptions[0]->status }}</span>
            @else
                <span class="text-red-600 text-sm">{{ $subscriptions[0]->status }}</span>
            @endif
        </div>
        <div class="mt-4 flex items-center justify-center text-5xl font-extrabold text-white">
            <span>{{ $offer[0]->price }}</span>
            <span class="ml-3 text-xl font-medium text-gray-400">DH</span>
        </div>
        <div class="mt-6">
            @if ($subscriptions[0]->status == 'ended')
                <a href=""
                    class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-700 hover:bg-gray-600">Upgrade
                    Subscription</a>
            @else
                <a href=""
                    class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-700 hover:bg-gray-600">Get
                    Your pass </a>
            @endif
        </div>
    </div>

</div>

<div class="px-px md:px-3 bg-gray-900">



    <!-- insta freatures -->
    <ul
        class="flex items-center justify-around space-x-12 text-xs font-semibold tracking-widest text-gray-200 uppercase border-t md:justify-center">
        <!-- posts tab is active -->
        <li class="md:border-t md:border-gray-700 md:-mt-px md:text-gray-400">
            <a class="inline-block p-3" href="#">
                <i class="text-xl fas fa-th-text-gray-200 large md:text-xs"></i>
                <span class="hidden text-gray-200 md:inline">Reservations</span>
            </a>
        </li>


    </ul>


    <div class="flex py-8 flex-col">
        <div class=" overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-700   dark:bg-gray-800">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                    <div class="flex items-center gap-x-3">
                                        <input type="checkbox"
                                            class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
                                        <button class="flex items-center gap-x-2">
                                            <span>Lesson</span>

                                            <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                <path
                                                    d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                <path
                                                    d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                    fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                            </svg>
                                        </button>
                                    </div>
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                    Coach
                                </th>
                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                    Start DATE
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                    Status
                                </th>

                                <th scope="col"
                                    class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-200 dark:text-gray-400">
                                    status actions
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-transparent divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                            @foreach ($reservations as $reservation)
                                <tr>
                                    <td
                                        class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox"
                                                class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">

                                            <div class="flex items-center gap-x-2">

                                                <h2 class="text-sm font-medium text-gray-200 dark:text-white ">
                                                    {{ $reservation->title }}

                                                </h2>
                                            </div>
                                        </div>

                                    </td>

                                    <td class="px-4 py-4 text-sm text-gray-200 dark:text-gray-300 whitespace-nowrap">
                                        {{ $reservation->coach->user->firstname . ' ' . $reservation->coach->user->lastname }}
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-200 dark:text-gray-300 whitespace-nowrap">
                                        {{ $reservation->start_at }}
                                    </td>

                                    <td class="px-4 py-4 text-sm text-gray-200  dark:text-gray-300 whitespace-nowrap">
                                        <span
                                            class="px-2 py-1 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full dark:bg-green-500 dark:text-green-100">
                                            {{ $reservation->status }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-3">
                                        <div class="flex items-center space-x-4 text-sm">

                                            <a href="{{ route('reservation.cancel', $reservation->id) }}"
                                                onclick="return confirm('Do you really want to cancel  this reservation ?');">
                                                <div
                                                    class="inline-flex items-center px-1 py-1 rounded-full gap-x-2 text-red-500 bg-red-100/60 dark:bg-gray-800">
                                                    <button
                                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                        aria-label="Edit">
                                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9 3L3 9M3 3L9 9" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </a>
                                        </div>
                                    </td>

                                </tr>
                            @endforeach

                            @if ($reservations->isEmpty())
                                <td class="text-white flex items-center justify-center" colspan="5">there are no reservations for now</td>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
