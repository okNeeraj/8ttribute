<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layout</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&amp;display=swap" rel="stylesheet">
    {{-- @vite(['resources/Template/scss/app.scss', 'resources/Template/js/app.js']) --}}
    <style>
        *,
*::before,
*::after {
  box-sizing: border-box;
}

body {
  background: url({{ Vite::asset('resources/Template/images/skins/mac.png') }}) no-repeat fixed;
  background-size: cover;
  height: 100vh;
  font-family: "Roboto", sans-serif;
  display: grid;
  place-items: center;
  margin: 0;
}

ul {
    list-style: none;
    padding: 0;
}

input {
  font: inherit;
}

.app-window {
  --br: 14px;
  width: 100%;
  border-radius: var(--br);
  display: grid;
  grid-template-columns: 220px auto;
  position: relative;
  border: 1px solid rgba(0, 0, 0, 0.4);
  overflow: hidden;
  color: #fff;
  background-color: rgba(0, 0, 0, 0.5);
  backdrop-filter: blur(15px);
}

aside {
  --spacing-offset: 10px;
  border-top-left-radius: var(--br);
  border-bottom-left-radius: var(--br);
  padding: 20px 25px;
}
aside .window-actions {
  margin: 10px 0 45px var(--spacing-offset);
}
aside .window-actions .window-action {
  --btn-size: 13px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background-color: transparent;
  border: 2px solid rgba(255, 255, 255, 0.6);
  border-radius: 50%;
  width: var(--btn-size);
  height: var(--btn-size);
  padding: 0;
  margin-right: 1px;
  transition: 0.2s;
  transition-property: background-color, border-color;
}
aside .window-actions .window-action--close {
  --btn-clr: #ff5d55;
}
aside .window-actions .window-action--min {
  --btn-clr: #ffc306;
}
aside .window-actions .window-action--max {
  --btn-clr: #14ca39;
}
aside .window-actions .window-action:hover {
  background-color: var(--btn-clr);
  border-color: var(--btn-clr);
}
aside .nav {
  margin-bottom: 45px;
  font-size: 14px;
}
aside .nav a {
  color: #fff;
  text-decoration: none;
  display: block;
  padding: 8px var(--spacing-offset);
  border-radius: 4px;
  transition: background-color 0.2s;
}
aside .nav a:hover {
  background-color: rgba(0, 0, 0, 0.2);
}
aside .nav > h3 {
  padding-left: var(--spacing-offset);
  font-size: 12px;
  color: rgba(255, 255, 255, 0.7);
  margin-bottom: 15px;
}
aside .nav > ul li:not(:last-of-type) {
  margin-bottom: 3px;
}
aside .nav > ul .nav-item--selected > a {
  background-color: rgba(0, 0, 0, 0.2);
}
aside .nav.nav--main {
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 0.64px;
}
aside .nav.nav--has-icons {
  --icon-size: 16px;
}
aside .nav.nav--has-icons > ul li a {
  display: flex;
  align-items: center;
}
aside .nav.nav--has-icons > ul li a svg {
  margin-right: 25px;
  width: var(--icon-size);
  height: var(--icon-size);
  opacity: 0.8;
}

