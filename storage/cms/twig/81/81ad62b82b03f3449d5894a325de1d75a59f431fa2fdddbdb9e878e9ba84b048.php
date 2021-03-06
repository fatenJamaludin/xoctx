<?php

/* D:\xampp\htdocs\install-master/themes/fabriciorabelo-squad/pages/home.htm */
class __TwigTemplate_334889b8f352ef3ca4ec82225b9200b9acfbc297ee6aa036db346541a101d0bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Section: intro -->
<section id=\"intro\" class=\"intro\">

    <div class=\"slogan\">
        ";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "    </div>
    <div class=\"page-scroll\">
        <a href=\"#service\" class=\"btn btn-circle\">
            <i class=\"fa fa-angle-double-down animated\"></i>
        </a>
    </div>
</section>
<!-- /Section: intro -->

<!-- Section: about -->
<section id=\"about\" class=\"home-section text-center\">
    <div class=\"heading-about\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"wow bounceInDown\" data-wow-delay=\"0.4s\">
                <div class=\"section-heading\">
                <h2>About us</h2>
                <i class=\"fa fa-2x fa-angle-down\"></i>

                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class=\"container\">

    <div class=\"row\">
        <div class=\"col-lg-2 col-lg-offset-5\">
            <hr class=\"marginbot-50\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-6 col-sm-3 col-md-3\">
            <div class=\"wow bounceInUp\" data-wow-delay=\"0.2s\">
            <div class=\"team boxed-grey\">
                <div class=\"inner\">
                    <h5>Anna Hanaceck</h5>
                    <p class=\"subtitle\">Pixel Crafter</p>
                    <div class=\"avatar\"><img src=\"";
        // line 46
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/1.jpg");
        echo "\" alt=\"\" class=\"img-responsive img-circle\" /></div>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-6 col-sm-3 col-md-3\">
            <div class=\"wow bounceInUp\" data-wow-delay=\"0.5s\">
            <div class=\"team boxed-grey\">
                <div class=\"inner\">
                    <h5>Maura Daniels</h5>
                    <p class=\"subtitle\">Ruby on Rails</p>
                    <div class=\"avatar\"><img src=\"";
        // line 57
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/2.jpg");
        echo "\" alt=\"\" class=\"img-responsive img-circle\" /></div>

                </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-6 col-sm-3 col-md-3\">
            <div class=\"wow bounceInUp\" data-wow-delay=\"0.8s\">
            <div class=\"team boxed-grey\">
                <div class=\"inner\">
                    <h5>Jack Briane</h5>
                    <p class=\"subtitle\">jQuery Ninja</p>
                    <div class=\"avatar\"><img src=\"";
        // line 69
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/3.jpg");
        echo "\" alt=\"\" class=\"img-responsive img-circle\" /></div>

                </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-6 col-sm-3 col-md-3\">
            <div class=\"wow bounceInUp\" data-wow-delay=\"1s\">
            <div class=\"team boxed-grey\">
                <div class=\"inner\">
                    <h5>Tom Petterson</h5>
                    <p class=\"subtitle\">Typographer</p>
                    <div class=\"avatar\"><img src=\"";
        // line 81
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/team/4.jpg");
        echo "\" alt=\"\" class=\"img-responsive img-circle\" /></div>

                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- /Section: about -->


