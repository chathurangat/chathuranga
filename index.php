<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8" />
    <title>Curriculum Vitae - Chathuranga Tennakoon</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.css" rel="stylesheet" />

    <!-- Plugins -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="plugins/flexslider/flexslider.css" rel="stylesheet" />

    <!-- Theme style -->
    <link href="css/theme-style.css" rel="stylesheet" />

    <!--Your custom colour override - a starter template/example for overriding theme colours -->
    <link href="css/alternative-colour.css" rel="stylesheet" />

    <!-- Put all your custom code/overrides here -->
    <link href="css/custom-style.css" rel="stylesheet" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->

    <!--<link rel="shortcut icon" href="img/icons/favicon.png" />-->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/icons/114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/icons/72x72.png" />
    <link rel="apple-touch-icon-precomposed" href="img/icons/default.png" />
    <!--<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css' />-->
    <!--<link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css' />-->
    <link href="css_online/googleApi1.css" rel="stylesheet" type="text/css"/>
    <link href="css_online/googleApi2.css" rel="stylesheet" type="text/css"/>

    <!--Retina.js plugin - @see: http://retinajs.com/-->
    <!--<script src="plugins/retina/retina.js"></script>-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="jquery-2.0.3.min.js"> </script>
    <script src="jquery.validate.min.js"> </script>

    <script>
        $(function() {

            $("#contact-form").validate({
                rules: {
                    user_name: {
                        minlength: 2,
                        required: true
                    },
                    user_email: {
                        required: true,
                        email: true
                    },
                    message: {
                        minlength:5,
                        required: true
                    }
                },
                messages: {
                    user_name: {
                        minlength: "At least two characters are required",
                        required: "Your Name is Required"
                    },
                    user_email:{
                        email: "Email Provided is not Valid",
                        required: "Your Email is Required"
                    },
                    message:{
                        required:"Message is Required",
                        minlength: "At least five characters are required"
                    }
                },
                submitHandler: function(form) {
//                    form.submit();
                    $.ajax({
                        type: "POST",
                        url: "emailScript.php",
                        data: $("#contact-form").serialize(),
                        success: function(data){
                            $('#email-success-message').fadeIn(1000).delay(10000).fadeOut();
//                            $('#email-success-message').delay(10000).fadeOut();
                        }
                    });
                },
                errorClass:"errorText"
            });

            //ajax waiting start
            $.ajaxSetup({
                beforeSend:function(){
                    // show gif here, eg:
                    $("#email-sending").show();
                },
                complete:function(){
                    // hide gif here, eg:
                    $("#email-sending").hide();
                }
            });
            //ajax waiting ends
        });
    </script>
</head>

<body class="has-navbar-fixed-top page-index">
<!-- @region: Navigation -->
<div id="navigation" class="wrapper">
    <!-- Branding & Navigation -->
    <!--Main Navigation-->
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">

                <!--branding-->
                <div class="brand">
                    <!-- Logo added with CSS -->
                    <h1><a href="#content">Curr<span class="em">i</span></a></h1>
                </div>

                <!--mobile collapse menu button-->
                <a class="mobile-toggle-trigger"><i class="icon-reorder"></i></a>

                <!--scroll mobile navigation-->
                <a class="mobile-toggle-trigger scroll-nav" data-js="scroll-show"><i class="icon-reorder"></i></a>

                <!--everything within this div is collapsed on mobile-->
                <div class="mobile-toggle pull-right">

                    <!--main navigation-->
                    <ul class="nav" id="main-menu">
                        <li><a href="#about">Personal</a></li>
                        <li><a href="#educational">Education</a></li>
                        <li><a href="#services">OpenSource</a></li>
                        <li><a href="#experience">Work</a></li>
                        <li><a href="#expertise">Expertise</a></li>
                        <li><a href="#contact" class="stamp">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</div>