main {
  border-top-right-radius: var(--br);
  border-bottom-right-radius: var(--br);
  background-color: rgba(0, 0, 0, 0.25);
  padding: 10px 30px 50px;
  max-height: 820px;
  overflow-y: auto;
}
main::-webkit-scrollbar {
  width: 9px;
}
main::-webkit-scrollbar-track {
  background-color: rgba(0, 0, 0, 0.3);
  width: 100%;
}
main::-webkit-scrollbar-thumb {
  background-color: rgba(0, 0, 0, 0.7);
  transition: background-color 0.2s;
}
main::-webkit-scrollbar-thumb:hover {
  background-color: black;
}
main .top-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 30px;
}
main .top-bar__search {
  flex: 1;
  margin-right: 50px;
  position: relative;
}
main .top-bar__search svg {
  position: absolute;
  top: 50%;
  left: 8px;
  transform: translateY(-50%);
  height: 20px;
  width: 20px;
}
main .top-bar__search input {
  background-color: transparent;
  width: 100%;
  font-size: 22px;
  font-weight: 500;
  padding: 4px 10px 4px 40px;
  color: #fff;
  border: none;
}
main .top-bar__search input::placeholder {
  color: #fff;
}
main .top-bar__search input::-webkit-placeholder {
  color: #fff;
}
main .top-bar__user img {
  --size: 50px;
  width: var(--size);
  height: var(--size);
  border-radius: 50%;
}
main .screen-title {
  font-size: 60px;
  font-weight: 700;
}
main .artworks {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 35px;
  margin-top: 30px;
  padding-bottom: 100px;
}
main .artwork {
  border-radius: var(--br);
  overflow: hidden;
  position: relative;
  height: 350px;
}
main .artwork__bg {
  height: 100%;
  width: 100%;
  background: var(--img) no-repeat center;
  background-size: cover;
}
main .artwork__details {
  position: absolute;
  overflow: hidden;
  width: 100%;
  text-align: center;
  background-color: rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(10px);
  bottom: 0;
  padding: 30px 0;
  border-radius: 0 0 var(--br) var(--br);
}
main .artwork__details-inner {
  width: 100%;
  display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
}
main .artwork-artist {
  font-weight: 500;
  letter-spacing: 0.45px;
  margin-bottom: 4px;
}
main .artwork-song {
  font-weight: 300;
}

aside,
main {
  position: relative;
}

