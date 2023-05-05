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
        <section id="noticias">
            <h2>Ultimas Noticias</h2>
            <table>
                <tr>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Descripción</th>
                </tr>
                <tr>
                    <td><a href="Noticia%201.html">Trump afirma que los cargos en su contra son "infundados" y se hizo "para interferir en las elecciones de 2024
                        </a></td>
                    <td>Política</td>
                    <td>El ex Mandatario compareció frente a los medios para entregar su parecer respecto al proceso judicial que enfrenta en la ciudad de Nueva York, en un hecho inédito para la historia estadounidense.
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.emol.com/noticias/Espectaculos/2023/04/04/1091332/ana-obregon-gestacion-subrogada-nieta.html">Ana Obregón explica que guagua nacida por gestación subrogada fue concebida con genes de su hijo fallecido
                        </a></td>
                    <td>Sociedad</td>
                    <td>Según comentó la actriz, esta fue la última voluntad de Alessandro, antes de morir por un cáncer a sus 27 años.
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.emol.com/noticias/Espectaculos/2023/04/03/1091138/shakira-dejara-barcelona-miami.html">Shakira se despide de Barcelona para iniciar en Miami "un nuevo capítulo en busca de la felicidad"
                        </a></td>
                    <td>Cultura</td>
                    <td>"Aprendí que sin duda la amistad es más larga que el amor", señaló la colombiana en un mensaje en redes sociales.
                    </td>
                </tr>
            </table>

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
                    <tr>
                        <th>Título</th>
                        <th>Categoría</th>
                        <th>Descripción</th>
                    </tr>
                    <tr>
                        <td><a href="https://www.emol.com/noticias/Deportes/2023/04/04/1091353/grupos-chile-sudamericano-sub17.html">Perú fue humillado y es colista; Chile en zona de clasificación: Cómo están los grupos y lo que viene en el Sudamericano Sub17
                            </a></td>
                        <td>Fútbol</td>
                        <td>La "Roja" juega este miércoles.
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.emol.com/noticias/Deportes/2023/04/01/1091045/nba-marihuana-jugadores.html">La NBA despenaliza el consumo de la marihuana entre sus jugadores desde la próxima temporada
                            </a></td>
                        <td>Baloncesto</td>
                        <td>Ya no será ilegal y no habrán castigos.
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.emol.com/noticias/Deportes/2023/04/04/1091344/garin-houston-rival.html">Hay cambio en el rival de Garin para la segunda ronda del ATP de Houston: Contra quién y cuándo jugará</a></td>
                        <td>Tenis</td>
                        <td>El tenista chileno arrasó en su debut.
                        </td>
                    </tr>
                </table>
            </section>

            <section id="negocios">
                <h2>Negocios y Emprendimientos</h2>
                <table>
                    <tr>
                        <th>Título</th>
                        <th>Categoría</th>
                        <th>Descripción</th>
                    </tr>
                    <tr>
                        <td><a href="https://www.emol.com/noticias/Economia/2023/04/04/1091338/banco-central-tasa-de-interes.html">Banco Central mantiene la tasa de interés en 11,25% y afirma que controlar la inflación "tomará más tiempo de lo previsto"</a></td>
                        <td>Negocios</td>
                        <td>La decisión fue adoptada por la unanimidad de los miembros del Consejo del ente rector.
                        </td>
                    </tr>
                    <tr>
                        <td><a href="https://www.emol.com/noticias/Economia/2023/04/04/1091285/richard-branson.html">Virgin Orbit: La compañía de cohetes del multimillonario Richard Branson se declara en bancarrota en EE.UU.
                            </a></td>
                        <td>Negocios</td>
                        <td>El pasado 9 de enero, una misión de la firma fracasó en su intento de realizar el primer lanzamiento de un satélite al espacio.
                        </td>
                    </tr>
                    <tr>
                        <td><a href="#">"Lo pensó/lo hizo" con Carlos Aravena: Poliglota, la startup que captó la atención de Harvard y derriba barreras de idiomas
                            </a></td>
                        <td>Negocios</td>
                        <td>La meta de la plataforma chilena para aprender nuevas lenguas es llegar a convertirse en una empresa global, capaz de resolver diferentes desafíos y problemas en materia educativa.
                        </td>
                    </tr>
                </table>
            </section>
        </div>
    </main>
    </body>

    <footer>
        <p>Derechos reservados &copy; El Faro 2023</p>
    </footer>
</div>
@endsection
