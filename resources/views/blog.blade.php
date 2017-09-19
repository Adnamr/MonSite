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

    <link rel="stylesheet" type="text/css" href="{{ url('css/jquery.fancybox.css') }}"/>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  

    <script type="text/javascript" src="{{ url('js/jquery.hashchange.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('js/jquery.isotope.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('js/jquery.adipoli.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('js/jquery.fancybox.pack.js') }}"></script>

    <script type="text/javascript" src="{{ url('js/jquery.gmap.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('js/response.min.js') }}"></script>

    <script type="text/javascript" src="{{ url('js/custom.js') }}"></script>

    <style>
ul.pagination {
    display: inline-block;
    padding: 0;
    margin: 0;
    float: right;
}

ul.pagination li {display: inline;}

ul.pagination li  {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
   
    border: 1px solid #ddd;
}

ul.pagination li.active {
        background-color: #E74F3F;
    color: white;
    border: 1px solid #E74F3F;
}

ul.pagination li:hover:not(.active) {background-color: #ddd;color: white;
    border: 1px solid #E74F3F;}

div.center {text-align: center;}

.hide{
   
    width: 0;
    padding: 0;

}
</style>

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

 
                             <!-- Blog --><div id = "blog">



            <!-- Content Inner --><div class = "content-inner">



                <!-- Right Sidebar --><div class = "right-sidebar">

                    {!! Form::open(array('url'=>'blog','method'=>'get','role'=>'search')) !!}

                            <div id = "search" class="block">

                                <div class="block-content">

                                    <input type="text" name="search" class="input" placeholder="Chercher">

                                    <input title="Chercher" type="submit" value="" name="search-button" class="input"> 

                                </div>

                            </div>  

                    {!! Form::close() !!}

                    


                   
                    <div id = "categories" class="block">

                        <h2>Catégories</h2>

                        <div class="block-content">

                            <ul id = "blog-menu">

                                 <li class="web"><a href="{{ url('blog/web') }}">Web</a></li>

                                <li class="Descktop"><a href="{{ url('blog/Descktop') }}">Descktop</a></li>

                                <li class="Mobile"><a href="{{ url('blog/Mobile') }}">Mobile</a></li>

                                <li class="NonClasse"><a href="{{ url('blog/NonClasse') }}">Non classé</a></li>
                                

                            </ul>

                        </div>

                    </div>

                    <div id = "latest-tweets" class="block">

                        <h2>Dernières Nouvelles</h2>

                        <div class="block-content">

                            <div class="twit-field" title="Blogger">

                                <div class="twit-text">Lorem ipsum ex vix illud nonummy, novum tation et his. Lorem ipsum ex vix illud no </div>

                                <div class="twit-link"><a href = "http://www.envato.com/">http://www.envato.com</a></div>

                            </div>

                            <div class="twit-field" title="Blogger">

                                <div class="twit-text">Lorem ipsum ex vix illud nonummy, novum tation et his. Lorem ipsum ex vix illud no </div>

                                <div class="twit-link"><a href = "http://www.envato.com/">http://www.envato.com</a></div>

                            </div>

                        </div>

                    </div>



            </div><!-- /Right Sidebar -->



            <!-- Content --><div class = "content">



                    <h2>Mes Blogs</B></h2>



                    <!-- Blog Design <div id = "design"><h2>404 - Page not found</h2>Sorry, the page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</div> /Blog Design -->

                    <!-- Blog Development<div id = "development"><h2>404 - Page not found</h2>Sorry, the page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</div> /Blog Development -->

                    <!-- Blog Creative<div id = "creative"><h2>404 - Page not found</h2>Sorry, the page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</div> /Blog Creative -->


 @foreach( $blogs as $blog )
                  


<!-- Blog Uncategorized --><div class= "{{ $blog->categorie }}">
                    
                    <div class = "blog-content">

  

                        
                                    <div class=" text-field blog with-image ">

                                        <div class="text-fiels-top"><a href="{{ url('show',$blog->id) }}" class="blog-post"><img src="../images/blogs/{{ $blog->imageb }}" width="530" height="200"/></a><div class = "blog-postdate" style="color: black;">{{ $blog->datep }}
                                        </div>
                                        </div>

                                        <div class="text-field-left"></div>

                                        <div class="text-field-right">

                                            <div class="title"><a href="{{ url('show',$blog->id) }}" class="blog-post">{{ $blog->titre }}</a></div>

                                            <div class="meta"><span class="author">Adnane Amraoui</span><span class="tag">{{ $blog->categorie }}</span></div>

                                            <div class="text"><p>{!! $blog->bodyb !!}</p></div><a href="{{ url('show',$blog->id) }}" style="float:right;" >Lire La Suite</a>

                                        </div>

                                    </div>
                              



                        





                    </div>

 


                    



                    </div><!-- /Blog Uncategorized -->
  @endforeach
                   <div class = "blog-footer">
                    <ul class="pagination">
                        <li>{{ $blogs->render() }}</li>

                    </ul>

                    </div>


                </div><!-- /Content -->



         </div>
    




            <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



        </div><!-- /Blog -->

 <!-- Social Button --><div id = "social">

            <ul class = "pos-button">

               <li class = "first"><a href = "https://www.facebook.com/adnane.amraoui.theone" class = "facebook" title="Facebook" target="_blank"></a></li>

               <!--  <li><a href = "#" class = "Youtube" title="Youtube"></a></li> -->

                <li><a href = "https://plus.google.com/u/0/111209125300789126557" class = "google" title="Google+" target="_blank"></a></li>

                <li><a href = "https://twitter.com/AdnaneAmraoui" class = "twitter" title="Twitter" target="_blank"></a></li>

                <li><a href = "https://www.linkedin.com/in/adnane-amraoui-92960b12a?trk=nav_responsive_tab_profile" class = "linkedin" title="Linkedin" target="_blank"></a></li>

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



<script type="text/javascript">

  //       $(".web").click(function(){
  //                       $("div").filter(".web").show();
  //                       $("div").filter(".Descktop").hide();
  //                       $("div").filter(".Mobile").hide();
  //                       $("div").filter(".NonClasse").hide();
               
  //       });

  // $(".Descktop").click(function(){
  //                       $("div").filter(".Descktop").show(); 
  //                       $("div").filter(".web").hide();
  //                       $("div").filter(".Mobile").hide();
  //                       $("div").filter(".NonClasse").hide();
               
  //       });
  //  $(".Mobile").click(function(){
  //                       $("div").filter(".Mobile").show();     
  //                       $("div").filter(".Descktop").hide(); 
  //                       $("div").filter(".web").hide();
  //                       $("div").filter(".NonClasse").hide();
               
  //       });
  //  $(".NonClasse").click(function(){
  //                       $("div").filter(".NonClasse").show();
  //                       $("div").filter(".Mobile").hide();     
  //                       $("div").filter(".Descktop").hide(); 
  //                       $("div").filter(".web").hide();
                        
               
  //       });

</script>

</body>



</html>

                            






