.player {
  --offset: 20px;
  position: absolute;
  bottom: var(--offset);
  left: var(--offset);
  right: var(--offset);
  background-color: rgba(51, 51, 51, 0.8);
  border-radius: var(--br);
  padding: 16px;
  display: flex;
  justify-content: space-between;
  backdrop-filter: blur(10px);
}
.player__max {
  display: none;
}
.player--docked {
  right: auto;
}
.player--docked .player__centre,
.player--docked .player__right {
  display: none;
}
.player--docked .player__max {
  display: block;
}
.player--docked .player__min {
  display: none;
}
.player__dock {
  position: absolute;
  top: 0;
  right: 0;
  transform: translate(50%, -50%);
  cursor: pointer;
}
.player__left, .player__centre, .player__right {
  position: relative;
}
.player__left, .player__right {
  flex: 1;
}
.player__centre {
  flex: 3;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 0 100px;
}
.player__centre .player-actions {
  margin: 12px 0 20px;
}
.player__centre .player-actions svg {
  width: 18px;
  height: 18px;
  fill: #fff;
  margin: 0 10px;
  cursor: pointer;
}
.player__centre .player-progress {
  display: flex;
  width: 100%;
  justify-content: space-between;
  align-items: center;
}
.player__centre .player-progress span {
  font-size: 14px;
}
.player__centre .player-progress-bar {
  margin: 0 20px;
}
.player__centre .player-progress-bar-done {
  background-image: linear-gradient(90deg, #017bff, #03b0ff);
}
.player__left {
  display: flex;
  align-items: center;
}
.player__left .player__pic {
  width: 70px;
  height: 70px;
  border-radius: 6px;
  margin-right: 15px;
}
.player__left .now-playing--title, .player__left .now-playing--artist {
  display: block;
}
.player__left .now-playing--title {
  font-weight: 500;
  margin-bottom: 3px;
}
.player__left .now-playing--artist {
  font-size: 15px;
  font-weight: 300;
}
.player__right {
  display: flex;
  align-items: center;
}
.player__right svg {
  margin-right: 25px;
}
.player .player-progress-bar {
  background-color: rgba(255, 255, 255, 0.3);
  width: 100%;
  height: 5px;
  border-radius: 15px;
  position: relative;
}
.player .player-progress-bar-done {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  background-color: rgba(255, 255, 255, 0.8);
  transition: width 0.2s;
  border-radius: 15px;
}
    </style>
</head>

<body>
    <div class="app-window">
        <aside>

            <nav class="nav nav--main">
                <ul>
                    <li class="nav-item--selected"><a href="#0">Listen now</a></li>
                    <li><a href="#0">Browse</a></li>
                    <li><a href="#0">Radio</a></li>
                </ul>
            </nav>

            <nav class="nav nav--has-icons">
                <h3>Library</h3>

                <ul>
                    <li><a href="#0"><i data-feather="clock"></i>Recents</a></li>
                    <li><a href="#0"><i data-feather="disc"></i>Albums</a></li>
                    <li><a href="#0"><i data-feather="music"></i>Songs</a></li>
                </ul>
            </nav>

            <nav class="nav">
                <h3>Playlists</h3>

                <ul>
                    <li><a href="#0">Summer</a></li>
                    <li><a href="#0">Smasher vol.III</a></li>
                    <li><a href="#0">Vibes</a></li>
                </ul>
            </nav>
        </aside>

        <main>


            <h1 class="screen-title">Listen now</h1>

            <section class="artworks">
                <article class="artwork"
                    style="--img: url(https://www.channel4.com/media/images/Channel4/c4-news/2014/July/09/09_eminem2014_r_w.jpg);">
                    <div class="artwork__bg"></div>
                    <div class="artwork__details">
                        <div class="artwork__details-inner">
                            <div class="artwork-artist">Eminem</div>
                            <div class="artwork-song">Mockingbird</div>
                        </div>
                    </div>
                </article>

                <article class="artwork"
                    style="--img: url(https://www.nme.com/wp-content/uploads/2018/01/GettyImages-503213347-696x442.jpg);">
                    <div class="artwork__bg"></div>
                    <div class="artwork__details">
                        <div class="artwork__details-inner">
                            <div class="artwork-artist">Oasis</div>
                            <div class="artwork-song">Bring It On Down</div>
                        </div>
                    </div>
                </article>

                <article class="artwork"
                    style="--img: url(https://resources.tidal.com/images/b038ba48/042e/4b6e/9ac4/3de92941ede0/480x480.jpg);">
                    <div class="artwork__bg"></div>
                    <div class="artwork__details">
                        <div class="artwork__details-inner">
                            <div class="artwork-artist">Jayda G</div>
                            <div class="artwork-song">Significant Changes</div>
                        </div>
                    </div>
                </article>

                <article class="artwork"
                    style="--img: url(https://upload.wikimedia.org/wikipedia/commons/4/45/Red_Hot_Chili_Peppers_-_Rock_am_Ring_2016_-2016156230933_2016-06-04_%28cropped%29.jpg);">
                    <div class="artwork__bg"></div>
                    <div class="artwork__details">
                        <div class="artwork__details-inner">
                            <div class="artwork-artist">Red Hot Chilli Peppers</div>
                            <div class="artwork-song">Wet Sand</div>
                        </div>
                    </div>
                </article>

                <article class="artwork"
                    style="--img: url(https://static01.nyt.com/images/2020/04/03/arts/02weeknd-review1/02weeknd-review1-articleLarge.jpg?quality=75&auto=webp&disable=upscale);">
                    <div class="artwork__bg"></div>
                    <div class="artwork__details">
                        <div class="artwork__details-inner">
                            <div class="artwork-artist">The Weeknd</div>
                            <div class="artwork-song">Blinding Lights</div>
                        </div>
                    </div>
                </article>

                <article class="artwork"
                    style="--img: url(https://i.pinimg.com/originals/5f/0f/67/5f0f67f582c0e588b35eba01dfbd1137.jpg);">
                    <div class="artwork__bg"></div>
                    <div class="artwork__details">
                        <div class="artwork__details-inner">
                            <div class="artwork-artist">P!nk</div>
                            <div class="artwork-song">So What</div>
                        </div>
                    </div>
                </article>

                <article class="artwork"
                    style="--img: url(https://media.gq.com/photos/5a5f79d52316871dcb3c837f/master/w_1600%2Cc_limit/Dua_Lipa_02.jpg);">
                    <div class="artwork__bg"></div>
                    <div class="artwork__details">
                        <div class="artwork__details-inner">
                            <div class="artwork-artist">Dua Lipa</div>
                            <div class="artwork-song">Physical</div>
                        </div>
                    </div>
                </article>

                <article class="artwork"
                    style="--img: url(https://www.thescottishsun.co.uk/wp-content/uploads/sites/2/2018/04/nintchdbpict000337382082.jpg);">
                    <div class="artwork__bg"></div>
                    <div class="artwork__details">
                        <div class="artwork__details-inner">
                            <div class="artwork-artist">Gerry Cinnamon</div>
                            <div class="artwork-song">Where We're Going</div>
                        </div>
                    </div>
                </article>

                <article class="artwork" style="--img: url(https://pbs.twimg.com/media/EZnpXYlX0AAODnB.jpg);">
                    <div class="artwork__bg"></div>
                    <div class="artwork__details">
                        <div class="artwork__details-inner">
                            <div class="artwork-artist">Gorillaz</div>
                            <div class="artwork-song">Dirty Harry</div>
                        </div>
                    </div>
                </article>

                <article class="artwork"
                    style="--img: url(https://diy-magazine.s3.amazonaws.com/d/diy/Artists/T/The-1975/DIY-91/The1975_WorldTour2019_Film_0142_JH.jpg);">
                    <div class="artwork__bg"></div>
                    <div class="artwork__details">
                        <div class="artwork__details-inner">
                            <div class="artwork-artist">The 1975</div>
                            <div class="artwork-song">If You're Too Shy (Let Me Know)</div>
                        </div>
                    </div>
                </article>

                <article class="artwork"
                    style="--img: url(https://www.imro.ie/wp-content/uploads/2019/10/the-script.jpg);">
                    <div class="artwork__bg"></div>
                    <div class="artwork__details">
                        <div class="artwork__details-inner">
                            <div class="artwork-artist">The Script</div>
                            <div class="artwork-song">If You Could See Me Now</div>
                        </div>
                    </div>
                </article>

                <article class="artwork"
                    style="--img: url(https://www.grammy.com/sites/com/files/styles/news_detail_header/public/news/arctic_monkeys_2.jpg?itok=YV0Kq5ts);">
                    <div class="artwork__bg"></div>
                    <div class="artwork__details">
                        <div class="artwork__details-inner">
                            <div class="artwork-artist">Arctic Monkeys</div>
                            <div class="artwork-song">Crying Lightning</div>
                        </div>
                    </div>
                </article>
            </section>
        </main>

        <div class="player">
            <i data-feather="maximize-2" class="player__dock player__max"></i>
            <i data-feather="minimize-2" class="player__dock player__min"></i>

            <div class="player__left">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/3/35/The_Eminem_Show.jpg/220px-The_Eminem_Show.jpg"
                    alt="The Eminem Show" class="player__pic" />
                <div class="now-playing">
                    <span class="now-playing--title">Square Dance</span>
                    <span class="now-playing--artist">Eminem</span>
                </div>
            </div>

            <div class="player__centre">
                <div class="player-actions">
                    <i data-feather="skip-back"></i>
                    <i data-feather="play"></i>
                    <i data-feather="skip-forward"></i>
                </div>

                <div class="player-progress">
                    <span>3:13</span>
                    <div class="player-progress-bar">
                        <div class="player-progress-bar-done" style="width: 33%;"></div>
                    </div>
                    <span>5:03</span>
                </div>
            </div>

            <div class="player__right">
                <i data-feather="volume-2"></i>
                <div class="player-progress-bar">
                    <div class="player-progress-bar-done" style="width: 63%;"></div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js"></script>
<script>
    feather.replace();
    document.querySelectorAll(".player__dock").forEach((el) => {
        el.addEventListener("click", (e) => {
            document.querySelector(".player").classList.toggle("player--docked");
        });
    });

</script>
</html>
