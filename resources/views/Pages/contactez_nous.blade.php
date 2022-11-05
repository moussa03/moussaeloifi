<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <x-cdn/>
    <title>Document</title>
</head>
<body>
   
    <style>
                body {
                    font-family: 'Nunito', sans-serif;
                }
                .section-header::after{
                    background:none;
                }
                .section-top{
                    height:auto;
                }
               
           
    </style>
    <div class="wraper ">
        <div class="container">
            <div class="overlay ">
            </div>
            
            <div class="section-top">
                <div class="section-header">

                    <div>
                        <a href="/">
                        <img src="img/logo-test-v2.png" alt="">
                        </a>
                        
                    </div>
                    <div>
                    <x-navbar />
                    </div>
                    <div class="right-header">
                    
                            <div class="d-none d-sm-block call_to_action">
                                <button>
                                        <span> <a href="/contactez_nous.html"> Demandez un devis grartuit </a> </span>
                                    <span><i class='bx bx-right-arrow-alt'></i></span>
                                </button>
                                
                            </div>
                        
                    
                            <div class="burger-menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        
                    </div>
                    
                </div>
            <div class="contact_us">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="heading_contact">
                                <span><i class='bx bxl-skype'></i></span>
                                <span>lets talks</span>
                                <div class="subheading">
                                    <h2>Nous sommes joignable 24H/24 et 7J/7 </h2>
                                    <p>N'hésitez pas A nous contactez.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="contact_details">
                                <div class="phone_whatsap">
                                    <div class="phone">
                                        <span><i class='bx bxs-phone-call'></i></span>
                                       <span>0691904910</span>
                                    </div>
                                    <div class="phone">
                                        <span><i class='bx bxl-whatsapp' ></i></span>
                                         <span>0691904910</span>
                                    </div>
                                    
                                </div>
                                <div></div>
                            </div>
                            <div class="contact_details">
                                <div class="phone_whatsap">
                                    <div class="phone">
                                        <span><i class='bx bx-envelope-open'></i></span>
                                       <span>moussaeloifi14@gmail.com</span>
                                    </div>
                                    <div class="phone">
                                        <span><i class='bx bx-map-alt'></i></span>
                                         <span>Hay rahma salé n 625</span>
                                    </div>
                                    
                                </div>
                                <div></div>
                            </div>
                            <div class="form_devis">
                                <div class="form-apply">                        
                                    <div class="form-body">
                                        <form  enctype="multipart/form-data" class="needs-validation" novalidate id="upload_form">
                                            <div class="form-group mb-3">                        
                                              <input  class="form-control"  id="name_error"  required name="name" aria-describedby="emailHelp" required placeholder="Nom Complet*">
                                              <!-- <div class="valid-feedback">
                        
                                              Looks good!
                        
                                             </div> -->
                        
                                             {{-- <div class="invalid-feedback">
                        
                                             veuillez renseigner votre nom
                        
                                            </div> --}}
                        
                                            <div class="valid-feedback">
                        
                                                <!-- Looks good! -->
                        
                                            </div>
                        
                                            </div>
                        
                                            <div class="form-group mb-3">
                        
                                            <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" id="email_error" name="email"  required placeholder="Adresse e-mail*">
                        
                                              <!-- <div class="valid-feedback">
                        
                                                Looks good!
                        
                                              </div> -->
                        
                                              <div class="invalid-feedback">
                        
                                              veuillez renseigner votre adresse e-mail
                                              </div>
                        
                                            </div>
                                            
                        
                                                <div class="form-group mb-3">                                                        
                                                    
                        
                                                </div>
                                             
                        
                                              <!-- <div class="form-group mb-3 mt-3 d-inline-block">
                        
                                                
                        
                                                <input type="file" class="custom-file-input">
                        
                                              </div> -->
                        
                                             
                                              <div class="form-group mb-3">
                                                <select class="form-select" id="project_error" name="project" required>
                                                <option selected disabled value="">Choisir type de projet</option>
                                                    <option value="site-vitrine">Site Vitrine</option>
                                                    <option value="site-ecommerce">Site E-commerce</option>
                                                    <option value="site-dynamique">Site Dynamique</option>
                                                    <option value="application-mobile">Application mobile</option>
                                                    <option value="design-graphique">Design graphique</option>
                                                </select>
                                                <div class="invalid-feedback">
                                                veuillez séléctionner type de votre projet
                                                </div>
                                                </div>
                                              <div class="form-group mb-3">
                        
                                                <textarea id="description_error" placeholder="Bref Description du projet?" cols="30" rows="3" name="description"></textarea>
                        
                                              </div>
                                              <div class="mb-3 image-project">
                                                <label for="formFile" class="form-label">Exemple de votre projet</label>
                                                <input class="form-control" name="project_image" type="file" id="formFile">
                                              </div>
                                               
                                                <div class="call_to_action devis">
                                                    <button>
                                                        {{-- <a href="#" id="demand_project">Demandez un devis grartuit</a> --}}
                                                        <span id="demand_project">Demandez un devis grartuit</span>
                                                        <span><i class='bx bx-right-arrow-alt'></i></span>
                                                    </button>
                                                </div>
                                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                            </form>
                                    </div>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
           
        </div>
        
        </div>
        <div class="floating-menu">
            <div class="top-menu">
                <div class="logo-menu">
                    <img src="img/logo-test-footer.png" alt="">
                </div>
                <div class="close-menu">
                    <i class='bx bx-x'></i>
                </div>
            </div>
    <div class="drop-down-menu">
        <div class="vertical-menu">
            <li> 
                <span class="flex-gap">
                    <a href="#"> Home </a> 
                    <div class="plus-menu">
                        
                    <i class='bx bx-plus'></i>
                    </div>
                </span>
                
                <ul class="hide">
                <li><a href="/#service" class="float-menu-link"> services </a></li>
                <li><a href="/#portfolio" class="float-menu-link"> projets </a></li>
                </ul>
                
            </li>
            <li> 
            <span class="flex-gap no-ul">
                <a href="/contactez_nous"> Contactez Nous </a>   
            </span> 
        </li>
        <li> 
            <span class="flex-gap no-ul">
                <a href="#"> Blog </a>   
            </span> 
        </li>
            <!-- <li> 
                <span class="flex-gap">
                    <a href="#"> Home </a> 
                    <div class="plus-menu ">
                    <i class='bx bx-plus'></i>
                    </div>
                </span>
            
                <ul class="hide">
                    <li>home1</li>
                    <li>home2</li>
                </ul>
            </li> -->
        
            <!-- <li> 
                <span class="flex-gap no-ul">
                    <a href="#"> Home </a>   
                </span>
            
                
            </li>
            <li> 
                <span class="flex-gap">
                    <a href="#"> Home </a> 
                    <div class="plus-menu">
                        
                    <i class='bx bx-plus'></i>
                    </div>
                </span>
            
                <ul class="hide">
                    <li>home1</li>
                    <li>home2</li>
                </ul>
            </li> -->
        </div>
    </div>
    <div class="social">
        <h2>Contact Info</h2>
        <div class="social-icons">
            <div class="social-icon">
                <span><i class='bx bx-map'></i></span>
                <p>Hay Rahma n 625 salé</p>
            </div>
            <div class="social-icon">
                <span><i class='bx bx-phone'></i></span>
                <p>0691904910</p>
            </div>
            <div class="social-icon">
                <span><i class='bx bx-envelope-open'></i></span>
                <p style="word-break:break-word;">moussaeloifi14@gmail.om</p>
            </div>
        </div>
    </div>
    <div class="social-media">
       <x-social-media/>
    </div>
    </div>
    <div class="footer pt-8">
        <div class="container">
            <div class="row">
                <!-- <div class="contact_footer_items"> -->
                   <div class="col-12 col-sm-6  col-md-6 col-lg-4">
                       <div class="contact_footer">
                       <span class="logo-footer" style="height:50px">
                       <a href="/">  
                       <img src="img/logo-test-footer.png"  alt="">
                       </a>
                       
                       </span>
                           <div class="social-icon">
                             <span><i class='bx bx-map'></i></span>
                             <p>Hay Rahma n 625 salé</p>
                           </div>
                            <div class="social-icon">
                             <span><i class='bx bx-phone'></i></span>
                             <p>0691904910</p>
                            </div>
                            <div class="social-icon">
                             <span><i class='bx bx-envelope-open'></i></span>
                             <p style="word-break:break-word;">moussaeloifi14@gmail.om</p>
                           </div>
                           <div class="social-media">
                               <div>
                               <a href="https://www.facebook.com/moussa.eloifi.372" class="float-menu-link"><span><i class='bx bxl-facebook'></i></span></a>                               </div>
                               <div>
                               <a href="https://www.linkedin.com/in/moussa-eloifi-817670155" class="float-menu-link"> <span>  <i class='bx bxl-linkedin'></i></span></a>
                               </div>
                               <div>
                               <a href="https://github.com/moussa03" class="float-menu-link"><span><i class='bx bxl-github'></i></span></a>
                               </div>
                               
                           </div>
                       </div>
                  </div>
                  <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                   <div class="contact_footer gap-0">
                       <span class="logo-footer">
                           <h2>Services</h2>
                       </span>
                       <ul>
                           <span>
                               <i class='bx bx-check'></i> 
                               <li>Intégration Html</li>
                           </span>
                           <span>
                               <i class='bx bx-check'></i> 
                               <li>Intégration cms</li>
                           </span>
                           <span>
                               <i class='bx bx-check'></i> 
                               <li>Développement sécifique</li>
                           </span>
                           <span>
                               <i class='bx bx-check'></i> 
                               <li>Création des sites ecommerce</li>
                           </span>
                       </ul>
                   </div>
                 </div>
                 <div class="col-12 col-md-6 col-lg-4">
                    <div class="contact_footer gap-0">
                        <span class="logo-footer">
                            <h2>Newsletter</h2>
                        </span>
                        <p>création des sites web ,application mobile,wordpress,logos plus encore : notre équipe disponilble pour vous aidez a  développer votre business en construisant des relations plus fortes avec vos client</p>
                        <form >
                            <input     
                                       name="newsletter_mail"
                                       id="newsletter_mail"
                                       class="form-control" 
                                       placeholder="Entrez votre E-mail *" />
                                       <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                        </form>
                        
                    </div>
                    <div class="call_to_action">
                    <button id="submit_newsletter">
                            <span id="submit_newsletter">Abonnez Vous</span>
                            <span><i class="bx bx-right-arrow-alt"></i></span>
                        </button>
                    </div>
                  </div>
                 
                 {{-- <div class="col-12 col-md-6 col-lg-3">
                   <span class="logo-footer">
                       <h2>Galerie</h2>
                   </span>
                   <div class="grid-container gallery">
                       <div class="grid-item primary">
                           <a href="images/large/allo_school_math_large_1.png" class="big" rel="rel1">
                               <img src="images/large/allo_school_math_large_1.png" alt="" title="alloschoolmath.com">
                               <div class="secondary">
                                   <p><i class='bx bx-plus'></i></p>
                               </div>
                           </a>
                          
                       </div>
                       <div class="grid-item primary">
                           <a href="images/large/centre_kine_large_1.png" class="big" rel="rel1">
                               <img src="images/large/centre_kine_large_1.png" alt="" title="centrebelge.com">
                               <div class="secondary">
                                   <p><i class='bx bx-plus'></i></p>
                               </div>
                           </a>
                       </div>
                       <div class="grid-item primary">
                           <a href="images/large/maroc-emplois_large_1.png" class="big" rel="rel1">
                               <img src="images/large/maroc-emplois_large_1.png" alt="" title="maroc-emplois.net">
                               <div class="secondary">
                                   <p><i class='bx bx-plus'></i></p>
                               </div>
                           </a>
                       </div>
                       <div class="grid-item primary">
                           <a href="images/large/global-fairs_large.png" class="big" rel="rel1">
                               <img src="images/large/global-fairs_large.png" alt="" title="global-fairs.com">
                               <div class="secondary">
                                   <p><i class='bx bx-plus'></i></p>
                               </div>
                           </a>
                       </div>
                      
                      
                     </div>
                 </div> --}}
                </div>
              
            </div>
   </div>
   <script>
    var gallery = $('.gallery a').simpleLightbox({
    });