<!-- Section: services -->
<section id=\"service\" class=\"home-section text-center bg-gray\">

    <div class=\"heading-about\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"wow bounceInDown\" data-wow-delay=\"0.4s\">
                <div class=\"section-heading\">
                <h2>Our Services</h2>
                <i class=\"fa fa-2x fa-angle-down\"></i>

                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-2 col-lg-offset-5\">
            <hr class=\"marginbot-50\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-3 col-md-3\">
            <div class=\"wow fadeInLeft\" data-wow-delay=\"0.2s\">
            <div class=\"service-box\">
                <div class=\"service-icon\">
                    <img src=\"";
        // line 122
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/service-icon-1.png");
        echo "\" alt=\"\" />
                </div>
                <div class=\"service-desc\">
                    <h5>Print</h5>
                    <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-sm-3 col-md-3\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
            <div class=\"service-box\">
                <div class=\"service-icon\">
                    <img src=\"";
        // line 135
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/service-icon-2.png");
        echo "\" alt=\"\" />
                </div>
                <div class=\"service-desc\">
                    <h5>Web Design</h5>
                    <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-sm-3 col-md-3\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
            <div class=\"service-box\">
                <div class=\"service-icon\">
                    <img src=\"";
        // line 148
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/service-icon-3.png");
        echo "\" alt=\"\" />
                </div>
                <div class=\"service-desc\">
                    <h5>Photography</h5>
                    <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-sm-3 col-md-3\">
            <div class=\"wow fadeInRight\" data-wow-delay=\"0.2s\">
            <div class=\"service-box\">
                <div class=\"service-icon\">
                    <img src=\"";
        // line 161
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/icons/service-icon-4.png");
        echo "\" alt=\"\" />
                </div>
                <div class=\"service-desc\">
                    <h5>Cloud System</h5>
                    <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- /Section: services -->




<!-- Section: contact -->
<section id=\"contact\" class=\"home-section text-center\">
    <div class=\"heading-contact\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"wow bounceInDown\" data-wow-delay=\"0.4s\">
                <div class=\"section-heading\">
                <h2>Get in touch</h2>
                <i class=\"fa fa-2x fa-angle-down\"></i>

                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class=\"container\">

    <div class=\"row\">
        <div class=\"col-lg-2 col-lg-offset-5\">
            <hr class=\"marginbot-50\">
        </div>
    </div>
<div class=\"row\">
    <div class=\"col-lg-8\">
        <div class=\"boxed-grey\">
            <form id=\"contact-form\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"name\">
                            Name</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\" required=\"required\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">
                            Email Address</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span>
                            </span>
                            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\" required=\"required\" /></div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"subject\">
                            Subject</label>
                        <select id=\"subject\" name=\"subject\" class=\"form-control\" required=\"required\">
                            <option value=\"na\" selected=\"\">Choose One:</option>
                            <option value=\"service\">General Customer Service</option>
                            <option value=\"suggestions\">Suggestions</option>
                            <option value=\"product\">Product Support</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"name\">
                            Message</label>
                        <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"9\" cols=\"25\" required=\"required\"
                            placeholder=\"Message\"></textarea>
                    </div>
                </div>
                <div class=\"col-md-12\">
                    <button type=\"submit\" class=\"btn btn-skin pull-right\" id=\"btnContactUs\">
                        Send Message</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class=\"col-lg-4\">
        <div class=\"widget-contact\">
            <h5>Main Office</h5>

            <address>
              <strong>Squas Design, Inc.</strong><br>
              Tower 795 Folsom Ave, Beautiful Suite 600<br>
              San Francisco, CA 94107<br>
              <abbr title=\"Phone\">P:</abbr> (123) 456-7890
            </address>

            <address>
              <strong>Email</strong><br>
              <a href=\"mailto:#\">email.name@example.com</a>
            </address>
            <address>
              <strong>We're on social networks</strong><br>
                    <ul class=\"company-social\">
                        <li class=\"social-facebook\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li class=\"social-twitter\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li class=\"social-dribble\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-dribbble\"></i></a></li>
                        <li class=\"social-google\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
                    </ul>
            </address>

        </div>
    </div>
</div>

    </div>
