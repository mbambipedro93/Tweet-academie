<?php

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- <link rel="stylesheet" href="./scss/style.css"> -->
    <link rel="stylesheet" href="1.css">
    <script src="/JS/drop.js" defer></script>
    <script src="/JS/test.js" defer></script>

    <title>Profil</title>
</head>

<body>
    <header>
        <nav>
            <div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem;">
                <a href="/" class="d-block p-3 link-dark text-decoration-none" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-original-title="Icon-only">
                    <svg class="bi pe-none" width="40" height="32">
                        <use xlink:href="#bootstrap"><img src="./images/africa.png" alt="afrique " srcset="" width="65">
                        </use>
                    </svg>
                    <span class="visually-hidden">Icon-only</span>
                </a>
                <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                    <li class="nav-item">
                        <a href="actualites.php" class="nav-link active py-3 border-bottom rounded-0"
                            aria-current="page" data-bs-toggle="tooltip" data-bs-placement="right" aria-label="Home"
                            data-bs-original-title="Home">
                            <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Home">
                                <use xlink:href="#home"><img src="./images/home.svg" alt="home" srcset=""></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                            data-bs-placement="right" aria-label="Dashboard" data-bs-original-title="Dashboard">
                            <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard"><img
                                    src="./images/bell.svg" alt="">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                            data-bs-placement="right" aria-label="Orders" data-bs-original-title="Orders">
                            <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Orders">
                                <use xlink:href="#table"><img src="./images/comment-discussion.svg" alt="" srcset="">
                                </use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="profil.php" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                            data-bs-placement="right" aria-label="Products" data-bs-original-title="Products">
                            <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Products">
                                <use xlink:href="#grid"><img src="./images/person.svg" alt="" srcset=""></use>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link py-3 border-bottom rounded-0" data-bs-toggle="tooltip"
                            data-bs-placement="right" aria-label="Customers" data-bs-original-title="Customers">
                            <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Customers">
                                <img src="./images/plus-circle.svg" alt="" srcset="">
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="dropdown border-top">
                    <a href="profil.php"
                        class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://tinyurl.com/ycku5ym8" alt="mdo" width="24" height="24" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="#">Parametre</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Deconection</a></li>
                    </ul>
                </div>
            </div>

            <!-- <div>
                <img src="/image/WOMAN.png" alt="" width="80">
            </div>
            <div class="logo-nav">

                <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
                    <button type="button" class="btn btn-dark"><a href="actualiter.php"><img src="./image/home.png"
                                alt="" width="50"></a></button>
                    <button type="button" class="btn btn-dark"><a href="#"><img src="./image/notif.png" alt=""
                                width="40"></a></button>
                    <button type="button" class="btn btn-dark"><a href="#"><img src="./image/message.png" alt=""
                                width="50"></a></button>
                    <button type="button" class="btn btn-dark"><a href="profil.php"><img src="./image/Profile.png"
                                alt="" width="40"></a></button>
                    <button type="button" class="btn btn-dark"><a href="#"><img src="./image/plus.png" alt=""
                                width="40"></a></button>
                    <button type="button" class="btn btn-dark">Twitter</button>
                </div>
            </div> -->

        </nav>
    </header>

    <main>
        <button id="theme-btn">Changer de thème</button>

        <div class="TR">





            <div class="card-body">
                <div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Button</button>
                        <button class="btn btn-primary" type="button">Button</button>
                    </div>
                </div>

                <div class="PR">

                    <div class="card mb-3">
                        <div class="banner">
                            <img src="/image/akira.gif" class="card-img-top" alt="..."
                                style="width: 100%; height: 400px;">

                        </div>

                        <div class="card-body">
                            <div class="PP"><img src="/image/carapute.png" class="PPP" alt="..." width="100">
                            </div>
                            <h5 class="card-title">$nom</h5>
                            <div><small class="text-muted">Pseudo:</small>
                            </div>
                            <div><small class="text-muted">ville </small><small class="text-muted">Compte crée en
                                    **/**/**** </small>
                            </div>
                            <div><small class="text-muted">100 Following </small><small class="text-muted">578
                                    Followers</small>
                            </div>
                            <div>
                                <p class="card-text"><br>This is a wider card with supporting text below as a
                                    natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <a href="#" class="modification">Editer le Profil</a>



                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a id="ok" class="nav-link active" aria-current="page" href="">Mes Tweets</a>

                            <!-- </li>
                            <li class="nav-item">
                                <a id="nav" class="nav-link active" href="">Repost</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="">Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active">Likes</a>
                            </li> -->
                        </ul>
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item">
                                <div class="mestwit">
                                    <div>
                                        <img src="/image/carapute.png" alt="carapuce" srcset="" class="PPT" width="50">

                                    </div>
                                    <div>
                                        <p><strong>$NOM </strong> <small class="text-muted">@pseudo.NOV 30,
                                                2022</small></p>
                                    </div>

                                </div>
                                <div class="contenue">
                                    <p><br>This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="like">
                                    <div>♠7</div>
                                    <div>♣9</div>
                                    <div>♥10</div>
                                    <!-- Example split danger button -->
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn">+</button>
                                        <div id="myDropdown" class="dropdown-content">
                                            <a href="#">Partager</a>
                                            <a href="#">Message priver</a>
                                            <a href="#">Copier le lien</a>
                                        </div>
                                    </div>

                                </div>

                            <li class="list-group-item">
                                <div class="mestwit">
                                    <div><img src="/image/carapute.png" alt="carapuce" srcset="" class="PPT" width="50">
                                    </div>
                                    <div>
                                        <p><strong>$NOM </strong> <small class="text-muted">@pseudo.NOV 30,
                                                2022</small></p>
                                    </div>
                                </div>
                                <div class="contenue">
                                    <p>
                                    <p><br><img src="/image/JC1.jpg" alt="" srcset="" width="600" class="img-fluid">
                                    </p>
                                    </p>
                                </div>

                                <div class="like">
                                    <div>♠7</div>
                                    <div>♣9</div>
                                    <div>♥10</div>
                                    <!-- Example split danger button -->
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn">+</button>
                                        <div id="myDropdown" class="dropdown-content">
                                            <a href="#">Partager</a>
                                            <a href="#">Message priver</a>
                                            <a href="#">Copier le lien</a>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="mestwit">
                                    <div>
                                        <img src="/image/carapute.png" alt="carapuce" srcset="" class="PPT" width="50">

                                    </div>
                                    <div>
                                        <p><strong>$NOM </strong> <small class="text-muted">@pseudo.NOV 30,
                                                2022</small></p>
                                    </div>

                                </div>
                                <div class="contenue">
                                    <p><br>This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                                <div class="like">
                                    <div>♠7</div>
                                    <div>♣9</div>
                                    <div>♥10</div>
                                    <!-- Example split danger button -->
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn">+</button>
                                        <div id="myDropdown" class="dropdown-content">
                                            <a href="#">Partager</a>
                                            <a href="#">Message priver</a>
                                            <a href="#">Copier le lien</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="mestwit">
                                    <div>
                                        <img src="/image/carapute.png" alt="carapuce" srcset="" class="PPT" width="50">

                                    </div>
                                    <div>
                                        <p><strong>$NOM </strong> <small class="text-muted">@pseudo.NOV 30,
                                                2022</small></p>
                                    </div>

                                </div>
                                <div class="contenue">
                                    <p><br>This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional </p>
                                </div>
                                <div class="like">
                                    <div>♠7</div>
                                    <div>♣9</div>
                                    <div>♥10</div>
                                    <!-- Example split danger button -->
                                    <div class="dropdown">
                                        <button onclick="myFunction()" class="dropbtn">+</button>
                                        <div id="myDropdown" class="dropdown-content">
                                            <a href="#">Partager</a>
                                            <a href="#">Message priver</a>
                                            <a href="#">Copier le lien</a>
                                        </div>
                                    </div>
                                </div>
                            </li>




                        </ul>


                    </div>

                    <div class="card">
                        <div class="card-header">

                            <div class="container-fluid">
                                <form class="d-flex" role="search" method="POST">
                                    <input name="name" class="form-control me-2" type="search"
                                        placeholder="Rechercher sur Twitter" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit"
                                        name="valider">Recharger</button>

                                </form>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Resultat des recherches</h5>
                                <!-- <p class="card-text">
                                <div class="resulta">
                                    <ul>
                                        <li>Resultat 1 </li>
                                        <li>Resultat 2 </li>
                                        <li>Resultat 3 </li>
                                        <li>esultat 4</li>
                                    </ul>
                                </div>
                                </p> -->
                                <section class="'afficher-users">
                                    <div class="resulta">
                                        <p>
                                            <?php

                                            if ($allusers == 1) {

                                                foreach ($row_search as $allusers) {
                                                    ?>
                                                    <a
                                                        href='profil.php?username=<?php echo urlencode($allusers["username"]); ?>'><?php echo $arobase . $allusers["username"]; ?><br></a>
                                                    <?php
                                                }
                                            } else {
                                                echo 'Aucun resultat';
                                            }

                                            ?>
                                        </p>
                                    </div>

                                </section>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">


                </div>

            </div>

        </div>


    </main>
    <footer></footer>
    <!-- Code injected by live-server -->
    <script>
        // <![CDATA[  <-- For SVG support
        if ('WebSocket' in window) {
            (function () {
                function refreshCSS() {
                    var sheets = [].slice.call(document.getElementsByTagName("link"));
                    var head = document.getElementsByTagName("head")[0];
                    for (var i = 0; i < sheets.length; ++i) {
                        var elem = sheets[i];
                        var parent = elem.parentElement || head;
                        parent.removeChild(elem);
                        var rel = elem.rel;
                        if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                            var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                            elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                        }
                        parent.appendChild(elem);
                    }
                }
                var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
                var address = protocol + window.location.host + window.location.pathname + '/ws';
                var socket = new WebSocket(address);
                socket.onmessage = function (msg) {
                    if (msg.data == 'reload') window.location.reload();
                    else if (msg.data == 'refreshcss') refreshCSS();
                };
                if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                    console.log('Live reload enabled.');
                    sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
                }
            })();
        }
        else {
            console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
        }
    // ]]>
    </script>
</body>

</html>