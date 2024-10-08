{{-- @php
    $systemSetting = App\Models\SystemSetting::first();
@endphp --}}

<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
        </div>

        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg>
            </div>

            <ul class="side-menu">
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M19.9794922,7.9521484l-6-5.2666016c-1.1339111-0.9902344-2.8250732-0.9902344-3.9589844,0l-6,5.2666016C3.3717041,8.5219116,2.9998169,9.3435669,3,10.2069702V19c0.0018311,1.6561279,1.3438721,2.9981689,3,3h2.5h7c0.0001831,0,0.0003662,0,0.0006104,0H18c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-8.7930298C21.0001831,9.3435669,20.6282959,8.5219116,19.9794922,7.9521484z M15,21H9v-6c0.0014038-1.1040039,0.8959961-1.9985962,2-2h2c1.1040039,0.0014038,1.9985962,0.8959961,2,2V21z M20,19c-0.0014038,1.1040039-0.8959961,1.9985962-2,2h-2v-6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3h-2c-1.6561279,0.0018311-2.9981689,1.3438721-3,3v6H6c-1.1040039-0.0014038-1.9985962-0.8959961-2-2v-8.7930298C3.9997559,9.6313477,4.2478027,9.0836182,4.6806641,8.7041016l6-5.2666016C11.0455933,3.1174927,11.5146484,2.9414673,12,2.9423828c0.4853516-0.0009155,0.9544067,0.1751099,1.3193359,0.4951172l6,5.2665405C19.7521973,9.0835571,20.0002441,9.6313477,20,10.2069702V19z" />
                        </svg>
                        <span class="side-menu__label">Dashboard</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('categories.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path d="M19 3H5c-1.1 0-1.99.9-1.99 2L3 19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14z"/>
                            <path d="M9 7h6v2H9zm0 4h6v2H9z"/>
                        </svg>
                        <span class="side-menu__label">Category</span>
                    </a>
                </li>
                
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('aminities.index')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12c0 4.42 3.28 8.07 7.54 8.91 0-.02.01-.03.01-.05 0-.12-.01-.25-.01-.38C7.69 19.13 6 16.86 6 14h2c0 1.43 1.17 2.58 2.64 2.98C11.79 16.79 12 16.43 12 16c0-.83-.67-1.5-1.5-1.5H6v-2h4c2.21 0 4-1.79 4-4s-1.79-4-4-4H5.69C6.19 6.1 8.36 4 12 4c3.31 0 6 2.69 6 6s-2.69 6-6 6H4c-.55 0-1 .45-1 1s.45 1 1 1h8.62c.31 0 .59-.06.86-.17.04.06.08.11.08.17 0 2.21-1.79 4-4 4h-1v2h1c4.42 0 8-3.58 8-8s-3.58-8-8-8z"/>
                        </svg>
                        <span class="side-menu__label">Aminities</span>
                    </a>
                </li>
                


                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon bi bi-info-circle"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                            <path
                                d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.898.105 1.319.808 1.319.545 0 .956-.252 1.09-.598l.088-.416c.194-.898-.105-1.319-.808-1.319-.545 0-.956.252-1.09.598l-.088.416c-.194.898-.605 1.254-1.308 1.254-.693 0-1.118-.4-.968-1.254l.008-.068.918-4.35c.148-.696-.215-.933-.745-.933H6.865c.516 0 .862.268.968.732z" />
                            <circle cx="8" cy="4.5" r="1" />
                        </svg>
                        <span class="side-menu__label">About Us</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm1.07-7.75c-.9.92-1.07 1.29-1.07 2.25h-2v-.5c0-1.38.57-2.22 1.5-3.07.59-.59.84-1.17.84-1.93 0-1.5-1.17-2.5-2.5-2.5s-2.5 1-2.5 2.5h-2c0-2.47 2.02-4.5 4.5-4.5s4.5 2.03 4.5 4.5c0 1.31-.52 2.21-1.43 3.07z" />
                        </svg>
                        <span class="side-menu__label">FAQ</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16zm0-14l-3.4 6.6 6.6-3.4L12 6zm0 12l3.4-6.6-6.6 3.4L12 18z" />
                        </svg>
                        <span class="side-menu__label">Our Mission</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1 16l-3-3 1-1 2 2 4-4 1 1-5 5zm0-8l1-1 2 2-1 1-2-2z" />
                        </svg>
                        <span class="side-menu__label">Fabrication Technology</span>
                    </a>
                </li>

                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide"
                        href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <span class="side-menu__label">Partner Levels</span>
                    </a>
                </li>
                @can('viewAny', \App\Models\User::class)
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide"
                        href="{{ route('users.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                        <span class="side-menu__label">User List</span>
                    </a>
                </li>
                @endcan

                <hr>

                {{-- Settings --}}
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="collapse" href="#settingsDropdown" role="button" aria-expanded="false" aria-controls="settingsDropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 16 16" fill="currentColor">
                            <path d="M8 1a7 7 0 1 0 7 7 7 7 0 0 0-7-7zm4.58 8.09l-1 .73a5.49 5.49 0 0 1 0 1.26l1 .73a.5.5 0 0 1-.17.83l-1.2.39a5.49 5.49 0 0 1-.72 1.25l.44 1.21a.5.5 0 0 1-.48.66h-1.24a5.49 5.49 0 0 1-1.26 0l-.73-1a5.49 5.49 0 0 1-1.25.72l-.73 1a.5.5 0 0 1-.83-.17l-.39-1.2a5.49 5.49 0 0 1-1.25-.72l-1.21.44a.5.5 0 0 1-.66-.48v-1.24a5.49 5.49 0 0 1 0-1.26l1-.73a5.49 5.49 0 0 1-.72-1.25l-1.21-.44a.5.5 0 0 1 .17-.83l1.2-.39a5.49 5.49 0 0 1 .72-1.25l-.44-1.21a.5.5 0 0 1 .48-.66h1.24a5.49 5.49 0 0 1 1.26 0l.73 1a5.49 5.49 0 0 1 1.25-.72l.73-1a.5.5 0 0 1 .83.17l.39 1.2a5.49 5.49 0 0 1 1.25.72l1.21-.44a.5.5 0 0 1 .66.48v1.24a5.49 5.49 0 0 1 0 1.26z"/>
                        </svg>
                        <span class="side-menu__label">Settings</span>
                        <i class="angle fe fe-chevron-down"></i>
                    </a>
                    <!-- Dropdown items -->
                    <ul class="collapse" id="settingsDropdown">
                        <li>
                            <a class="side-menu__item" href="{{ route('settings .index') }}">
                                <span class="side-menu__label">General Setting</span>
                            </a>
                        </li>
                        <li>
                            <a class="side-menu__item" href="{{ route('settings.social') }}">
                                <span class="side-menu__label">Social Setting</span>
                            </a>
                        </li>
                        <li>
                            <a class="side-menu__item" href="{{ route('settings.mail') }}">
                                <span class="side-menu__label">Mail Setting</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>

            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg>
            </div>
        </div>
    </div>
</div>
