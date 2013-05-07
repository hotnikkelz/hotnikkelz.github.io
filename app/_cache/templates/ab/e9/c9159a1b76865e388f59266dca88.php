<?php

/* index.html */
class __TwigTemplate_abe9c9159a1b76865e388f59266dca88 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("partials/header.html")->display($context);
        // line 2
        echo "        <section class=\"main clearfix\">
            <div class=\"wrapper\">
                <div class=\"teasers\">
                    ";
        // line 5
        $this->env->loadTemplate("partials/list_posts.html")->display($context);
        // line 6
        echo "                </div> <!-- /.teasers -->

                <aside class=\"widget archives\">
                    <h2 class=\"widget__heading\">Archives</h2>
                    <nav>
                        <ul>
                            <li><a href=\"\">Article 1</a></li>
                            <li><a href=\"\">Article 1</a></li>
                            <li><a href=\"\">Article 1</a></li>
                            <li><a href=\"\">Article 1</a></li>
                            <li><a href=\"\">Article 1</a></li>
                        </ul>
                    </nav>
                </aside>
            </div>
        </section>

";
        // line 23
        $this->env->loadTemplate("partials/footer.html")->display($context);
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
