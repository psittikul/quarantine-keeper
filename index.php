<!doctype html>
<html>

<head>
    <title>Quarantine Keeper</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="/flip-js/dist/flip.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <!-- Google Fonts link -->
    <link href="https://fonts.googleapis.com/css?family=Bellota+Text|Lato|Muli|Sen|Work+Sans|Lobster&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <!-- As a link -->
        <nav class="navbar" id="topNav">
            <a id="headerTitle" class="navbar-brand" href="#">
                <h1>Quarantine Keeper</h1>
            </a>
            <div class="tick" data-did-init="handleTickInit">

                <div data-repeat="true" data-layout="horizontal fit" data-transform="preset(d, h, m, s) -> delay">

                    <div class="tick-group">

                        <div data-key="value" data-repeat="true" data-transform="pad(00) -> split -> delay">

                            <span data-view="flip"></span>

                        </div>

                        <span data-key="label" data-view="text" class="tick-label"></span>

                    </div>

                </div>

            </div>
        </nav>
        <div id="stickySidenav">
            <ul>
                <a href="#physical">
                    <li class="sidenav-item"><i class="fas fa-heartbeat"></i> Physical Health</li>
                </a>
                <a href="#mental">
                    <li class="sidenav-item"><i class="fas fa-hand-holding-heart"></i> Mental Health</li>
                </a>
                <a href="#activity">
                    <li class="sidenav-item"><i class="fas fa-puzzle-piece"></i> Activity</li>
                </a>
                <a href="#todo">
                    <li class="sidenav-item"><i class="fas fa-tasks"></i> Things To Do</li>
                </a>
            </ul>
        </div>
        <div id="contentBody">
            <div class="row section-header">
                <div class="col-sm">
                    <h3 class="section-title" id="physical">
                        <i class="fas fa-heartbeat"></i> Physical Health
                    </h3>
                    <span id="medsBtnWrapper" data-toggle="modal" data-target="#medsModal">
                        <button type="button" id="medsBtn" data-toggle="tooltip" data-placement="right" title="Did you take your meds today?">
                            <img src="assets/medicine.png" />
                        </button>
                    </span>
                </div>
            </div>
            <div class="row section-row">
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/food.png" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Meals</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/drink.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Water</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/sleeping.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sleep</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/exercise.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Exercise</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mental Health section -->
            <div class="row section-header">
                <div class="col-sm">
                    <h3 class="section-title" id="mental"><i class="fas fa-hand-holding-heart"></i> Mental Health</h3>
                </div>
            </div>
            <div class="row section-row">
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/conversation.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">(Real) Conversations</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/existential-crises.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Existential Crises</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/sad.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Mental Breaks</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/mood.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">General Mood</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activity section -->
            <div class="row section-header">
                <div class="col-sm">
                    <h3 class="section-title" id="activity"><i class="fas fa-puzzle-piece"></i> Activity</h3>
                </div>
            </div>
            <div class="row section-row">
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/reading.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Reading</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/programming.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Programming</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/sewing.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Crafting</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/netflix.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Watching</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Things to Do Section -->
            <div class="row section-header">
                <div class="col-sm">
                    <h3 class="section-title" id="todo"><i class="fas fa-tasks"></i> Things To Do (Instead of Losing It)</h3>
                </div>
            </div>
            <div class="row section-row">
                <div class="col-sm-4">
                    <ul class="todo-list">
                        <li>
                            <input type="checkbox"> Tattoo web app
                        </li>
                        <li>
                            <input type="checkbox"> Fix whiteboard thing
                        </li>
                        <li><input type="checkbox"> Practice Thai</li>
                        <li><input type="checkbox"> Practice French</li>
                        <li><input type="checkbox"> Sew masks</li>
                        <li><input type="checkbox"> Decorate boxing gloves</li>
                        <li><input type="checkbox"> Yoga</li>
                        <li><input type="checkbox"> Pam, Penny & I as Naruto characters</li>
                        <li><input type="checkbox"> Practice drawing</li>
                        <li><input type="checkbox"> Big Brothers Big Sisters training</li>

                    </ul>
                </div>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">

                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="medsModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Did you take your meds today?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul id="medsList">
                        <li>
                            <button type="button" id="adderallBtn" class="med-btn" data-toggle="tooltip" title="Adderall" data-taken="no">
                                <div class="overlay"></div>
                                <img src="assets/adderall.png">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="med-btn" id="lamictalBtn" data-toggle="tooltip" title="Lamictal" data-taken="no">
                                <div class="overlay"></div>
                                <img src="assets/lamictal.png">
                            </button>
                        </li>
                        <li>
                            <button type="button" class="med-btn" id="nikkiBtn" data-toggle="tooltip" title="Nikki" data-taken="no">
                                <div class="overlay"></div>
                                <img src="assets/bc.png" />
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/8819ef24c8.js" crossorigin="anonymous"></script>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Your scripts question mark? -->
    <script src="js/scripts.js"></script>
    <!-- BootStrap scripts -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
        function handleTickInit(tick) {

            // format of since date is ISO8601
            // https://en.wikipedia.org/wiki/ISO_8601

            // '2000'                       to count up from 2000
            // '2000-01-31T12:00:00'        to count up from 12 o'clock on the 31st of January 2000
            // '2000-01-15T10:00:00+01:00'  to count up from 10 o'clock GMT+1 on the 15th of January 2000

            // create counter
            Tick.count.up('2020-03-16T20:00:00', {
                format: ['d', 'h', 'm', 's']
            }).onupdate = function(value) {
                tick.value = value;
            };

        }
    </script>
    <script src="/flip-js/dist/flip.min.js"></script>
</body>

</html>