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

    <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ url('js/jquery.easytabs.min.js') }}"></script>

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
    border: 1px solid #fff;}

div.center {text-align: center;}

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


               



                 


                    <div id = "latest-tweets" class="block">

                        <h2>Dernières Nouvelles</h2>

                        <div class="block-content">

                            <div class="twit-field">

                                <div class="twit-text">Lorem ipsum ex vix illud nonummy, novum tation et his. Lorem ipsum ex vix illud no </div>

                                <div class="twit-link"><a href = "http://www.envato.com/">http://www.envato.com</a></div>

                            </div>

                            <div class="twit-field">

                                <div class="twit-text">Lorem ipsum ex vix illud nonummy, novum tation et his. Lorem ipsum ex vix illud no </div>

                                <div class="twit-link"><a href = "http://www.envato.com/">http://www.envato.com</a></div>

                            </div>

                        </div>

                    </div>



            </div><!-- /Right Sidebar -->



            <!-- Content -->
            <div class = "content">



                    <!-- <h2>Mes Blogs مدونات</B></h2> -->



                    <!-- Blog Design <div id = "design"><h2>404 - Page not found</h2>Sorry, the page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</div> /Blog Design -->

                    <!-- Blog Development<div id = "development"><h2>404 - Page not found</h2>Sorry, the page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</div> /Blog Development -->

                    <!-- Blog Creative<div id = "creative"><h2>404 - Page not found</h2>Sorry, the page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</div> /Blog Creative -->



                    <!-- Blog Uncategorized -->
                    <div id = "uncategorized">



                   <!-- Blog Post -->
                  
                    <div id="blog-post" >

                        <div class = "blog-title"><h1 style="color: #2D393F;text-decoration: underline;float: right;"><u>{{ $blogs->titre }}</u></h1></div>

                        <div class = "blog-image"><a class ="popup" href="../images/blogs/{{ $blogs->imageb }}" title="{{ $blogs->titre }}"><img src="../images/blogs/{{ $blogs->imageb }}" width="530" height="200"/><div class = "blog-postdate">{{ $blogs->datep }}</div></a></div>

                        <div class = "meta"><span class="author">Adnane Amraoui</span><span class="tag">{{ $blogs->categorie }}</span><a href = "{{ url('blog')}}" class = "back">Retour</a></div>

                        <div class = "blog-body">

                            <p>{!! $blogs->bodyb !!}</p>


                        </div>

                        <div class="social-like">

                            <div class="label">Partager</div>

                            <div class="buttonss">

                                <div class="addthis_inline_share_toolbox"></div>

                            </div>

                        </div>
                        <div id="comments">

                          <h3>{{ $commantaires->count() }} Commantaire</h3>

                            @foreach($commantaires as $commantaire)
                            <div class="comment">
  
                                <div class = "user-avatar"><img src="../images/ava-blank.jpg" width="58" height="58"/></div>

                                <div class = "comment-meta">

                                    <div class="author">{{ $commantaire->nomCom }}</div>

                                    <div>-</div>

                                    <div class="postdate">{{ $commantaire->created_at }}</div>

                                    <div class="pre-link-sep">-</div>

                                    <div class="link"><a href = "#post-comment">Reponder</a></div>

                                </div>

                                <div class="comment-text">

                                    <p>{{ $commantaire->comment }}</p>

                                </div>

                            </div>
                            @endforeach
                            

                            <div id="post-comment">

                                <h3>Laisser le Blog</h3>

                                <!-- Comment Form -->
                                <!-- <form id = "comment" method="POST" action="storecom"> -->
                              {{ Form::open(array('route'=>['comment.store',$blogs->id],'method'=>'POST','id'=>'comment','files' => true)) }}

                                <div id = "comment-about">

                                    <input title="Your Name" type="text" name="nomCom" class="input" Placeholder="Nom*" required>

                                    <input title="Your E-Mail" type="text" name="emailCom" class="input" placeholder="E-mail*" required>

                                    <!-- <input title="Your WebSite" type="text" name="" class="input" placeholder="Site"> -->

                                </div>

                                <div id = "comment-mess">

                                    <textarea title="Your Message" cols="82" rows="6" name="comment" class="textarea" placeholder="Votre Commentaire ...."></textarea required>

                                </div>

                                <div id = "comment-send">

                                    <input title="Commenter" type="submit" value="Commenter" class="button">

                                </div>
                                {!! Form::close() !!}
                           <!--  </form> --><!-- /Comment Form -->

                            </div>

                        </div>
                    
                  
                    </div><!-- /Blog Post --> 


                    



                    </div><!-- /Blog Uncategorized -->



                </div><!-- /Content -->



            </div><!-- /Content Inner -->



            <!-- Cleaner --><div class="clear"></div><!-- /Cleaner -->



        </div><!-- /Blog -->

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



 <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-579f27fa9f6a23ac"></script> 

</body>
</html>