<!-- @region: Content -->
<!--scroll-section class must be added to all scrollable sections-->
<div id="content">
<section class="scroll-section about block primary" id="about">
    <!-- About text & photo -->
    <div class="container">
        <div class="row-fluid">
            <div class="span3 photo">
                <img src="img/misc/profile-chathu.png" alt="My picture" class="img-circle pull-center" />
            </div>
            <div class="span9 details">
                <h2 class="primary-focus custom-primary-focus">Chathuranga Tennakoon</h2>
                <h3 class="secondary-focus custom-secondary-focus">Software Engineer and  Open Source Contributor</h3>
                <p class="custom-font-bold" style="font-weight: bold">
                    I am a Software Engineer with 5 years of Software Engineering experiences based on Java, J2EE and related open source technologies.
                    I always keep in touch with new technologies and i have the fast learning capability.
                </p>

                <a class="external roll-link span2"  target="_blank" rel="nofollow" href="https://github.com/chathurangat">
                    <span data-title="GitHub" style="margin-top: auto;margin-bottom: auto;">GitHub</span>
                </a>

                <a class="external roll-link span2"  target="_blank" rel="nofollow" href="http://chathurangat.blogspot.com">
                    <span data-title="Blog">Blog</span>
                </a>

                <a class="external roll-link span2" target="_blank" rel="nofollow" href="http://lk.linkedin.com/in/chathurangatennakoon" >
                    <span data-title="Linkedin">Linkedin</span>
                </a>

                <a class="external roll-link span3"  target="_blank" rel="nofollow" href="http://stackoverflow.com/users/1415672/chathuranga-tennakoon">
                    <span data-title="StackOverflow">StackOverflow</span>
                </a>

                <a class="external roll-link span2" target="_blank" rel="nofollow" href="http://ellislab.com/forums/member/305501/">
                    <span data-title="CodeIgniter">CodeIgniter</span>
                </a>

                <div class="margin-top"><a href="/cv/cv_chathuranga.pdf" class="btn btn-large btn-primary-grad" style="margin-top: 10px;" >Download CV <i class="icon-angle-down"></i></a></div>
            </div>
        </div>
    </div>
</section>

<!-- Clients carousel -->
<div class="clients block">
    <div class="container">
        <div class="row-fluid">
            <div class="flexslider-carousel" data-item-width="250" data-item-margin="0">
                <div class="items">

                    <div class="item"><img  width="120" height="80" src="img/logos/zce_logo.jpg" alt="Zend Certification" /></div>
                    <div class="item"><img width="160" height="80" src="img/logos/scjp.gif" alt="SCJP" /></div>
                    <div class="item"><img  width="160" height="80" src="img/logos/wcd.bmp" alt="OCPWCD" /></div>
                    <div class="item"><img  width="160" height="80"  src="img/logos/ocjp.bmp" alt="OCPJP" /></div>
                    <div class="item"><img width="160" height="80"  src="img/logos/mad.gif" alt="SCMAD" /></div>
                    <div class="item"><img width="260" height="80"  src="img/logos/bcs.jpg" alt="MBCS" /></div>

                    <div class="item"><img  width="120" height="80" src="img/logos/zce_logo.jpg" alt="Zend Certification" /></div>
                    <div class="item"><img width="160" height="80" src="img/logos/scjp.gif" alt="SCJP" /></div>
                    <div class="item"><img  width="160" height="80" src="img/logos/wcd.bmp" alt="OCPWCD" /></div>
                    <div class="item"><img  width="160" height="80"  src="img/logos/ocjp.bmp" alt="OCPJP" /></div>
                    <div class="item"><img width="160" height="80"  src="img/logos/mad.gif" alt="SCMAD" /></div>

                </div>
            </div>
        </div>
    </div>
</div>