</script>
{{-- <script>

    (function () {

'use strict'
var forms = document.querySelectorAll('.needs-validation')
Array.prototype.slice.call(forms)

.forEach(function (form) {

  form.addEventListener('submit', function (event) {

    if (!form.checkValidity()) {

      event.preventDefault()

      event.stopPropagation()

    }

    form.classList.add('was-validated')

  }, false)

})

})()

</script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.1/dist/circle-progress.js"></script>
<script src="{{asset('js/custom.js')}}">
</script>
  
<script>
    $("#submit_newsletter").click(function(event){
    event.preventDefault();
    var Email = $("#newsletter_mail").val();
     var CSRF_TOKEN = $('#token').val();
     $("#error_mail").remove();
    $.ajax({
            url: '/newsletter',
            type: 'POST',
            dataType: 'json',
            data: { email: Email, _token:CSRF_TOKEN},
            success: function(response){ // What to do if we succeed
                $('.call_to_action.last').append("<div class='alert alert-success mail mt-3'>"+response.success+"</div>");
            },
           
            error: function (error) {
               
               for (let [key, value] of Object.entries(error.responseJSON.errors)) {
               
                $(`#submit_newsletter`).after(`<div class='alert alert-danger mt-2'  id=error_mail>${value}</div>`);
               }
              
           }
            
        });
        
    });
</script> 
<script type="text/javascript">
   

    $('#upload_form').on('submit',(function(e) {

        $("#error_name").remove();
        $("#error_email").remove();
        $("#error_description").remove();
        $("#error_project").remove();
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
         
        e.preventDefault();
        var formData = new FormData(this);
       
        $.ajax({
           type:'POST',
           url: "{{ route('demande_project')}}",
           data:formData,
           cache:false,
           contentType: false,
           processData: false,
         
             complete: function(response) 
            {
                $('.call_to_action.devis').append("<div class='alert alert-success mail mt-3'>"+response.responseJSON.demande_devis+"</div>");
                $(".image-project").append("<div class='alert alert-success mail mt-3'>"+response.responseJSON.message+"</div>");
                
            },
            
            error:function(error){
                for (let [key, value] of Object.entries(error.responseJSON.errors)) {
               
               $(`#${key}_error`).after(`<div class='alert alert-danger mt-2'  id=error_${key}>${value}</div>`);
               
              }          
              }
        });
    }));
   
</script>

<script src="{{asset('js/media.js')}}">
</script>
<script>
        var newsletter=document.getElementById("submit_newletter");
        newsletter.addEventListener('click', (event) => {
        if($("#error_mail")  != null){
            $(".alert-success.mail").remove();
            }
        });
</script>

</body>
<style>
   
</style>
</html>