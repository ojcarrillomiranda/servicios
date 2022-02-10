<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Asistencia en linea</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Consulting Website Template Free Download" name="keywords">
        <meta content="Consulting Website Template Free Download" name="description">

        <!-- Favicon -->
        <link href="{{ asset('web/img/favicon.ico') }}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('web/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('web/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('web/css/style.css') }}" rel="stylesheet">
        <link rel="icon" type="image/png" href="{{asset('iconos/world-grid.png')}}">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="far fa-clock"></i>
                                <h2>8:00 - 9:00</h2>
                                <p>Mon - Fri</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <h2>+123 456 7890</h2>
                                <p>For Appointment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="" class="navbar-brand"><img src="{{ asset('iconos/world-grid.png') }}" alt=""> asistencia</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{ route('web') }}" class="nav-item nav-link active">Inicio</a>
                        <a href="about.html" class="nav-item nav-link">Quienes somos</a>
                        <a href="#feature" class="nav-item nav-link">Servicios</a>
                        <a href="advisor.html" class="nav-item nav-link">Advisor</a>
                        <a href="{{ route('contacto') }}" class="nav-item nav-link">contacto</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Registrarse</a>
                            <div class="dropdown-menu">
                                  <a href="blog.html" class="dropdown-item">Profesionales</a>
                                  <a href="blog.html" class="dropdown-item">Clientes</a>
                            </div>
                        </div>
                        <a href="{{ route('login') }}" class="nav-item nav-link" target="_blank">Inicio de sesion</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{ asset('web/img/carousel-1.jpg') }}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>La forma más rápida de lograr el éxito</h1>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat at lectus in malesuada
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-play rounded-pill" data-toggle="modal" data-src="https://youtu.be/gu1ajw2RI5U" data-target="#videoModal"><i class="fa fa-play"></i>Conócenos </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{ asset('web/img/carousel-2.jpg') }}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Su éxito Nuestro logro</h1>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi soluta quae omnis, provident hic vel doloribus commodi est nemo distinctio harum expedita. Quo in maiores iusto unde architecto voluptatibus quod.
                            </p>
                            {{-- <div class="carousel-btn">
                                <a class="btn" href=""><i class="fa fa-link"></i>Get Started</a>
                                <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/watch?v=UGCHO6tEYdo" data-target="#videoModal"><i class="fa fa-play"></i>Watch Video</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="{{asset('web/img/carousel-3.jpg')}}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Su Negocio Nuestro Esfuerzo</h1>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt doloremque ratione non, ab perferendis quam harum maxime minus tenetur consequatur, debitis nulla veritatis dignissimos veniam beatae, ea velit deleniti dicta.}
                            </p>
                            {{-- <div class="carousel-btn">
                                <a class="btn" href=""><i class="fa fa-link"></i>Get Started</a>
                                <a class="btn btn-play" data-toggle="modal" data-src="https://www.youtube.com/watch?v=UGCHO6tEYdo" data-target="#videoModal"><i class="fa fa-play"></i>Watch Video</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/vYUdIdgG3mQ" title="Conócenos más" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->


        <!-- Fact Start -->
        <div class="fact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="{{ asset('web/img/icon-4.png') }}" alt="Icon">
                            <h2>Equipo calificado</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="{{ asset('web/img/icon-1.png') }}" alt="Icon">
                            <h2>Enfoque individual</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="{{ asset('web/img/icon-8.png') }}" alt="Icon">
                            <h2>100% de éxito</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="fact-item">
                            <img src="{{ asset('web/img/icon-6.png') }}" alt="Icon">
                            <h2>Satisfacción 100%</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fact Start -->


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="about-img">
                            <div class="about-img-1">
                                <img src="{{ asset('web/img/about-2.jpg') }}" alt="Image">
                            </div>
                            <div class="about-img-2">
                                <img src="{{ asset('web/img/about-1.jpg') }}" alt="Image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <p>Aprende Sobre Nosotros</p>
                            <h2>25 años de experiencia</h2>
                        </div>
                        <div class="about-text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                            <a class="btn rounded-pill" href="">Leer más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

         <!-- Feature Start -->
         <div class="feature" id="feature">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-md-6">
                        <div class="feature-img">
                            <img src="{{ asset('web/img/business-man.png') }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-header">
                            <p>Nuestra característica</p>
                            <h2>¿Por qué elegirnos?</h2>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus
                        </p>
                        <div class="row counters">
                            <div class="col-6">
                                <i class="fa fa-user"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">{{ $conteo_usuarios }}</h2>
                                    <p>Nuestro personal</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-users"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">200</h2>
                                    <p> Nuestros clientes</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-check"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">300</h2>
                                    <p>Proyectos completados</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <i class="fa fa-running"></i>
                                <div class="counters-text">
                                    <h2 data-toggle="counter-up">400</h2>
                                    <p>Proyectos en ejecución</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header">
                    <p>Servicios en linea</p>
                    <h2>Nuestros mejores servicios en linea</h2>
                </div>
                <div class="row">
                    @foreach ($categorias as $categoria )
                    <div class="col-lg-3 col-md-6">
                        <a href="">
                            <div class="service-item">
                                <img src="{{ $categoria->image->url }}" alt="Icon">
                                <h3>{{ $categoria->nombre }}</h3>
                                <p>
                                    {{ $categoria->descripcion }}
                                </p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <a class="btn btn-outline-dark rounded-pill" id="verMas" href="">Ver mas...</a>
            </div>
        </div>
        <!-- Service End -->



        <!-- Team Start -->
        <div class="team mt-5">
            <div class="container">
                <div class="section-header">
                    <p>Conozca a nuestros profesionales</p>
                    <h2>Nuestro equipo de profesionales</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('web/img/team-1.jpg') }}" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Donald John</h2>
                                <p>Fundador y jefe ejecutivo</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('web/img/team-2.jpg') }}" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Adam Phillips</h2>
                                <p>Diseñador grafico</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('web/img/team-3.jpg') }}" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>Thomas Olsen</h2>
                                <p>Experto en exel</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ asset('web/img/team-4.jpg') }}" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>James Alien</h2>
                                <p>Tutor</p>
                                <div class="team-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header">
                    <p>Comentarios de Nuestros Clientes</p>
                    <h2>Comentarios de clientes 100% positivos</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="{{ asset('web/img/testimonial-1.jpg') }}" alt="Image">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat
                        </p>
                        <h2>nombre del cliente</h2>
                        <h3>Profesional</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{ asset('web/img/testimonial-2.jpg') }}" alt="Image">
                        <p>
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ratione id unde omnis ducimus corrupti laudantium soluta iure, doloremque neque error quae sit est. Officiis odit id numquam laborum ad!
                        </p>
                        <h2>nombre del cliente</h2>
                        <h3>Profesional</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{ asset('web/img/testimonial-3.jpg') }}" alt="Image">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error quos enim sequi repellat possimus eius fuga quam, eum illo necessitatibus deleniti reprehenderit nulla commodi animi, quia sint, temporibus placeat tenetur?
                        </p>
                        <h2>nombre del cliente</h2>
                        <h3>Profesional</h3>
                    </div>
                    <div class="testimonial-item">
                        <img src="{{ asset('web/img/testimonial-4.jpg') }}" alt="Image">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, harum libero totam incidunt, assumenda, iusto ut magni nisi impedit laboriosam neque labore unde quasi quidem recusandae possimus sunt aliquid facere.
                        </p>
                        <h2>nombre del cliente</h2>
                        <h3>Profesional</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        {{-- <div class="contact">
            <div class="container">
                <div class="section-header">
                    <p>Póngase en contacto</p>
                    <h2>Ponte en contacto para cualquier consulta</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Our Head Office</h3>
                                <p>123 Street, New York, USA</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Call for Help</h3>
                                <p>+012 345 6789</p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="contact-text">
                                <h3>Email for Information</h3>
                                <p>info@example.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Contact End -->


        <!-- Blog Start -->
        {{-- <div class="blog">
            <div class="container">
                <div class="section-header">
                    <p>Consulting Blog</p>
                    <h2>Latest From Our Consulting Blog</h2>
                </div>
                <div class="owl-carousel blog-carousel">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('web/img/blog-1.jpg') }}" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Category</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                                <a class="btn" href="">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('web/img/blog-2.jpg') }}" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Category</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                                <a class="btn" href="">Leer más</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('web/img/blog-3.jpg') }}" alt="Blog">
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                            <div class="blog-meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Category</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <div class="blog-text">
                                <p>
                                    Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                </p>
                                <a class="btn" href="">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="footer-link">
                            <h2>Quick Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('web/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('web/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('web/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('web/lib/counterup/counterup.min.js') }}"></script>

        <!-- Contact Javascript File -->
        <script src="{{ asset('web/mail/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{ asset('web/mail/contact.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('web/js/main.js') }}"></script>
    </body>
</html>
