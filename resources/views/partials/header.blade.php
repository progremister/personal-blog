<header class="header">
    <div class="header__left">
        <nav class="nav">
            <ul class="nav__list">
                <li>
                    <a href="/" class="nav__link">Головна</a>
                </li>
                <li class="nav__item">
                    <a href="#" class="nav__link has-subnav">Статті</a>

                    <ul class="subnav">
                        <li>
                            <a href="#" class="subnav__link" id="">Створення сайтів</a>
                        </li>
                        <li>
                            <a href="#" class="subnav__link" id="">Інтернет-маркетинг</a>
                        </li>
                        <li>
                            <a href="#" class="subnav__link" id="">Просування відео</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/about" class="nav__link">Про мене</a>
                </li>
            </ul>
        </nav>
    </div>

    <button class="burger" type="button" id="burger">
        <span></span>
    </button>

    <div class="header__right">
        <nav class="nav">
            <ul class="nav__list">
                <li>
                    <a href="{{ route('profile') }}" class="nav__link">Профіль</a>
                </li>
                <li>
                    <a href="sign-in.html" class="nav__link">Вийти</a>
                </li>
            </ul>
        </nav>
        <form class="search" action="search.html" method="GET">
            <input type="text" class="search__input" id="" placeholder="Пошук по блогу">
        </form>
    </div>
</header>