<section class="scroll-section services block " id="educational" style="margin-top: 10px;margin-bottom: 40px;">
    <div class="container">
        <p class="section_header" style="margin-bottom: 20px;">Educational Background</p>

        <div class="row-fluid">
            <div class="span12 service">
                <!--<i class="service-css3 centered"></i>-->
                <!--<h4 class="bold">B.Sc(Honours)Computing(First class) - the University of Greenwich(UK)</h4>-->
                <p class="qulification">B.Sc(Honours)Computing (First class) - University of Greenwich(UK)</p>
                <p>I have become a First Class Honours Graduate in Year 2011 from <a href="http://www.cms.gre.ac.uk" target="_blank">The University of Greenwich, School of Computing & Mathematical Sciences</a></p>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12 service">
                <!--<i class="service-css3 centered"></i>-->
                <p class="qulification">Member of British Computer Society</p>
                <p>Member of British Computer Society (Membership No: 990406323)</p>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12 service">
                <p class="qulification">Diploma In Information Technology</p>
                <p>Two years full time Diploma for information Technology awarded by <a href="http://www.sliit.lk" target="_blank">Sri Lanka Institute Of Information Technology</a> with Cumulative GPA 3.6/4.0</p>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12 service">
                <p class="qulification">Sun Certified Java Programmer (Java SE 1.4)</p>
                <p>This is the first Sun Certification achievement in my life and certified in the mid of the year 2008</p>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12 service">
                <p class="qulification">Sun Certified Mobile Application Developer</p>
                <p> I have become a certified mobile application developer by achieving 100 out of 100 marks for this exam</p>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12 service">
                <p class="qulification">Oracle Certified Professional Java Programmer (Java SE 1.6) </p>
                <p>As a result of chasing after the latest technologies and their versions,i was lucky enough to become certified professional for the for the Java SE 6. (In mid of year 2010)</p>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12 service">
                <p class="qulification">Oracle Certified Professional Web Component Developer</p>
                <p>I have become a certified web component developer by achieving 100 out of 100 marks for this exam</p>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12 service">
                <p class="qulification">Oracle Certified Professional Web Services Developer</p>
                <p>JAX-WS, RestFul Web Services, WS-Security, SOAP, WSDL</p>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12 service">
                <p class="qulification">Zend Certified Engineer (PHP 5.3) </p>
                <p> I am the 17th Zend Certified Engineer in Sri Lanka. <a href="http://www.zend.com/en/store/education/certification/authenticate.php/ClientCandidateID/ZEND020165/RegistrationID/249399343" target="_blank"> Click Here to See My Zend Certified Profile</a> </p>
            </div>
        </div>

    </div>
</section>

<section class="scroll-section services block gray" id="services">
    <div class="container">
        <p class="section_header">OpenSource Contributions</p>

        <div class="row-fluid">
            <div class="span12 service opensource-project">
                <a href="http://www.fosshub.org" class="pagerLink" target="_blank">
                    <i><img src="img/projects/foss-hub.png"/></i>
                    <h3 class="bold">Free Open Source Software Hub - www.FossHub.Org</h3>
                    <p class="custom-text-justify">
                        I am the founder of the www.fosshub.org community portal. The intention of this project is to encourage and promote open source software development towards the growth of the future IT industry.
                        I have planned to provide the facilities for the open source developers to introduce and promote their open source development for the community users through this community project. more details of this project can be found by
                        visiting the project website.
                    </p>
                </a>
                <!--Click here - Java OAuth Home Page-->
            </div>
        </div>

        <div class="row-fluid">
            <div class="span4 service opensource-project">
                <a href="http://oauth-java.fosshub.org" class="pagerLink" target="_blank">
                    <i><img src="img/projects/oauth-java.png"/></i>
                    <h3 class="bold">Java OAuth Library</h3>
                    <p class="custom-text-justify">
                        The purpose of this project is to provide Java based implementation for OAuth 1 and OAuth 2 APIs. This project is continuously developing to provide
                        support for most of the well known social networks like facebook, google, Linkedin, GitHub, Twitter, Yahoo etc... more of this project can be found
                        by visiting the project home page.
                    </p>
                </a>
                <!--Click here - Java OAuth Home Page-->
            </div>

            <div class="span4 service opensource-project">
                <a href="http://vehicle-manager.fosshub.org" class="pagerLink" target="_blank">
                    <i><img src="img/projects/vehicle-manager.png"/></i>
                    <h3 class="bold">Vehicle Maintenance Management System</h3>
                    <p class="custom-text-justify">
                        Multi-tenant based solution for any type of organization (from medium scale to large scale) to track and monitor vehicle related (specially maintenance and running) expenditures.
                        more about this project can be found by visiting the project home page.
                    </p>
                    <!--Click here - VMMS Home Page-->
                </a>
            </div>

            <div class="span4 service opensource-project">
                <a href="http://oauth-php.fosshub.org" class="pagerLink" target="_blank">
                    <i><img src="img/projects/oauth-php.png"/></i>
                    <h3 class="bold">PHP OAuth Library</h3>
                    <p class="custom-text-justify">
                        The purpose of this project is to provide PHP based implementation for OAuth 1 and OAuth 2 APIs. This project is continuously developing to provide
                        support for most of the well known social networks like facebook, google, Linkedin, GitHub, Twitter, Yahoo etc... more of this project can be found
                        by visiting the project home page.
                    </p>
                </a>
                <!--Click here - PHP OAuth Home Page-->
            </div>
        </div>
    </div>
