@extends('layouts.main')

@section('body')

    <h1 class="page__title">Результати пошуку "Створення сайтів"</h1>

    <article class="post">
        <div class="post__content">
            <h2 class="post__title">
                <a href="#">Як писати код швидко й безболісно?</a>
            </h2>
            <p class="post__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, debitis. Fugiat error repellendus quod, porro ex similique ea tenetur nemo minima tempore consequuntur aperiam omnis, aspernatur, minus ullam perferendis quae, voluphae vediam et modi asperiores libero!
            </p>
        </div>
        <div class="post__footer">
            <ul class="post__data">
                <li class="post__data-item">
                    <time datetime="2021-06-19 16:19">19.06.2021</time>
                </li>
                <li class="post__data-item">
                    <a href="#">Створення сайтів</a>
                </li>
            </ul>
            <a href="post.html" class="post__read">Перейти</a>
        </div>
    </article>

    <article class="post">
        <div class="post__content">
            <h2 class="post__title">
                <a href="post.html">Як я закінчив IT Step Academy</a>
            </h2>
            <p class="post__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, debitis. Fugiat error repellendus quod, porro ex similique ea tenetur nemo minima tempore consequuntur aperiam omnis, aspernatur, minus ullam perferendis quae, voluphae vediam et modi asperiores libero!
            </p>
        </div>
        <div class="post__footer">
            <ul class="post__data">
                <li class="post__data-item">
                    <time datetime="2021-05-04 13:05">04.05.2022</time>
                </li>
                <li class="post__data-item">
                    <a href="#">Створення</a>
                </li>
            </ul>
            <a href="post.html" class="post__read">Читати</a>
        </div>
    </article>
@endsection