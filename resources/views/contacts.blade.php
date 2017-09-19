<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">


<!-- Mirrored from new.uouapps.com/flexicv/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Oct 2016 11:05:04 GMT -->
<head>

    <title>Adnane Amraoui</title>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

    <meta name="description" content="Adnane Amraoui" />

    <meta name="keywords" content="Adnane Amraoui, Developpeur,Développeur,Programmeur, Freelance,Technicien,profile,Contact,Blog,
    Télécharger Le CV" />

    <meta name="author" content="adnaneamraoui.com" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Titillium+Web:400,600|Patua+One:400|Titillium+Web:400italic,700italic&amp;subset=latin,latin-ext"/>

    <link rel="stylesheet" type="text/css" href="{{ url('css/reset.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ url('css/color-red.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ url('css/style1.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ url('css/style1.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ url('css/jquery.fancybox.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ url('css/parsley.css') }}">

     <script type="text/javascript" src="{{ url('js/jquery.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('js/jquery.isotope.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('js/parsley.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('js/notify.js') }}"></script>

    <script src="http://maps.google.com/maps/api/js"></script>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    <script src="https://cdn.jsdelivr.net/gmap3/7.1.0/gmap3.min.js"></script>

   

</head>

<body>



    <!-- Wrapper --><div id = "wrapper" class = "wrapper">



        <!-- Navigation --><ul id = "navigation-menu" class = "navigation-menu">

              <li class="first"><a class = "profile" href="{{ url('/') }}"><span>Profil</span></a></li>

            <li><a class = "cv" href="{{ url('/cv') }}"><span>CV</span></a></li>

            <li><a class = "documents" href="{{ url('/documents') }}"><span>Documents</span></a></li>

            <li><a class = "portfolio" href="{{ url('/portfolio') }}"><span>Portefeuille</span></a></li>

            <li><a class = "blog" href="{{ url('/blog') }}"><span>Blog</span></a></li>

            <li class="last"><a class = "contacts" href="{{ url('/contacts') }}"><span>Contacts</span></a></li>


        </ul><!-- /Navigation -->



        <!-- Container --><div id = "container">
         <!-- Contacts --><div id = "contacts">



            <div id ="contact-map-block" class ="block">

                <h2>Contacts</h2>

                <div id="map"></div>

            </div>



            <!-- Content Inner --><div class = "content-inner">



                <div class = "left-sidebar">

                    <div id = "contact-information" class="block">

                        <h2>Contact</h2>

                        <div class = "block-content">

                            <div class = "contact-field address">

                                <div id = "contact-name">Adnane Amraoui</div>

                                <div id = "contact-address">Aïn Chock, Casablanca, Maroc<br/>Casablanca, Maroc</div>
                            </div>

                            <div class = "contact-field phone">

                                <div id = "contact-phone">Phone: +212 602932698</div>

                                <div id = "contact-fax">---</div>

                            </div>

                            <div class = "contact-field mail">

                                <div id = "contact-mail">E-mail: adnane.amraoui@outlook.fr</div>

                                <div id = "contact-site">Website: <a href="www.adnaneamraoui.com" target="_blank"> www.adnaneamraoui.com</a></div>

                            </div>

                        </div>

                    </div>

                </div>



                <div class = "content">
                <div id = "contact-form" class = "block">

                        <h3>Contactez-moi</h3>
                {!! Form::open(['id'=>'contact','method'=>'post','url'=>'store']) !!}
                 <div id = "about">
                    {!! Form::text('nomcomplete',null,array('class'=>'input','placeholder'=>'NomComplete*','required'=>'')) !!}

                    {!! Form::text('email',null,array('class'=>'input','placeholder'=>'E-mail*','required'=>'')) !!}

                    {!! Form::text('siteweb',null,array('class'=>'input','placeholder'=>'SiteWeb')) !!}
                  </div>
                  <div id = "mess">
                  {!! Form::textarea('message',null,array('class'=>'textarea','placeholder'=>'Comment puis-je t aider?','required'=>'')) !!}
                  </div> 
                    <div id = "send">
                     <input title="Send Message" name="submit" type="submit" value="Envoyer" class="button" id="mybtn">
                     </div>
                {!! Form::close() !!}

                   

           



      
   
                        <!-- Contacts Form -->
                       <!--  <form id = "contact" method="post" action="store">

                            <div id = "about">

                                <input title="Your Name" type="text" name="nomcomplete" class="input" placeholder="NomComplete*" required>

                                <input title="Your E-Mail" type="text" name="email" class="input" placeholder="E-mail*" required>

                                <input title="Your WebSite" type="text" name="siteweb" class="input" placeholder="SiteWeb">

                            </div>

                            <div id = "mess">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <textarea title="Your Message" name="message" cols="82" rows="6" class="textarea" placeholder="Comment puis-je t'aider?*" required></textarea>
                           
                            </div>

                            <div id = "send">

                                <input title="Send Message" type="submit" name="submit" value="Envoyer" class="button">

                            </div>

                        </form> -->
                        <!-- /Contacts Form -->

                    </div>



                </div>


                <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



            </div><!-- /Content Inner -->



        </div><!-- /Contacts -->
         <!-- Social Button --><div id = "social">

            <ul class = "pos-button">

                <li class = "first"><a href = "https://www.facebook.com/adnane.amraoui.theone" class = "facebook" title="Facebook" target="_blank"></a></li>

               <!--  <li><a href = "#" class = "Youtube" title="Youtube"></a></li> -->

                <li><a href = "https://plus.google.com/u/0/111209125300789126557" class = "google" title="Google+" target="_blank"></a></li>

                <li><a href = "https://twitter.com/AdnaneAmraoui" class = "twitter" title="Twitter" target="_blank"></a></li>

                <li><a href = "#" class = "linkedin" title="Linkedin" target="_blank"></a></li>

                <li><a href = "#" class = "pinterest" title="Pinterest" target="_blank"></a></li>

                

            </ul>

        </div><!-- /Social Button -->



        <!--<div id = "action">

            <ul class = "pos-button">

                <li class = "first"><a href = "#" class = "print" title="Print"></a></li>

                <li><a href = "#" class = "save" title="Save"></a></li>

                <li class = "last"><a href = "#" class = "share" title="Share"></a></li>

            </ul>

        </div> /Action Button -->



        </div><!-- /Container -->



        <!-- Footer --><div id = "footer">

            <div id = "copyright">© 2016 All Rights Reserved. Design by Adnane Amraoui</div>

        </div><!-- /Footer -->



    </div><!-- /Wrapper -->
  
 <script>
    $('#map')
      .gmap3({
        center:[33.543582, -7.588203],
        zoom:14
      })
      .marker([
        {position:[33.543582, -7.588203]},
        
       
      ])
      .on('click', function (marker) {
        marker.setIcon('http://maps.google.com/mapfiles/marker_green.png');
      });
  </script>


    </body>


<!-- Mirrored from new.uouapps.com/flexicv/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Oct 2016 11:10:40 GMT -->
</html>