</section>

<section class="scroll-section experience block" id="experience">
    <div class="container">
        <p class="section_header">Work Experiences</p>

        <ul>
            <li class="timeline-item left" style="margin-top: 30px;">
                <h4 class="timeline-item-date">September 2014 - present</h4>
                <span class="company-name"><a href="http://sciencelandsoftware.com" target="_blank">ScienceLand Software (Pvt) Ltd</a></span>
                <h5 class="timeline-item-role">Technical Team Lead</h5>
                <p class="timeline-item-description">
                  I am working as the Technical Team Lead for the Prison Information Management System project.
                    <br/>
                    <b>Client : </b> Department Of Prisons - Ministry of Rehabilitation and Prison Reforms Sri Lanka <br/>
                    <b>Engineering Team Size : </b>10 Engineers (7 Software Engineers + 3 Senior Software Engineers)<br/>
                    <b>Responsibilities :</b> Providing technical assistance for development team, Code Reviewing , Support For Software Architecture Designing, Technology Selection for the Project<br/>
                    <b>Technologies :</b>Spring, Spring MVC, Hibernate, SOA, JAX-WS, Apache Tomcat, TestNg for TDD, PHPUnit, JasperReports, Yii PHP framework, Bootstrap, multi-tenancy, Alfesco document Management , MySQL</b> <br/>
                </p>
            </li>


        </ul>

        <ul>
            <li class="timeline-item left" style="margin-top: 30px;">
                <h4 class="timeline-item-date">September 2013 - present</h4>
                <span class="company-name"><a href="http://www.vocanic.com" target="_blank">Vocanic Singapore</a></span>
                <h5 class="timeline-item-role">Software Engineer</h5>
                <p class="timeline-item-description">
                    working for the Vocanic Sri Lankan development center for developing the PHP and Java based social media marketing products upon the requirements of the Vocanic Singapore.
                </p>
            </li>


        </ul>

        <ul>
            <li class="timeline-item left" style="margin-top: 30px;">
                <h4 class="timeline-item-date">January 2012 - Present</h4>
                <span class="company-name"><a href="http://www.fosshub.org" target="_blank">FossHub - Free Open Source Software Hub</a></span>
                <h5 class="timeline-item-role">Founder/Contributor</h5>
                <p class="timeline-item-description">
                    developing and maintaining the www.fosshub.org to assist and encourage the FOSS developers to contribute more for the foss development to help the growth of the future IT industry.
                    i am working on following FOSS Projects through this community portal.
                    <br/>
                    <a href="http://www.google.lk" target="_blank">OAuth Library Java</a>
                    <br/>
                    <a href="http://www.google.lk" target="_blank">Vehicle Manager - J2EE based</a>
                    <br/>
                    <a href="http://www.google.lk" target="_blank">OAuth Library PHP</a>
                </p>
            </li>
        </ul>


        <ul>
            <li class="timeline-item left" style="margin-top: 30px;">
                <h4 class="timeline-item-date">August 2011 - August 2013</h4>
                <span class="company-name"><a href="http://www.hsenidmobile.com" target="_blank"> hSenid Mobile Solutions (Pvt) Ltd</a></span>
                <h5 class="timeline-item-role">Software Engineer</h5>
                <p class="timeline-item-description">
                    developing middleware applications for the mobile telecommunication industry using J2EE technology.
                    in addition, i was outsourced to another software company for working for a large scale Multitenant SOA solution for the sri lankan government.
                    <br>

                    <br><br>
                    <b>Project : </b><a href="https://sdp.hewani.co.ke" target="_blank">Service Delivery Platform (SDP) - VirtualCity Kenya </a>
                    <br>
                    <b>Team Size : </b>10+ Software Engineers , 2 Project Managers ,3 Tech Leads, 2 Software Architects <br/>
                    <b>Technologies :</b>Spring, Spring MVC, Spring Security, Hibernate, SOA, JAX-WS, Apache Tomcat, TestNg for TDD, Sonar, Cobertura, JasperReport, Bootstrap, multi-tenancy, WSO2 Application Server, WSO2 Identity Server,MySQL ,Maven , Jenkins, Apache CXF<br/>

                    <br><br>
                    <b>Project : </b>eLocal Government (eLG) - Multitenant based SOA solution
                    <br>
                    <b>Team Size : </b>18 Software Engineers , 2 Project Managers , 4 Business Analysts , 2 Tech Leads, 2 Software Architects <br/>
                    <b>Technologies :</b>Spring, Spring MVC, Spring Security, Hibernate, SOA, JAX-WS, Apache Tomcat, TestNg for TDD, Sonar, Cobertura, JasperReport, Bootstrap, multi-tenancy, WSO2 Application Server, WSO2 Identity Server,MySQL ,Maven , Jenkins<br/>
                    Recruitment Manager

                    <br><br>
                    <b>Project : </b>Recruitment Manager
                    <br>
                    <b>Team Size : </b>5 Software Engineers <br/>
                    <b>Technologies :</b>Spring, Spring MVC, Spring Security, Hibernate, OAuth, CAS Server, SOA, JAX-WS, Apache Tomcat, TestNg for TDD, Sonar, Cobertura, JasperReport, Bootstrap, MySQL , Maven, Jenkins <br/>
                    Recruitment Manager
                </p>
            </li>
        </ul>



        <ul>
            <li class="timeline-item left" style="margin-top: 30px;">
                <h4 class="timeline-item-date">December 2010 - July 2011</h4>
                <span class="company-name"><a href="http://www.abansgroup.com" target="_blank">Abans (pvt)Ltd - (Sirius Technology Services (pvt) Ltd) </a></span>
                <h5 class="timeline-item-role">Web Developer</h5>
                <p class="timeline-item-description">My responsibilities was to develop Web Applications with Java/PHP technologies and develop mobile applications using J2ME Technology.
                    <br/>
                    <a href="http://www.buyabans.com" target="_blank">www.buyabans.com</a>  - PHP CodeIgniter
                    <br/>
                    MobileCash Collector - J2ME application
                    <br/>
                    MobileTracker - Manufacturing based J2ME Application
                    <br/>
                    HR Manager - J2EE based solution
                    <br/>
                    Inventory Tracker - PHP CodeIgniter
                </p>
            </li>
        </ul>

    </div>
