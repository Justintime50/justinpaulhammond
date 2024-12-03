<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/0dd4ecd465.js" crossorigin="anonymous"></script>
    <meta name="keywords"
          content="justin, paul, hammond, web, design, it, business, resume, pro, developer, software, engineer, experience, management">
    <meta name="description" content="Justin Hammond - Senior Software Engineer, Technical Founder">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140798052-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-140798052-1');
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="justin-head"
                     src="https://f000.backblazeb2.com/file/shield-management/justinpaulhammond/avatar.png"
                     alt="Justin">
                {{ config('app.name') }}
            </a>
            <button class="navbar-toggler"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarTop"
                    type="button"
                    aria-controls="navbarTop"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse justify-content-end collapse" id="navbarTop">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link"
                           href="https://blog.justinpaulhammond.com"
                           target="_blank">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="https://github.com/justintime50"
                           target="_blank">
                            GitHub
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="https://youtube.com/c/justinhammond"
                           target="_blank">
                            YouTube
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="https://websites.justinpaulhammond.com"
                           target="_blank">
                            Websites
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-banner text-center">
        <h1>Hey, I'm Justin Hammond 👋</h1>
        <h3>Senior Software Engineer, Technical Founder</h3>
        <img class="justin-banner-image"
             src="https://f000.backblazeb2.com/file/shield-management/justinpaulhammond/justin-transparent.png"
             alt="Justin Hammond">
    </div>

    <div class="container" id="about">
        <h2>About Me</h2>
        <p class="text-center">I love all things tech. I've been programming for 18+ years, tinkering with electronics
            for 15+ years, and founding or building tech companies for 10+ years. I'm an open source fanatic, Apple
            fanboy, and love to explore new tech. I spend my time coding open source projects, tinkering with
            electronics and new tech products, and consulting teams on how to get things done.</p>

        <div class="row text-center">
            <div class="col pa-slideanim">
                <a href="https://github.com/Justintime50" target="_blank">
                    <i class="fab fa-github fa-4x"></i>
                </a>
            </div>
            <div class="col pa-slideanim">
                <a href="https://linkedin.com/in/justin-hammond" target="_blank">
                    <i class="fab fa-linkedin-in fa-4x"></i>
                </a>
            </div>
            <div class="col pa-slideanim">
                <a href="https://www.youtube.com/c/JustinHammond" target="_blank">
                    <i class="fab fa-youtube fa-4x"></i>
                </a>
            </div>
            <div class="col pa-slideanim">
                <a href="https://blog.justinpaulhammond.com" target="_blank">
                    <i class="fas fa-blog fa-4x"></i>
                </a>
            </div>
            <div class="col pa-slideanim">
                <a href="https://trailhead.salesforce.com/en/me/justinhammond" target="_blank">
                    <i class="fab fa-salesforce fa-4x"></i>
                </a>
            </div>
            <div class="col pa-slideanim">
                <a href="https://github.com/Justintime50/Justintime50/blob/main/resume.md" target="_blank">
                    <i class="fas fa-file-pdf fa-4x"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="bg-blue">
        <div class="container text-center" id="engineer">
            <h2>Software Engineering</h2>
            <p class="pa-slideanim">I have experience with a wide array of languages and frameworks. Listed below is a
                small sample of items I'm proficient with.</p>

            <div class="row">
                <div class="col pa-slideanim">
                    <i class="fab fa-python fa-3x"></i>
                    <h4>Python</h4>
                </div>
                <div class="col pa-slideanim">
                    <i class="fab fa-node-js fa-3x"></i>
                    <h4>JS/Node</h4>
                </div>
                <div class="col pa-slideanim">
                    <i class="fab fa-php fa-3x"></i>
                    <h4>PHP</h4>
                </div>
                <div class="col pa-slideanim">
                    <i class="fas fa-gem fa-3x"></i>
                    <h4>Ruby</h4>
                </div>
                <div class="col pa-slideanim">
                    <i class="fa-brands fa-golang fa-3x"></i>
                    <h4>Golang</h4>
                </div>
            </div>
            <div class="row">
                <div class="col pa-slideanim">
                    <i class="fab fa-laravel fa-3x"></i>
                    <h4>Laravel</h4>
                </div>
                <div class="col pa-slideanim">
                    <i class="fab fa-bootstrap fa-3x"></i>
                    <h4>Bootstrap</h4>
                </div>
                <div class="col pa-slideanim">
                    <i class="fab fa-aws fa-3x"></i>
                    <h4>AWS</h4>
                </div>
                <div class="col pa-slideanim">
                    <i class="fab fa-salesforce fa-3x"></i>
                    <h4>Salesforce</h4>
                </div>
                <div class="col pa-slideanim">
                    <i class="fab fa-wordpress fa-3x"></i>
                    <h4>Wordpress</h4>
                </div>
            </div>
            <div class="row">
                <div class="col pa-slideanim">
                    <i class="fas fa-database fa-3x"></i>
                    <h4>MySQL</h4>
                </div>
                <div class="col pa-slideanim">
                    <i class="fab fa-docker fa-3x"></i>
                    <h4>Docker/Vagrant</h4>
                </div>
                <div class="col pa-slideanim">
                    <i class="fab fa-git fa-3x"></i>
                    <h4>Git</h4>
                </div>
                <div class="col pa-slideanim">
                    <i class="fab fa-github fa-3x"></i>
                    <h4>Hub/Lab/Phab</h4>
                </div>
                <div class="col pa-slideanim">
                    <i class="fas fa-spinner fa-3x"></i>
                    <h4>CI/CD</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>News &#38; Articles</h2>
        <ul class="news-table-items">
            <li class="pa-slideanim">
                <a href="https://www.easypost.com/blog/2022-08-04-lessons-learned-overhauling-client-libraries-across-seven-languages"
                   target="_blank">
                    Lessons Learned Overhauling Client Libraries Across 7 Languages (EasyPost)
                </a>
            </li>
            <li class="pa-slideanim">
                <a href="https://utah.comcast.com/2013/05/20/congratulations-comcast-leaders-and-achievers-scholarship-winners/"
                   target="_blank">
                    Utah $10,000 Leaders &#38; Achievers Award Recipient
                </a>
            </li>
            <li class="pa-slideanim">
                <a href="https://chhighschool.wordpress.com/tag/justin-hammond/" target="_blank">
                    Copper Hills High School Comcast Scholarship Recognition
                </a>
            </li>
            <li class="pa-slideanim">
                See <a href="https://blog.justinpaulhammond.com" target="_blank">my blog</a>
                for additional articles.
            </li>
        </ul>
    </div>

    <footer class="text-center">
        <div class="container">
            <p>&#169; Justin Hammond, All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
