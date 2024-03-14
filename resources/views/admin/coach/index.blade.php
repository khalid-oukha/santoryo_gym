@extends('layouts.dashboard.master')

@section('dashboard_title')
    Coach's
@endsection


@section('content')
    <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6>Coachs table</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            coach</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            specialization</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Status</th>
                                        <th
                                            class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            joined on
                                        </th>
                                        <th
                                            class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-2.jpg"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                        alt="user1" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">John Michael</h6>
                                                    <p class="mb-0 text-xs leading-tight text-slate-400">
                                                        john@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-xs font-semibold leading-tight">Manager</p>
                                            <p class="mb-0 text-xs leading-tight text-slate-400">Organization</p>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span
                                                class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight text-slate-400">23/04/18</span>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <a href="javascript:;"
                                                class="text-xs font-semibold leading-tight text-slate-400"> Edit
                                            </a>
                                            <div
                                                class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                                                <div class="relative pr-6 lg:float-right">
                                                    <a dropdown-trigger class="cursor-pointer" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v text-slate-400"></i>
                                                    </a>
                                                    <p class="hidden transform-dropdown-show"></p>

                                                    <ul dropdown-menu
                                                        class="z-100 text-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                                                        <li class="relative">
                                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                                                href="javascript:;">Action</a>
                                                        </li>
                                                        <li class="relative">
                                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                                                href="javascript:;">Another action</a>
                                                        </li>
                                                        <li class="relative">
                                                            <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                                                href="javascript:;">Something else here</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-3.jpg"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                        alt="user2" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">Alexa Liras</h6>
                                                    <p class="mb-0 text-xs leading-tight text-slate-400">
                                                        alexa@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-xs font-semibold leading-tight">Programator</p>
                                            <p class="mb-0 text-xs leading-tight text-slate-400">Developer</p>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span
                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Offline</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight text-slate-400">11/01/19</span>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <a href="javascript:;"
                                                class="text-xs font-semibold leading-tight text-slate-400"> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-4.jpg"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                        alt="user3" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">Laurent Perrier</h6>
                                                    <p class="mb-0 text-xs leading-tight text-slate-400">
                                                        laurent@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-xs font-semibold leading-tight">Executive</p>
                                            <p class="mb-0 text-xs leading-tight text-slate-400">Projects</p>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span
                                                class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight text-slate-400">19/09/17</span>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <a href="javascript:;"
                                                class="text-xs font-semibold leading-tight text-slate-400"> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-3.jpg"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                        alt="user4" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">Michael Levi</h6>
                                                    <p class="mb-0 text-xs leading-tight text-slate-400">
                                                        michael@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-xs font-semibold leading-tight">Programator</p>
                                            <p class="mb-0 text-xs leading-tight text-slate-400">Developer</p>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span
                                                class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight text-slate-400">24/12/08</span>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <a href="javascript:;"
                                                class="text-xs font-semibold leading-tight text-slate-400"> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-2.jpg"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                        alt="user5" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">Richard Gran</h6>
                                                    <p class="mb-0 text-xs leading-tight text-slate-400">
                                                        richard@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-xs font-semibold leading-tight">Manager</p>
                                            <p class="mb-0 text-xs leading-tight text-slate-400">Executive</p>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span
                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Offline</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight text-slate-400">04/10/21</span>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <a href="javascript:;"
                                                class="text-xs font-semibold leading-tight text-slate-400"> Edit
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-4.jpg"
                                                        class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                        alt="user6" />
                                                </div>
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 text-sm leading-normal">Miriam Eric</h6>
                                                    <p class="mb-0 text-xs leading-tight text-slate-400">
                                                        miriam@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-xs font-semibold leading-tight">Programtor</p>
                                            <p class="mb-0 text-xs leading-tight text-slate-400">Developer</p>
                                        </td>
                                        <td
                                            class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="bg-gradient-to-tl from-slate-600 to-slate-300 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Offline</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <span
                                                class="text-xs font-semibold leading-tight text-slate-400">14/09/20</span>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <a href="javascript:;"
                                                class="text-xs font-semibold leading-tight text-slate-400"> Edit
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card 2 -->

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6>Projects table</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table
                                class="items-center justify-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                <thead class="align-bottom">
                                    <tr>
                                        <th
                                            class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Project</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Budget</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Status</th>
                                        <th
                                            class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                            Completion</th>
                                        <th
                                            class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">
                                                <div>
                                                    <img src="../assets/img/small-logos/logo-spotify.svg"
                                                        class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 rounded-full ease-soft-in-out h-9 w-9"
                                                        alt="spotify" />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm leading-normal">Spotify</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-sm font-semibold leading-normal">$2,500</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight">working</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span class="mr-2 text-xs font-semibold leading-tight">60%</span>
                                                <div>
                                                    <div
                                                        class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                        <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                            role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-6 py-3 mb-0 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400">
                                                <i class="text-xs leading-tight fa fa-ellipsis-v"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">
                                                <div>
                                                    <img src="../assets/img/small-logos/logo-invision.svg"
                                                        class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 rounded-full ease-soft-in-out h-9 w-9"
                                                        alt="invision" />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm leading-normal">Invision</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-sm font-semibold leading-normal">$5,000</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight">done</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span class="mr-2 text-xs font-semibold leading-tight">100%</span>
                                                <div>
                                                    <div
                                                        class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                        <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-6 py-3 mb-0 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="text-xs leading-tight fa fa-ellipsis-v"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">
                                                <div>
                                                    <img src="../assets/img/small-logos/logo-jira.svg"
                                                        class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 rounded-full ease-soft-in-out h-9 w-9"
                                                        alt="jira" />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm leading-normal">Jira</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-sm font-semibold leading-normal">$3,400</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight">canceled</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span class="mr-2 text-xs font-semibold leading-tight">30%</span>
                                                <div>
                                                    <div
                                                        class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                        <div class="duration-600 ease-soft bg-gradient-to-tl from-red-600 to-rose-400 -mt-0.38 w-3/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                            role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                                            aria-valuemax="30"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-6 py-3 mb-0 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="text-xs leading-tight fa fa-ellipsis-v"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">
                                                <div>
                                                    <img src="../assets/img/small-logos/logo-slack.svg"
                                                        class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 rounded-full ease-soft-in-out h-9 w-9"
                                                        alt="slack" />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm leading-normal">Slack</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-sm font-semibold leading-normal">$1,000</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight">canceled</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span class="mr-2 text-xs font-semibold leading-tight">0%</span>
                                                <div>
                                                    <div
                                                        class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                        <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-0 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                            role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                            aria-valuemax="0"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-6 py-3 mb-0 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="text-xs leading-tight fa fa-ellipsis-v"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">
                                                <div>
                                                    <img src="../assets/img/small-logos/logo-webdev.svg"
                                                        class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 rounded-full ease-soft-in-out h-9 w-9"
                                                        alt="webdev" />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm leading-normal">Webdev</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-sm font-semibold leading-normal">$14,000</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight">working</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span class="mr-2 text-xs font-semibold leading-tight">80%</span>
                                                <div>
                                                    <div
                                                        class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                        <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-4/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                            role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                            aria-valuemax="80"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-6 py-3 mb-0 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="text-xs leading-tight fa fa-ellipsis-v"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2">
                                                <div>
                                                    <img src="../assets/img/small-logos/logo-xd.svg"
                                                        class="inline-flex items-center justify-center mr-2 text-sm text-white transition-all duration-200 rounded-full ease-soft-in-out h-9 w-9"
                                                        alt="xd" />
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0 text-sm leading-normal">Adobe XD</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 text-sm font-semibold leading-normal">$2,300</p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <span class="text-xs font-semibold leading-tight">done</span>
                                        </td>
                                        <td
                                            class="p-2 text-center align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <div class="flex items-center justify-center">
                                                <span class="mr-2 text-xs font-semibold leading-tight">100%</span>
                                                <div>
                                                    <div
                                                        class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                        <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                            role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b-0 whitespace-nowrap shadow-transparent">
                                            <button
                                                class="inline-block px-6 py-3 mb-0 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none leading-pro ease-soft-in bg-150 tracking-tight-soft bg-x-25 text-slate-400"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="text-xs leading-tight fa fa-ellipsis-v"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