</section>

<section class="scroll-section services block gray" id="expertise" style="margin-top: 50px;margin-bottom: 40px;">

<div class="container">
    <p class="section_header">Technical Skills and Expertise</p>

    <div class="container">
        <h4 class="skills_header">Core Development Framework</h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Spring</p>
        </div>
    </div>

    <div class="container">
        <h4 class="skills_header">Code Quality Analysis </h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Sonar</p>
        </div>
    </div>

    <div class="container">
        <h4 class="skills_header">Mobile Technologies</h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">J2ME </p>
        </div>
    </div>


    <div class="container">
        <h4 class="skills_header">WebServices</h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">JAX-WS</p>
        </div>
        <div class="span2 skills_frame_div">
            <p class="skills_text">RESTful</p>
        </div>

    </div>



    <div class="container">
        <h4 class="skills_header">Reporting</h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">JasperReport </p>
        </div>
        <div class="span2 skills_frame_div">
            <p class="skills_text">IReport Designer</p>
        </div>

    </div>


    <div class="container">
        <h4 class="skills_header">Logging Frameworks</h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Log4J </p>
        </div>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Slf4J</p>
        </div>

    </div>


    <div class="container">
        <h4 class="skills_header">Version Controlling</h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Git </p>
        </div>
        <div class="span2 skills_frame_div">
            <p class="skills_text">SVN </p>
        </div>
    </div>

    <div class="container">
        <h4 class="skills_header">Unit Testing Frameworks</h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Junit</p>
        </div>
        <div class="span2 skills_frame_div">
            <p class="skills_text">TestNg</p>
        </div>
        <div class="span2 skills_frame_div">
            <p class="skills_text">PhpUnit</p>
        </div>
    </div>

    <div class="container">
        <h4 class="skills_header">Security Frameworks</h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Spring Security </p>
        </div>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Apache Shiro</p>
        </div>
    </div>

    <div class="container">
        <h4 class="skills_header">Build Automation</h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Ant </p>
        </div>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Maven </p>
        </div>
    </div>

    <div class="container">
        <h4 class="skills_header">Code Coverage</h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Emma </p>
        </div>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Cobertura </p>
        </div>
    </div>

    <div class="container">
        <h4 class="skills_header">Build Automation and Continuous Integration</h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">Jenkins</p>
        </div>
    </div>

    <div class="container">
        <h4 class="skills_header">Single Sign On (SSO) Providers</h4>
        <div class="span2 skills_frame_div">
            <p class="skills_text">WSO2 Identity Server </p>
        </div>
        <div class="span4 skills_frame_div">
            <p class="skills_text">CAS (Centralized Authentication Server)</p>
        </div>
    </div>


    <h4 class="skills_header">Operating Systems</h4>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Windows </p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Linux </p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Ubuntu </p>
    </div>


