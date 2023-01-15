<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/Template/js/app.js'])
</head>

<body>
    <video id="background-video" autoplay loop muted data-poster="{{ Vite::asset('resources/Template/images/skin/skin.jpg') }}">
        <source src="{{ Vite::asset('resources/Template/images/skins/9.mp4') }}" type="video/mp4">
    </video>
    <div class="app">
        <aside class="sidebar expanded">
            <div class="app-bar fs-4 text-center">
                N
            </div>
            <div class="app-menu">
                Menu Item
            </div>
        </aside>
        <div class="app-container">
            <header class="d-flex">
                Header
                <div class="ms-auto">
                        <button type="button" class="btn btn-light" data-bs-theme-value="light">
                        Light
                      </button>

                      <button type="button" class="btn btn-dark" data-bs-theme-value="dark">
                        Dark
                      </button>

                      <button type="button" class="btn btn-primary" data-bs-theme-value="auto">
                        Auto
                      </button>
                </div>
            </header>
            <main>
                <h1>My Page Next Level</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    At inventore modi impedit soluta officia doloremque dolore possimus deleniti incidunt.
                    Voluptate voluptatem odio iusto minima soluta sunt vero tempora illo aliquam.
                </p>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="card-link">Card link</a>
                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>
            </main>
        </div>
    </div>
</body>

</html>
