@extends('layouts/app')
@section('title', 'Home')
@section('content')
    <!-- Showcase Area -->
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Become a <span class="text-warning">Web Developer</span></h1>
                    <p class="lead my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="{{url('/register')}}"><button class="btn btn-primary btn-lg">Start The
                        Enrollment</button></a>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="{{asset('assets/images/showcase.svg')}}" alt="showcase-image">
            </div>
        </div>
    </section>
    <!-- Boxes -->
    <section class="p-5 pt-lg-2">
        <div class="container">
            <div class="text-center">
                <p class="h2"><strong>Recommended Courses For You</strong></p>
            </div>
            <div class="row text-center g-3">
                <div class="col-md">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('assets/images/html.png')}}" alt="Card image cap">
                        <div class="card-body text-center">
                            <a href="#" class=""><p>HTML</p></a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="card-title mb-3">Hybrid</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, eum!
                            </p>
                            <a href="#" class="btn btn-dark">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-people"></i>
                            </div>
                            <h3 class="card-title mb-3">In Person</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, eum!
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="h1 mb-3">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <h3 class="card-title mb-3">Virtual</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, eum!
                            </p>
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Learn Section -->
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md">
                    <img src="{{asset('assets/images/fundamentals.svg')}}" class="img-fluid" alt="programming fundamentals image">
                </div>
                <div class="col-md p-5">
                    <h3>Learn The Fundamentals</h3>
                    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In voluptatum quibusdam voluptates
                        facilis molestias esse quae! Culpa voluptas minima quaerat velit autem sint quasi rem
                        consectetur, at exercitationem consequuntur? Hic!</p>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i> Read More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="learn" class="p-5 bg-dark">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5 text-light">
                    <h3>Learn React</h3>
                    <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In voluptatum quibusdam voluptates
                        facilis molestias esse quae! Culpa voluptas minima quaerat velit autem sint quasi rem
                        consectetur, at exercitationem consequuntur? Hic!</p>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i> Read More
                    </a>
                </div>
                <div class="col-md">
                    <img src="{{asset('assets/images/react.svg')}}" class="img-fluid" alt="reactjs">
                </div>
            </div>
        </div>
    </section>

    <!-- Question Accordion -->
    <section id="questions" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush" id="questions">
                <!-- Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-one">
                            Where exactly are you located?
                        </button>
                    </h2>
                    <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                        <div class="accordion-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perferendis ex omnis cum eaque
                            vitae fugit similique laboriosam, labore autem facilis! Natus dolorem inventore, corporis
                            earum sint minima aspernatur vitae architecto repudiandae ad, accusantium in minus quas non
                            aliquid iure excepturi. Laudantium placeat, sequi accusamus perferendis architecto autem
                            aliquam sunt cum?
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-two">
                            How much does it cost to attend?
                        </button>
                    </h2>
                    <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
                            autem vitae possimus blanditiis sed deserunt sequi, adipisci necessitatibus obcaecati
                            distinctio officiis voluptate dolore eius praesentium itaque atque modi eaque quod explicabo
                            consequatur in. Laborum nemo sit laudantium deserunt maxime. Officia quia quasi ad error
                            dolorum sed aliquid illo, corrupti nemo?</div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-three">
                            What do I need to know?
                        </button>
                    </h2>
                    <div id="question-three" class="accordion-collapse collapse"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                            repellat ratione consectetur adipisci asperiores, aspernatur quisquam, quia labore vero
                            ipsum, doloremque recusandae debitis fuga tenetur? Nesciunt error doloribus aliquam commodi
                            quae rerum quasi fugiat quos nulla, numquam quaerat nostrum iure dolorem esse alias impedit
                            mollitia aut. Itaque temporibus maxime soluta?</div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-four">
                            How do I signup?
                        </button>
                    </h2>
                    <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                            repellat ratione consectetur adipisci asperiores, aspernatur quisquam, quia labore vero
                            ipsum, doloremque recusandae debitis fuga tenetur? Nesciunt error doloribus aliquam commodi
                            quae rerum quasi fugiat quos nulla, numquam quaerat nostrum iure dolorem esse alias impedit
                            mollitia aut. Itaque temporibus maxime soluta?</div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#question-five">
                            Do you help me find a job?
                        </button>
                    </h2>
                    <div id="question-five" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                            repellat ratione consectetur adipisci asperiores, aspernatur quisquam, quia labore vero
                            ipsum, doloremque recusandae debitis fuga tenetur? Nesciunt error doloribus aliquam commodi
                            quae rerum quasi fugiat quos nulla, numquam quaerat nostrum iure dolorem esse alias impedit
                            mollitia aut. Itaque temporibus maxime soluta?</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instructors Area -->
    <section id="instructors" class="p-5 bg-primary">
        <div class="container">
            <h2 class="text-center text-white">Our Instructors</h2>
            <p class="lead text-center text-white mb-5">Our Instructors all have 5+ years working as a web developer in
                the industry.</p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3" alt=""
                                srcset="">
                            <h3 class="card-title mb-3">Jhon Doe</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                                provident cumque iusto? Fuga, hic eaque!</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle mb-3"
                                alt="" srcset="">
                            <h3 class="card-title mb-3">Jolie</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                                provident cumque iusto? Fuga, hic eaque!</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle mb-3" alt=""
                                srcset="">
                            <h3 class="card-title mb-3">Smith</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                                provident cumque iusto? Fuga, hic eaque!</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/5.jpg" class="rounded-circle mb-3"
                                alt="" srcset="">
                            <h3 class="card-title mb-3">Jennifer</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                                provident cumque iusto? Fuga, hic eaque!</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact & Map -->
    <section class="p-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center mb-4">Contact Info</h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item">
                            <span class="fw-bold">Main Location:</span>50 Main st Boston MA
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Enrollment Phone:</span>555-5555
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Student Phone:</span>(333)333-3333
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Enrollment Email:</span>enroll@frondend.test
                        </li>
                        <li class="list-group-item">
                            <span class="fw-bold">Student Email:</span>student@frondedbc.test
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115681.29592731265!2d-77.47713270775661!3d25.0326996781907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x892f7c99b981dbc9%3A0x2aef01d3485e50d2!2sNassau%2C%20Bahamy!5e0!3m2!1spl!2spl!4v1624445118063!5m2!1spl!2spl"
                        class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

@endsection