</div>



<div class="container">
    <h4 class="skills_header">Development Languages</h4>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Java</p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">PHP</p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">J2EE</p>
    </div>

</div>


<div class="container">
    <h4 class="skills_header">Development Frameworks</h4>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Spring MVC</p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Struts 2</p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">CodeIgniter</p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Yii</p>
    </div>
</div>




<div class="container">
    <h4 class="skills_header">ORM Frameworks</h4>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Hibernate 4.x</p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">JPA 2.x</p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Spring Data</p>
    </div>
</div>


<div class="container">
    <h4 class="skills_header">Development IDE</h4>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Eclipse </p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Intelli J IDEA </p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">PhpStrom </p>
    </div>

</div>


<div class="container">
    <h4 class="skills_header">Application Design</h4>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Domain Driven Design</p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Object Oriented Design</p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">J2EE Design Patterns</p>
    </div>
</div>


<div class="container">
    <h4 class="skills_header">Application Servers</h4>
    <div class="span3 skills_frame_div">
        <p class="skills_text">WSO2 Application Server</p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Apache Web Server </p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Apache Tomcat </p>
    </div>

</div>

<div class="container">
    <h4 class="skills_header">Application Architectures </h4>
    <div class="span3 skills_frame_div">
        <p class="skills_text">Service Oriented Architecture (SOA)</p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Multi-tenancy</p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">MVC</p>
    </div>