</section>
<!-- /Section: contact -->";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\install-master/themes/fabriciorabelo-squad/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 161,  191 => 148,  175 => 135,  159 => 122,  115 => 81,  100 => 69,  85 => 57,  71 => 46,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!-- Section: intro -->*/
/* <section id="intro" class="intro">*/
/* */
/*     <div class="slogan">*/
/*         {% content 'welcome.htm' %}*/
/*     </div>*/
/*     <div class="page-scroll">*/
/*         <a href="#service" class="btn btn-circle">*/
/*             <i class="fa fa-angle-double-down animated"></i>*/
/*         </a>*/
/*     </div>*/
/* </section>*/
/* <!-- /Section: intro -->*/
/* */
/* <!-- Section: about -->*/
/* <section id="about" class="home-section text-center">*/
/*     <div class="heading-about">*/
/*         <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2">*/
/*                 <div class="wow bounceInDown" data-wow-delay="0.4s">*/
/*                 <div class="section-heading">*/
/*                 <h2>About us</h2>*/
/*                 <i class="fa fa-2x fa-angle-down"></i>*/
/* */
/*                 </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container">*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-2 col-lg-offset-5">*/
/*             <hr class="marginbot-50">*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-xs-6 col-sm-3 col-md-3">*/
/*             <div class="wow bounceInUp" data-wow-delay="0.2s">*/
/*             <div class="team boxed-grey">*/
/*                 <div class="inner">*/
/*                     <h5>Anna Hanaceck</h5>*/
/*                     <p class="subtitle">Pixel Crafter</p>*/
/*                     <div class="avatar"><img src="{{ 'assets/images/team/1.jpg'|theme }}" alt="" class="img-responsive img-circle" /></div>*/
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-xs-6 col-sm-3 col-md-3">*/
/*             <div class="wow bounceInUp" data-wow-delay="0.5s">*/
/*             <div class="team boxed-grey">*/
/*                 <div class="inner">*/
/*                     <h5>Maura Daniels</h5>*/
/*                     <p class="subtitle">Ruby on Rails</p>*/
/*                     <div class="avatar"><img src="{{ 'assets/images/team/2.jpg'|theme }}" alt="" class="img-responsive img-circle" /></div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-xs-6 col-sm-3 col-md-3">*/
/*             <div class="wow bounceInUp" data-wow-delay="0.8s">*/
/*             <div class="team boxed-grey">*/
/*                 <div class="inner">*/
/*                     <h5>Jack Briane</h5>*/
/*                     <p class="subtitle">jQuery Ninja</p>*/
/*                     <div class="avatar"><img src="{{ 'assets/images/team/3.jpg'|theme }}" alt="" class="img-responsive img-circle" /></div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-xs-6 col-sm-3 col-md-3">*/
/*             <div class="wow bounceInUp" data-wow-delay="1s">*/
/*             <div class="team boxed-grey">*/
/*                 <div class="inner">*/
/*                     <h5>Tom Petterson</h5>*/
/*                     <p class="subtitle">Typographer</p>*/
/*                     <div class="avatar"><img src="{{ 'assets/images/team/4.jpg'|theme }}" alt="" class="img-responsive img-circle" /></div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     </div>*/
/* </section>*/
/* <!-- /Section: about -->*/
/* */
/* */
/* <!-- Section: services -->*/
/* <section id="service" class="home-section text-center bg-gray">*/
/* */
/*     <div class="heading-about">*/
/*         <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2">*/
/*                 <div class="wow bounceInDown" data-wow-delay="0.4s">*/
/*                 <div class="section-heading">*/
/*                 <h2>Our Services</h2>*/
/*                 <i class="fa fa-2x fa-angle-down"></i>*/
/* */
/*                 </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-2 col-lg-offset-5">*/
/*             <hr class="marginbot-50">*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-sm-3 col-md-3">*/
/*             <div class="wow fadeInLeft" data-wow-delay="0.2s">*/
/*             <div class="service-box">*/
/*                 <div class="service-icon">*/
/*                     <img src="{{ 'assets/images/icons/service-icon-1.png'|theme }}" alt="" />*/
/*                 </div>*/
/*                 <div class="service-desc">*/
/*                     <h5>Print</h5>*/
/*                     <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>*/
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3 col-md-3">*/
/*             <div class="wow fadeInUp" data-wow-delay="0.2s">*/
/*             <div class="service-box">*/
/*                 <div class="service-icon">*/
/*                     <img src="{{ 'assets/images/icons/service-icon-2.png'|theme }}" alt="" />*/
/*                 </div>*/
/*                 <div class="service-desc">*/
/*                     <h5>Web Design</h5>*/
/*                     <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>*/
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3 col-md-3">*/
/*             <div class="wow fadeInUp" data-wow-delay="0.2s">*/
/*             <div class="service-box">*/
/*                 <div class="service-icon">*/
/*                     <img src="{{ 'assets/images/icons/service-icon-3.png'|theme }}" alt="" />*/
/*                 </div>*/
/*                 <div class="service-desc">*/
/*                     <h5>Photography</h5>*/
/*                     <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>*/
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="col-sm-3 col-md-3">*/
/*             <div class="wow fadeInRight" data-wow-delay="0.2s">*/
/*             <div class="service-box">*/
/*                 <div class="service-icon">*/
/*                     <img src="{{ 'assets/images/icons/service-icon-4.png'|theme }}" alt="" />*/
/*                 </div>*/
/*                 <div class="service-desc">*/
/*                     <h5>Cloud System</h5>*/
/*                     <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>*/
/*                 </div>*/
/*             </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     </div>*/
/* </section>*/
/* <!-- /Section: services -->*/
/* */
/* */
/* */
/* */
/* <!-- Section: contact -->*/
/* <section id="contact" class="home-section text-center">*/
/*     <div class="heading-contact">*/
/*         <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-lg-8 col-lg-offset-2">*/
/*                 <div class="wow bounceInDown" data-wow-delay="0.4s">*/
/*                 <div class="section-heading">*/
/*                 <h2>Get in touch</h2>*/
/*                 <i class="fa fa-2x fa-angle-down"></i>*/
/* */
/*                 </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container">*/
/* */
/*     <div class="row">*/
/*         <div class="col-lg-2 col-lg-offset-5">*/
/*             <hr class="marginbot-50">*/
/*         </div>*/
/*     </div>*/
/* <div class="row">*/
/*     <div class="col-lg-8">*/
/*         <div class="boxed-grey">*/
/*             <form id="contact-form">*/
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     <div class="form-group">*/
/*                         <label for="name">*/
/*                             Name</label>*/
/*                         <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="email">*/
/*                             Email Address</label>*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>*/
/*                             </span>*/
/*                             <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label for="subject">*/
/*                             Subject</label>*/
/*                         <select id="subject" name="subject" class="form-control" required="required">*/
/*                             <option value="na" selected="">Choose One:</option>*/
/*                             <option value="service">General Customer Service</option>*/
/*                             <option value="suggestions">Suggestions</option>*/
/*                             <option value="product">Product Support</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <div class="form-group">*/
/*                         <label for="name">*/
/*                             Message</label>*/
/*                         <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"*/
/*                             placeholder="Message"></textarea>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-md-12">*/
/*                     <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">*/
/*                         Send Message</button>*/
/*                 </div>*/
/*             </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="col-lg-4">*/
/*         <div class="widget-contact">*/
/*             <h5>Main Office</h5>*/
/* */
/*             <address>*/
/*               <strong>Squas Design, Inc.</strong><br>*/
/*               Tower 795 Folsom Ave, Beautiful Suite 600<br>*/
/*               San Francisco, CA 94107<br>*/
/*               <abbr title="Phone">P:</abbr> (123) 456-7890*/
/*             </address>*/
/* */
/*             <address>*/
/*               <strong>Email</strong><br>*/
/*               <a href="mailto:#">email.name@example.com</a>*/
/*             </address>*/
/*             <address>*/
/*               <strong>We're on social networks</strong><br>*/
/*                     <ul class="company-social">*/
/*                         <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>*/
/*                         <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>*/
/*                         <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>*/
/*                         <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>*/
/*                     </ul>*/
/*             </address>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/*     </div>*/
/* </section>*/
/* <!-- /Section: contact -->*/
