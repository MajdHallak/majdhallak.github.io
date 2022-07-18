<div class="container-fluid">
    <div class="row" style="">
        <div class="col-sm-auto bg-light">
            <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center">
                <a href="#about" class="d-block p-3 link-dark text-decoration-none" title="" data-bs-toggle="tooltip"
                    data-bs-placement="right" data-bs-original-title="Icon-only">
                    <h3>Portfolio</h3>
                </a>
                <ul
                    class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center align-items-center">
                    <li class="nav-item">
                        <a href="#edu" id="nav-edu" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                            data-bs-placement="right" data-bs-original-title="Home">
                            <img class="icon" src="/images/edu.png" alt="skills">
                        </a>
                    </li>
                    <li>
                        <a href="#skill" id="nav-skill" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                            data-bs-placement="right" data-bs-original-title="Dashboard">
                            <img class="icon" src="/images/skills-123.png" alt="skills">
                        </a>
                    </li>
                    <li>
                        <a href="#speciality" id="nav-spec" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                            data-bs-placement="right" data-bs-original-title="Orders">
                            <img class="icon" src="/images/spec.png" alt="speciality">
                        </a>
                    </li>
                    <li>
                        <a href="#social-media" id="nav-social-media" class="nav-link py-3 px-2" title=""
                            data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Products">
                            <i class="fas fa-hashtag bl"></i>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#blog" id="nav-edu" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip"
                            data-bs-placement="right" data-bs-original-title="Customers">
                            <i class="fas fa-blog"></i>
                        </a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid header" style="top: 0; right: 0;">
    <h1 class="name">Majd Hallak</h1>
    <img class="" src="images/header2.jpeg" style="right: 0; top: 0; width: 100%" alt="">
</div>

<div class="footer col-sm p-3 min-vh-100">
    <!-- content -->
    <div class="container">
        <ul>
            <h2 class="about" id="about">ABOUT:</h2>
            <p>I'm a website developer with front-end (html, css, js, bootstrap), and back-end advanced knowledge, my
                preferable area of work is back-end with php laravel or express js, plus working with databases
                mysql and mongodb.
            </p>
            <hr class="line" style="margin: 2em 0 2em 4em; border: 3px solid #482825">
            <h2 id="edu">
                Education
            </h2>
            <div class="list">
                <h1>Software Engineering - Bournemouth University, England</h1>
                <hr class="line">
                <h1>Mechanical Engineering - first year Bournemouth University, England</h1>
                <hr class="line">
                <h1>Foundation SCIMAT, England</h1>
                <hr class="line">
                <h1>Baccalaureate</h1>
                <hr class="line">
            </div>
        </ul>

        <ul>
            <h2 id="skill">
                <div class="background">Skills</div>
            </h2>
            <div class="list">
                <div class="cont">
                    <h1>Full Stack Web Devolopment</h1>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 65%; " aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">65%
                        </div>
                    </div>
                </div>
                <hr class="line">
                <div class="cont">
                    <h1>Python Flask</h1>
                    <div class="progress" style="">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">75%
                        </div>
                    </div>
                </div>
                <hr class="line">
                <div class="cont">
                    <h1>Python (numpy, pandas).</h1>
                    <div class="progress" style="">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">75%
                        </div>
                    </div>
                </div>
                <hr class="line">
                <div class="cont">
                    <h1>PHP laravel</h1>
                    <div class="progress" style="">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">fluent
                        </div>
                    </div>
                </div>
                <hr class="line">
                <div class="cont">
                    <h1>node express.js</h1>
                    <div class="progress" style="right: 0">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100"> fluent
                        </div>

                    </div>
                </div>
                <hr class="line">
                <div class="cont">
                    <h1>Flutter</h1>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 40%"
                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"> 40%
                        </div>
                    </div>
                </div>
                <hr class="line">
            </div>
        </ul>

    </div>
    {{-- submit a request --}}

    <form method="post" action="contact">
        <h2 id="contact" style="margin-top: 1em">
            <div class="background">Contact</div>
        </h2>

        {!! Form::open(['route' => 'contact.submit']) !!}

        <div class="form">

            @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session('message') }}
            </div>
            @endif

            <div class="form-group">
                <label for="exampleFormControlInput1">My Email Address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1"
                    placeholder="majdhallak@gmail.com" readonly>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Full Name</label>
                <input name="name" type="text" class="form-control" id="exampleFormControlInput1"
                    placeholder="John Doe">
            </div>
            <div class="form-group">
                <label for="inlineFormInputGroupUsername">Email Address</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input name="email" type="email" class="form-control" id="inlineFormInputGroupUsername"
                        placeholder="email">
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Subject</label>
                <textarea name="subject" class="form-control" id="exampleFormControlTextarea1" placeholder="Subject"
                    rows="1"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea name="message" class="form-control" id="exampleFormControlTextarea1"
                    placeholder="What can I help you with?" rows="4"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-light mb-2 mt-2" style="padding: 1% 2em">Send</button>
        </div>
        {!! Form::close() !!}
        {{--
    </form> --}}

    <div id="social-media">
        <div class="background">
            <img src="images/insta.png" alt="">
            {{-- <img src="images/google.png" alt="majdhallak@gmail.com"> --}}
            <img src="images/whatsapp.png" alt="">
        </div>
    </div>

</div>