</div>



<div class="container">
    <h4 class="skills_header">Database Technologies</h4>
    <div class="span2 skills_frame_div">
        <p class="skills_text">MySQL </p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Ms SQL Server </p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">Oracle </p>
    </div>

    <div class="span2 skills_frame_div">
        <p class="skills_text">MongoDB </p>
    </div>
    <div class="span2 skills_frame_div">
        <p class="skills_text">JDBC </p>
    </div>

</div>

</section>

<!--Contact form-->
<section class="scroll-section contact block" id="contact">

    <div class="container">
        <h2>Contact Me</h2>
        <span id="email-success-message" class="alert-success email-sucess-message span10">
            <span class="email-sucess-message-text-center">Email was sent successfully..</span>
            <span class="email-sucess-message-text-left"> Thank you very much for contacting me and i will check the message and make a reply within next few hours.</span>
            <span class="email-sucess-message-text-left">Thanks and Regards</span>
            <span class="email-sucess-message-text-left">Chathuranga Tennakoon</span>
        </span>

        <div id="email-sending" class="email-sending-waiting">
            <img src="img/common/loader.gif" class="loader-img"/>  Please be patient.... Your Email is being Sent... <img src="img/common/loader.gif" class="loader-img"/>
        </div>


        <form id="contact-form" name="contact-form" method="POST" >
            <div class="row-fluid">
                <div class="span12">
                    <span class="contact-label">Name</span>
                    <input id="user_name" name="user_name" type="text" value="T.M. Darshana Chathuranga Tennakoon" readonly class="input-primary" required="true" style="margin-bottom: 0;"/>
                    <span class="contact-label">Email</span>
                    <input id="user_email"  name="user_email" type="text" value="chathuranga.t@gmail.com" readonly class="input-primary" required="true" style="margin-bottom: 0;"/>
                    <span class="contact-label">Skype</span>
                    <input id="user_email"  name="user_email" type="text" value="dchathurangat" readonly class="input-primary" required="true" style="margin-bottom: 0;"/>
                    <span class="contact-label">Mobile</span>
                    <input id="user_email"  name="user_email" type="text" value="+94716329281" readonly class="input-primary" required="true" style="margin-bottom: 0;"/>
                    <span class="contact-label">Postal Address</span>
                    <input id="user_email"  name="user_email" type="text" value="E68, 12th Lane, Isurupura, Malabe, Sri Lanka" readonly class="input-primary" required="true" style="margin-bottom: 0;"/>
                </div>
            </div>

        </form>


    </div>
</section>

</div>

<!-- @region: Footer -->
<footer id="footer">
    <div class="container">
        <div class="row-fluid pull-center">
            <div class="social-media">
                <a href="#"><i class="icomoon-twitter-3"></i></a>
                <a href="#"><i class="icomoon-facebook-3"></i></a>
                <a href="#"><i class="icomoon-google-plus-4"></i></a>
                <a href="#"><i class="icomoon-dribbble-3"></i></a>
            </div>
            <!--<p><a href="elements.htm">Theme UI Elements</a> / <a class="colour" data-colour="alternative">Alternative Colour Scheme</a></p>-->
            <p>  <a href="http://www.fosshub.org" target="_blank">www.fosshub.org</a></p>
        </div>
    </div>
</footer>


<!--Bootstrap Javascript -->
<script src="js/bootstrap.min.js"></script>

<!--Plugins -->
<script src="plugins/flexslider/jquery.flexslider-min.js"></script>
<!--<script src="plugins/jPanelMenu/jquery.jpanelmenu.min.js"></script>-->
<!--<script src="plugins/jRespond/js/jRespond.js"></script>-->
<script src="plugins/onePageNav/jquery.scrollTo.js"></script>
<script src="plugins/onePageNav/jquery.nav.js"></script>

<!--Custom scripts mainly used to trigger libraries -->
<script src="js/script.js"></script>
</body>
</html>