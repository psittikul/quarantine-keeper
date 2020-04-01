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
            <!-- Count up timer for days in social isolation or whatever -->
            <div class="countup" id="countup1">
                <span class="timeel days">00</span>
                <span class="timeel timeRefDays">days</span>
                <span class="timeel hours">00</span>
                <span class="timeel timeRefHours">hours</span>
                <span class="timeel minutes">00</span>
                <span class="timeel timeRefMinutes">minutes</span>
                <span class="timeel seconds">00</span>
                <span class="timeel timeRefSeconds">seconds</span>
            </div>
        </nav>
        <div class="tick" data-did-init="handleTickInit">

            <div data-repeat="true" data-layout="horizontal center fit" data-transform="preset(d, h, m, s) -> delay">

                <div class="tick-group">

                    <div data-key="value" data-repeat="true" data-transform="pad(00) -> split -> delay">

                        <span data-view="flip"></span>

                    </div>

                    <span data-key="label" data-view="text" class="tick-label"></span>

                </div>

            </div>

        </div>
        <div id="stickySidenav">
            <ul>
                <a href="#physical">
                    <li class="sidenav-item">Physical Health</li>
                </a>
                <a href="#mental">
                    <li class="sidenav-item">Mental Health</li>
                </a>
                <a href="#activity">
                    <li class="sidenav-item">Activity</li>
                </a>
                <a href="#todo">
                    <li class="sidenav-item">Things To Do</li>
                </a>
            </ul>
        </div>
        <div id="contentBody">
            <div class="row section-header">
                <div class="col-sm">
                    <h3 class="section-title" id="physical">
                        <i class="fas fa-heartbeat"></i> Physical Health
                    </h3>
                    <h4 id="medicationHeader">DID YOU TAKE YOUR MEDS?</h4>
                    <ul id="medList">
                        <li>Adderall XR</li>
                        <li>Lamictal</li>
                        <li>Nikki</li>
                        <li>Clonidine</li>
                        <li>Adderall IR</li>
                    </ul>
                </div>
            </div>
            <div class="row section-row">
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/brain.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"># of Meals Eaten</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/brain.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Water Drank</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/brain.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hours of Sleep</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/brain.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hours of Exercise</h5>
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
                            <h5 class="card-title"># of (Real) Conversations</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/brain.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"># of Existential Crises</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/brain.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"># of Mental Breaks</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/brain.png" class="card-img-top" alt="...">
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
                        <img src="assets/conversation.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"># of Pages/Books Read</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/brain.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Time Spent Programming</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/brain.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Time Spent Crafting</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <img src="assets/brain.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Shows/Movies Watched</h5>
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
                    </ul>
                </div>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">

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

            // Uncomment to set labels to different language ( in this case Dutch )
            /*
            var locale = {
                YEAR_PLURAL: 'Jaren',
                YEAR_SINGULAR: 'Jaar',
                MONTH_PLURAL: 'Maanden',
                MONTH_SINGULAR: 'Maand',
                WEEK_PLURAL: 'Weken',
                WEEK_SINGULAR: 'Week',
                DAY_PLURAL: 'Dagen',
                DAY_SINGULAR: 'Dag',
                HOUR_PLURAL: 'Uren',
                HOUR_SINGULAR: 'Uur',
                MINUTE_PLURAL: 'Minuten',
                MINUTE_SINGULAR: 'Minuut',
                SECOND_PLURAL: 'Seconden',
                SECOND_SINGULAR: 'Seconde',
                MILLISECOND_PLURAL: 'Milliseconden',
                MILLISECOND_SINGULAR: 'Milliseconde'
            };

            for (var key in locale) {
                if (!locale.hasOwnProperty(key)) { continue; }
                tick.setConstant(key, locale[key]);
            }
            */

            var nextYear = (new Date()).getFullYear() + 1;

            Tick.count.down(nextYear + '-01-01').onupdate = function(value) {
                tick.value = value;
            };

        }
    </script>
    <script src="/flip-js/dist/flip.min.js"></script>
</body>

</html>