@extends('layouts.app')
@section('content')

    <div class="container">
        <div>
            <img src="jpg/cropped-lighthouse-banner.jpg" alt="Banner de un faro" class="img-fluid w-100">
        </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#deportes">Deporte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#negocios">Negocios</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main>
            <section id="advertisements">
                <div class="container">
                    <h2 class="h2 mb-4">Anuncios</h2>
                    <ul class="list-group">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2694450375352679" crossorigin="anonymous"></script>
                        <li class="list-group-item"><a href="#">Ad 1</a></li>
                    </ul>
                </div>
            </section>

            <section id="noticias">
                <div class="container">
                    <h2 class="h2 mb-4">Ultimas Noticias</h2>
                    <ul class="list-group">
                        @foreach($latestNews as $newsItem)
                            <li class="list-group-item">
                                <a href="{{ route('news.show', $newsItem->id) }}">{{ $newsItem->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
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
                    <div class="container">
                        <h2 class="section-title">Deportes</h2>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                @foreach($deportesNews as $newsItem)
                                    <tr>
                                        <td><a href="{{ route('news.show', $newsItem->id) }}">{{ $newsItem->title }}</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <section id="negocios">
                    <div class="container">
                        <h2 class="section-title">Negocios</h2>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                @foreach($negociosNews as $newsItem)
                                    <tr>
                                        <td><a href="{{ route('news.show', $newsItem->id) }}">{{ $newsItem->title }}</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <section id="otros">
                    <div class="container">
                        <h2 class="section-title">Otras Noticias</h2>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                @foreach($otrosNews as $newsItem)
                                    <tr>
                                        <td><a href="{{ route('news.show', $newsItem->id) }}">{{ $newsItem->title }}</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <br>
                <br>
            </div>
        </main>
    </div>

    <footer class="text-center bg-dark">
        <div class="container text-white py-4 py-lg-5">
            <ul class="list-inline">
                <li class="list-inline-item me-4">
                    <a href="{{ route('contact.form') }}" class="contact-link">Contacto</a>
                </li>
            </ul>
            <p class="text-muted mb-0">Derechos reservados &copy; El Faro 2023</p>
        </div>
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

@endsection
