<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/Template/js/app.js'])
</head>

<body>
    <video id="background-video" autoplay loop muted
        data-poster="{{ Vite::asset('resources/Template/images/skin/skin.jpg') }}">
        <source src="{{ Vite::asset('resources/Template/images/skins/9.mp4') }}" type="video/mp4">
    </video>
    <div class="app">
        <aside class="sidebar expanded">
            <div class="app-bar text-center">
                <div class="app-head fs-4 mb-4">N</div>
                <div class="app-list">
                    <a href="#!" class="active">
                        <span class="material-icons-outlined">
                            pending_actions
                        </span>
                    </a>
                </div>
                <div class="app-list">
                    <a href="#!" class="">
                        <span class="material-icons-outlined">
                            rocket
                        </span>
                    </a>
                </div>
                <div class="app-list">
                    <a href="#!" class="">
                        <span class="material-icons-outlined">
                            display_settings
                        </span>
                    </a>
                </div>
                <div class="app-list">
                    <a href="#!" class="">
                        <span class="material-icons-outlined">
                            store
                        </span>
                    </a>
                </div>
            </div>

            <div class="app-menu">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                        Dashboard
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">Installation</a>
                    <a href="#" class="list-group-item list-group-item-action">Blockchain</a>
                    <a href="#" class="list-group-item list-group-item-action">Analytics</a>
                </div>
            </div>
        </aside>
        <div class="app-container">
            <header class="d-flex">
                {{-- Header --}}
                <div class="ms-auto">
                    <button type="button" class="btn btn-light" data-bs-theme-value="light">
                        Light
                    </button>

                    <button type="button" class="btn btn-dark ms-2" data-bs-theme-value="dark">
                        Dark
                    </button>

                    <button type="button" class="btn btn-primary ms-2" data-bs-theme-value="auto">
                        Auto
                    </button>
                </div>
            </header>
            <main>
                <h1>Let's Build,
                    <span>Something Crazy</span>
                </h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    At inventore modi impedit soluta officia doloremque dolore possimus deleniti incidunt.
                    Voluptate voluptatem odio iusto minima soluta sunt vero tempora illo aliquam.
                </p>
                <div class="row mt-4">
                    <div class="col-5">
                        <div class="card" aria-hidden="true">
                            {{-- <img src="..." class="card-img-top" alt="..."> --}}
                            <div class="placeholder-glow">
                                <span class="placeholder col-12" style="height: 136px;"></span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title placeholder-glow">
                                    <span class="placeholder col-6"></span>
                                </h5>
                                <p class="card-text placeholder-glow">
                                    <span class="placeholder col-7"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-6"></span>
                                    <span class="placeholder col-8"></span>
                                </p>
                                <a href="#" tabindex="-1" class="btn btn-secondary disabled placeholder col-2"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card" aria-hidden="true">
                            {{-- <img src="..." class="card-img-top" alt="..."> --}}
                            <div class="placeholder-glow">
                                <span class="placeholder col-12" style="height: 136px;"></span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title placeholder-glow">
                                    <span class="placeholder col-6"></span>
                                </h5>
                                <p class="card-text placeholder-glow">
                                    <span class="placeholder col-7"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-4"></span>
                                    <span class="placeholder col-6"></span>
                                    <span class="placeholder col-8"></span>
                                </p>
                                <a href="#" tabindex="-1" class="btn btn-secondary disabled placeholder col-2"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>
