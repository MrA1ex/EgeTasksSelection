<nav class="navbar app__nav" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="/" style="padding-left: 8px;padding-right: 8px;">
            <img src="{{asset('images/logo.png')}}" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-item">
            @isset($subjects)
                <div class="content is-small">
                    <h2>Задания ЕГЭ</h2>
                    <p>Все задания аналогичны тем, что будут использоваться на экзамене. Вы можете составить список из необходимого вам количества заданий по тем или иным разделам выбранного предмета.</p>
                </div>
            @else
                <div class="columns is-variable is-1 app__nav-columns">
                    <div class="column app__nav-column">
                        <div class="dropdown" style="width: 100%;">
                            <div class="dropdown-trigger" style="width: 100%;">
                                <button class="button is-rounded is-small"  style="width: 100%;" aria-haspopup="true" aria-controls="dropdown-menu">
                                    <span>Математика</span>
                                    <span class="icon is-small" style="padding-top: 2px;margin-left: 0px;">
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                        </span>
                                </button>
                            </div>
                            <div class="dropdown-menu" id="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a onclick="location.href='/subject/matematika-bazovyi-uroven'" class="dropdown-item">Базовый уровень</a>
                                    <a onclick="location.href='/subject/matematika-profilnyi-uroven'" class="dropdown-item">Профильный уровень</a>
                                </div>
                            </div>
                        </div>
                        <button class="button is-rounded is-small is-fullwidth app__but" onclick="location.href='/subject/fizika'">Физика</button>
                    </div>
                    <div class="column app__nav-column">
                        <button class="button is-rounded is-small is-fullwidth" onclick="location.href='/subject/informatika'">Информатика</button>
                        <button class="button is-rounded is-small is-fullwidth app__but" onclick="location.href='/subject/ximiya'">Химия</button>
                    </div>
                    <div class="column app__nav-column">
                        <button class="button is-rounded is-small is-fullwidth" onclick="location.href='/subject/russkii-yazyk'">Русский язык</button>
                        <button class="button is-rounded is-small is-fullwidth app__but" onclick="location.href='/subject/biologiya'">Биология</button>
                    </div>
                    <div class="column app__nav-column">
                        <button class="button is-rounded is-small is-fullwidth" onclick="location.href='/subject/angliiskii-yazyk'">Английский язык</button>
                        <button class="button is-rounded is-small is-fullwidth app__but" onclick="location.href='/subject/geografiya'">География</button>
                    </div>
                    <div class="column app__nav-column">
                        <button class="button is-rounded is-small is-fullwidth" onclick="location.href='/subject/nemeckii-yazyk'">Немецкий язык</button>
                        <button class="button is-rounded is-small is-fullwidth app__but" onclick="location.href='/subject/obshhestvoznanie'">Обществознание</button>
                    </div>
                    <div class="column app__nav-column">
                        <button class="button is-rounded is-small is-fullwidth" onclick="location.href='/subject/francuzskii-yazyk'">Французский язык</button>
                        <button class="button is-rounded is-small is-fullwidth app__but" onclick="location.href='/subject/literatura'">Литература</button>
                    </div>
                    <div class="column app__nav-column">
                        <button class="button is-rounded is-small is-fullwidth" onclick="location.href='/subject/ispanskii-yazyk'">Испанский язык</button>
                        <button class="button is-rounded is-small is-fullwidth app__but" onclick="location.href='/subject/istoriya'">История</button>
                    </div>
                </div>
            @endisset
        </div>
    </div>
</nav>


