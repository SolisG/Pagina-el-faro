@extends('layouts.app')
@section('content')

<div class="container">
<div><img src="jpg/cropped-lighthouse-banner.jpg" alt="Banner de un faro" class="img-fluid w-100"></div>

    <body>
    <nav>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="#deportes">Deporte</a></li>
            <li><a href="#negocios">Negocios</a></li>
        </ul>
    </nav>

    <main>
        <section id="advertisements">
            <h2>Anuncios</h2>
            <ul>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2694450375352679"
                        crossorigin="anonymous"></script>
                <li><a href="#">Ad 1</a></li>
            </ul>
        </section>

        <section id="noticias">
            <h2>Ultimas Noticias</h2>
            <ul>
                @foreach($latestNews as $newsItem)
                    <li>
                        <a href="{{ route('news.show', $newsItem->id) }}">{{ $newsItem->title }}</a>
                    </li>
                @endforeach
            </ul>
        </section>

<section>
            <h2>Video Destacado</h2>
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Bof-9OYWxCI" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <h2>Audio Destacado</h2>
            <div>
                <audio controls>
                    <source src="Audio/Zelenski%20expuso%20ante%20el%20Congreso%20chileno%20FA%20y%20PC%20se%20restaron%20de%20conferencia%20-%20CHV%20Noticias%20%5BTubeRipper.com%5D.mp3" type="audio/mp3">
                    Tu navegador no soporta la reproducción de audio.
                </audio>
            </div>


        </section>
        <div class="container">
            <section id="deportes">
                <h2>Deportes</h2>
                <table>
                    @foreach($deportesNews as $newsItem)
                        <tr>
                            <td><a href="{{ route('news.show', $newsItem->id) }}">{{ $newsItem->title }}</a></td>
                        </tr>
                    @endforeach
                </table>
            </section>

            <section id="negocios">
                <h2>Negocios</h2>
                <table>
                    @foreach($negociosNews as $newsItem)
                        <tr>
                            <td><a href="{{ route('news.show', $newsItem->id) }}">{{ $newsItem->title }}</a></td>
                        </tr>
                    @endforeach
                </table>
            </section>
            <section id="otros">
                <h2>Otras Noticias</h2>
                <table>
                    @foreach($otrosNews as $newsItem)
                        <tr>
                            <td><a href="{{ route('news.show', $newsItem->id) }}">{{ $newsItem->title }}</a></td>
                        </tr>
                    @endforeach
                </table>
            </section>
        </div>
    </main>
    </body>

    <footer>
        <p>Derechos reservados &copy; El Faro 2023</p>
        <a href="{{ route('contact.form') }}" class="contact-link">Contact</a>
    </footer>

    <script>
        $(document).ready(function() {
            $('.contact-link').click(function(e) {
                e.preventDefault();
                var url = $(this).attr('href');

                $.get(url, function(data) {
                    $('body').append(data);
                    $('#contact-form').fadeIn();
                });
            });

            $(document).on('click', '.close-popup', function() {
                $('#contact-form').fadeOut(function() {
                    $(this).remove();
                });
            });
        });

    </script>


</div>
@endsection
