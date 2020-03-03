<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bootstrap/templates/system/page.html.twig */
class __TwigTemplate_e5f59fe4b3fe6a44e4d56e14f89e22aa3b4a70a7ad08a42c143912e8fa9a7513 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 54, "if" => 56, "block" => 57];
        $filters = ["clean_class" => 62, "escape" => 65, "t" => 85];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 105
        echo "
";
        // line 107
        $this->displayBlock('main', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 174
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 65
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 66
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 67
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 69
        echo "\t  <div class=\"head-content\">
\t    <a href=\"#home\" class=\"logo\">
      <svg width=\"146\" height=\"55\" viewBox=\"0 0 146 55\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" style=\"\">
        <path d=\"M42.983 12.1304L44.3021 41.6841H38.0861L37.6252 30.4096L22.9075 52.3602L16.519 31.7566L6.74119 55H0L17.3477 13.7608L24.9588 38.2323L42.983 12.1304Z\" fill=\"black\"></path>
        <path d=\"M29.0778 0C44.1059 0 56.2885 12.2058 56.2885 27.2625C56.2885 38.6552 49.3136 48.4157 39.4088 52.4914L39.4087 48.6386C47.3218 44.7926 52.7775 36.6659 52.7775 27.2625C52.7775 14.1486 42.1668 3.51774 29.0778 3.51774C15.9889 3.51774 5.37824 14.1486 5.37824 27.2625C5.37824 32.7426 7.23117 37.7891 10.3436 41.8074L7.94401 41.807L7.94359 44.4361C4.14414 39.7483 1.86719 33.7718 1.86719 27.2625C1.86719 12.2058 14.0498 0 29.0778 0Z\" fill=\"black\"></path>
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M39.7056 48.5214L38.0575 47.6943H34.4551V53.2081H38.0575L39.7056 52.3601V48.5214Z\" fill=\"black\"></path>
        <path d=\"M34.4551 48.5215H30.8711V49.8999H34.4551V48.5215Z\" fill=\"black\"></path>
        <path d=\"M34.4551 51.0029H30.8711V52.3814H34.4551V51.0029Z\" fill=\"black\"></path>
        <path d=\"M72.0858 22.3193L70.8937 19.6241L70.3495 22.3193L68.5873 31.2081H65.7107L69.6498 12.1606H69.9608L75.1956 22.4489L76.7505 25.8956L78.3054 22.4489L83.4365 12.1606H83.7216L87.8161 31.2081H84.9655L83.0478 22.3193L82.4777 19.6241L81.4411 22.3193L76.8282 31.2081H76.6727L72.0858 22.3193ZM95.2609 31.4673C94.1898 31.4673 93.2007 31.2124 92.2937 30.7028C91.3866 30.1931 90.661 29.4675 90.1168 28.5259C89.5726 27.5843 89.3005 26.483 89.3005 25.2218C89.3005 23.9778 89.538 22.8894 90.0132 21.9565C90.4883 21.0235 91.1664 20.2979 92.0475 19.7796C92.9286 19.2613 93.9652 19.0022 95.1573 19.0022C95.8483 19.0022 96.4962 19.1231 97.1009 19.365C97.7056 19.6069 98.2152 19.9049 98.6299 20.2591C99.0445 20.6132 99.3209 20.9631 99.4591 21.3086L99.511 19.3132H102.18V31.2081H99.5369L99.4851 29.109C99.1914 29.731 98.6558 30.2795 97.8783 30.7546C97.1009 31.2297 96.2284 31.4673 95.2609 31.4673ZM95.7274 29.1349C96.7122 29.1349 97.5414 28.7937 98.2152 28.1113C98.889 27.4288 99.2259 26.5348 99.2259 25.4291V25.2477C99.2259 24.5048 99.0704 23.8396 98.7594 23.2522C98.4485 22.6648 98.0252 22.207 97.4896 21.8787C96.954 21.5505 96.3666 21.3864 95.7274 21.3864C94.6217 21.3864 93.7665 21.7448 93.1618 22.4618C92.5571 23.1788 92.2548 24.1074 92.2548 25.2477C92.2548 26.4052 92.5528 27.3425 93.1489 28.0594C93.7449 28.7764 94.6044 29.1349 95.7274 29.1349ZM105.26 19.3132H108.059V21.6455C108.335 20.8508 108.784 20.2115 109.406 19.7278C110.028 19.2441 110.736 19.0022 111.531 19.0022C112.084 19.0022 112.464 19.054 112.671 19.1577L112.283 21.9824C112.127 21.8787 111.79 21.8269 111.272 21.8269C110.46 21.8269 109.721 22.0861 109.056 22.6044C108.391 23.1227 108.059 23.9519 108.059 25.0922V31.2081H105.26V19.3132ZM114.15 19.3132H117.338L119.903 24.6776L120.732 26.8285L121.562 24.6776L124.101 19.3132H127.211L120.966 31.2081H120.421L114.15 19.3132ZM134.312 31.4673C132.895 31.4673 131.712 31.1865 130.761 30.625C129.811 30.0635 129.112 29.312 128.662 28.3704C128.213 27.4288 127.989 26.3966 127.989 25.2736C127.989 24.0124 128.252 22.9067 128.779 21.9565C129.306 21.0063 130.036 20.2763 130.969 19.7667C131.902 19.257 132.956 19.0022 134.13 19.0022C135.962 19.0022 137.322 19.5075 138.212 20.5182C139.102 21.5289 139.547 22.9499 139.547 24.7812C139.547 25.2477 139.521 25.7314 139.469 26.2324H130.917C131.107 27.2863 131.483 28.0465 132.044 28.513C132.606 28.9794 133.388 29.2127 134.39 29.2127C135.219 29.2127 135.901 29.1436 136.437 29.0053C136.972 28.8671 137.465 28.6771 137.914 28.4352L138.769 30.4307C138.337 30.7071 137.75 30.949 137.007 31.1563C136.264 31.3636 135.366 31.4673 134.312 31.4673ZM136.826 24.2888C136.843 23.2177 136.61 22.4618 136.126 22.0213C135.642 21.5807 134.951 21.3604 134.053 21.3604C132.239 21.3604 131.193 22.3366 130.917 24.2888H136.826ZM142.708 12.1606H145.481V31.2081H142.708V12.1606ZM65.4336 36.9252H67.3441C67.8166 36.9252 68.172 37.0711 68.4106 37.3628C68.6491 37.6546 68.7683 38.009 68.7683 38.4258C68.7683 38.8426 68.6491 39.1958 68.4106 39.4853C68.172 39.7748 67.8166 39.9195 67.3441 39.9195H66.0867V41.7119H65.4336V36.9252ZM67.3372 37.5296H66.0867V39.3151H67.3024C67.5757 39.3151 67.7807 39.2282 67.9173 39.0545C68.0539 38.8809 68.1222 38.6713 68.1222 38.4258C68.1222 38.1803 68.0562 37.9696 67.9242 37.7936C67.7922 37.6176 67.5966 37.5296 67.3372 37.5296ZM69.9105 39.329C69.9105 38.6435 70.1444 38.0622 70.6122 37.5852C71.08 37.1081 71.652 36.8696 72.3282 36.8696C73.0091 36.8696 73.5845 37.1081 74.0547 37.5852C74.5248 38.0622 74.7598 38.6435 74.7598 39.329C74.7598 40.0098 74.5248 40.5888 74.0547 41.0658C73.5845 41.5429 73.0091 41.7814 72.3282 41.7814C71.652 41.7814 71.08 41.5429 70.6122 41.0658C70.1444 40.5888 69.9105 40.0098 69.9105 39.329ZM71.0707 38.0298C70.728 38.3864 70.5566 38.8195 70.5566 39.329C70.5566 39.8384 70.7268 40.2703 71.0673 40.6247C71.4077 40.979 71.828 41.1561 72.3282 41.1561C72.8284 41.1561 73.2499 40.979 73.5926 40.6247C73.9354 40.2703 74.1068 39.8384 74.1068 39.329C74.1068 38.8195 73.9354 38.3864 73.5926 38.0298C73.2499 37.6732 72.8284 37.4948 72.3282 37.4948C71.8326 37.4948 71.4135 37.6732 71.0707 38.0298ZM81.05 36.9252H81.7448L80.126 41.7119H79.5633L78.7157 38.7245L77.875 41.7119H77.3123L75.6936 36.9252H76.3883L77.5902 40.6698L78.4725 37.5713H78.9658L79.8481 40.6698L81.05 36.9252ZM83.0814 36.9252H85.916V37.5296H83.7276V39.058H85.6381V39.6624H83.7276V41.1075H85.9855V41.7119H83.0814V36.9252ZM89.594 39.8986L90.8723 41.7119H90.0872L88.8506 39.9195H88.2392V41.7119H87.5862V36.9252H89.4272C89.8996 36.9252 90.254 37.0711 90.4902 37.3628C90.7264 37.6546 90.8445 38.009 90.8445 38.4258C90.8445 38.8149 90.7414 39.1483 90.5353 39.4262C90.3292 39.7041 90.0154 39.8616 89.594 39.8986ZM89.4064 37.5296H88.2392V39.3151H89.3786C89.6519 39.3151 89.8533 39.2294 89.983 39.058C90.1127 38.8866 90.1775 38.6759 90.1775 38.4258C90.1775 38.1803 90.1139 37.9696 89.9865 37.7936C89.8591 37.6176 89.6658 37.5296 89.4064 37.5296ZM98.5756 37.5018L98.1101 37.9325C97.7767 37.6361 97.3922 37.4879 96.9569 37.4879C96.4613 37.4879 96.0421 37.6674 95.6994 38.0263C95.3566 38.3853 95.1853 38.8195 95.1853 39.329C95.1853 39.8384 95.3566 40.2715 95.6994 40.6281C96.0421 40.9848 96.4613 41.1631 96.9569 41.1631C97.3922 41.1631 97.7512 41.0461 98.0337 40.8122C98.3162 40.5783 98.4668 40.2645 98.4853 39.8709H97.1236V39.3081H99.2217C99.2217 40.1279 99.0202 40.7451 98.6173 41.1596C98.2143 41.5741 97.6609 41.7814 96.9569 41.7814C96.2806 41.7814 95.7086 41.5429 95.2409 41.0658C94.7731 40.5888 94.5392 40.0098 94.5392 39.329C94.5392 38.6435 94.7731 38.0622 95.2409 37.5852C95.7086 37.1081 96.2806 36.8696 96.9569 36.8696C97.5821 36.8696 98.1217 37.0803 98.5756 37.5018ZM102.691 39.8986L103.97 41.7119H103.185L101.948 39.9195H101.337V41.7119H100.683V36.9252H102.525C102.997 36.9252 103.351 37.0711 103.587 37.3628C103.824 37.6546 103.942 38.009 103.942 38.4258C103.942 38.8149 103.839 39.1483 103.633 39.4262C103.427 39.7041 103.113 39.8616 102.691 39.8986ZM102.504 37.5296H101.337V39.3151H102.476C102.749 39.3151 102.951 39.2294 103.08 39.058C103.21 38.8866 103.275 38.6759 103.275 38.4258C103.275 38.1803 103.211 37.9696 103.084 37.7936C102.956 37.6176 102.763 37.5296 102.504 37.5296ZM105.251 39.329C105.251 38.6435 105.485 38.0622 105.952 37.5852C106.42 37.1081 106.992 36.8696 107.668 36.8696C108.349 36.8696 108.925 37.1081 109.395 37.5852C109.865 38.0622 110.1 38.6435 110.1 39.329C110.1 40.0098 109.865 40.5888 109.395 41.0658C108.925 41.5429 108.349 41.7814 107.668 41.7814C106.992 41.7814 106.42 41.5429 105.952 41.0658C105.485 40.5888 105.251 40.0098 105.251 39.329ZM106.411 38.0298C106.068 38.3864 105.897 38.8195 105.897 39.329C105.897 39.8384 106.067 40.2703 106.407 40.6247C106.748 40.979 107.168 41.1561 107.668 41.1561C108.169 41.1561 108.59 40.979 108.933 40.6247C109.276 40.2703 109.447 39.8384 109.447 39.329C109.447 38.8195 109.276 38.3864 108.933 38.0298C108.59 37.6732 108.169 37.4948 107.668 37.4948C107.173 37.4948 106.754 37.6732 106.411 38.0298ZM112.597 40.8504C112.81 41.0542 113.069 41.1561 113.375 41.1561C113.681 41.1561 113.94 41.0542 114.153 40.8504C114.366 40.6467 114.473 40.385 114.473 40.0654V36.9252H115.126V40.0654C115.126 40.5749 114.956 40.9882 114.615 41.3055C114.275 41.6228 113.861 41.7814 113.375 41.7814C112.889 41.7814 112.475 41.6228 112.135 41.3055C111.794 40.9882 111.624 40.5749 111.624 40.0654V36.9252H112.277V40.0654C112.277 40.385 112.384 40.6467 112.597 40.8504ZM118.873 36.9252C119.346 36.9252 119.701 37.0711 119.94 37.3628C120.178 37.6546 120.297 38.009 120.297 38.4258C120.297 38.8426 120.178 39.1958 119.94 39.4853C119.701 39.7748 119.346 39.9195 118.873 39.9195H117.616V41.7119H116.963V36.9252H118.873ZM118.866 37.5296H117.616V39.3151H118.832C119.105 39.3151 119.31 39.2282 119.446 39.0545C119.583 38.8809 119.651 38.6713 119.651 38.4258C119.651 38.1803 119.585 37.9696 119.453 37.7936C119.321 37.6176 119.126 37.5296 118.866 37.5296Z\" fill=\"black\"></path>
      </svg>
    </a>
      <div class=\"navbar-header\">
        ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        ";
        // line 83
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 84
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 91
        echo "      </div>
</div>
      ";
        // line 94
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 95
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 99
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 100
            echo "        </div>
      ";
        }
        // line 102
        echo "    </header>
  ";
    }

    // line 107
    public function block_main($context, array $blocks = [])
    {
        // line 108
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 112
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 113
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 118
            echo "      ";
        }
        // line 119
        echo "
      ";
        // line 121
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 122
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 127
            echo "      ";
        }
        // line 128
        echo "
      ";
        // line 130
        echo "      ";
        // line 131
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 132
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 133
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 134
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 135
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 138
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 141
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 142
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 145
            echo "        ";
        }
        // line 146
        echo "
        ";
        // line 148
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 149
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 152
            echo "        ";
        }
        // line 153
        echo "
        ";
        // line 155
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 159
        echo "      </section>

      ";
        // line 162
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 163
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 168
            echo "      ";
        }
        // line 169
        echo "    </div>
  </div>
";
    }

    // line 113
    public function block_header($context, array $blocks = [])
    {
        // line 114
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 115
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 122
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 123
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 124
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 142
    public function block_highlighted($context, array $blocks = [])
    {
        // line 143
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 149
    public function block_help($context, array $blocks = [])
    {
        // line 150
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 155
    public function block_content($context, array $blocks = [])
    {
        // line 156
        echo "          <a id=\"main-content\"></a>
          ";
        // line 157
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
        ";
    }

    // line 163
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 164
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 165
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 174
    public function block_footer($context, array $blocks = [])
    {
        // line 175
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 176
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 176,  339 => 175,  336 => 174,  329 => 165,  326 => 164,  323 => 163,  317 => 157,  314 => 156,  311 => 155,  304 => 150,  301 => 149,  294 => 143,  291 => 142,  284 => 124,  281 => 123,  278 => 122,  271 => 115,  268 => 114,  265 => 113,  259 => 169,  256 => 168,  253 => 163,  250 => 162,  246 => 159,  243 => 155,  240 => 153,  237 => 152,  234 => 149,  231 => 148,  228 => 146,  225 => 145,  222 => 142,  219 => 141,  213 => 138,  211 => 135,  210 => 134,  209 => 133,  208 => 132,  207 => 131,  205 => 130,  202 => 128,  199 => 127,  196 => 122,  193 => 121,  190 => 119,  187 => 118,  184 => 113,  181 => 112,  174 => 108,  171 => 107,  166 => 102,  162 => 100,  159 => 99,  153 => 96,  150 => 95,  147 => 94,  143 => 91,  134 => 85,  131 => 84,  128 => 83,  124 => 81,  110 => 69,  104 => 67,  102 => 66,  97 => 65,  95 => 62,  94 => 61,  93 => 59,  91 => 58,  88 => 57,  82 => 174,  80 => 173,  77 => 172,  75 => 107,  72 => 105,  68 => 57,  66 => 56,  64 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header{{ navbar_attributes.addClass(navbar_classes) }} id=\"navbar\" role=\"banner\">
      {% if not navbar_attributes.hasClass(container) %}
        <div class=\"{{ container }}\">
      {% endif %}
\t  <div class=\"head-content\">
\t    <a href=\"#home\" class=\"logo\">
      <svg width=\"146\" height=\"55\" viewBox=\"0 0 146 55\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" style=\"\">
        <path d=\"M42.983 12.1304L44.3021 41.6841H38.0861L37.6252 30.4096L22.9075 52.3602L16.519 31.7566L6.74119 55H0L17.3477 13.7608L24.9588 38.2323L42.983 12.1304Z\" fill=\"black\"></path>
        <path d=\"M29.0778 0C44.1059 0 56.2885 12.2058 56.2885 27.2625C56.2885 38.6552 49.3136 48.4157 39.4088 52.4914L39.4087 48.6386C47.3218 44.7926 52.7775 36.6659 52.7775 27.2625C52.7775 14.1486 42.1668 3.51774 29.0778 3.51774C15.9889 3.51774 5.37824 14.1486 5.37824 27.2625C5.37824 32.7426 7.23117 37.7891 10.3436 41.8074L7.94401 41.807L7.94359 44.4361C4.14414 39.7483 1.86719 33.7718 1.86719 27.2625C1.86719 12.2058 14.0498 0 29.0778 0Z\" fill=\"black\"></path>
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M39.7056 48.5214L38.0575 47.6943H34.4551V53.2081H38.0575L39.7056 52.3601V48.5214Z\" fill=\"black\"></path>
        <path d=\"M34.4551 48.5215H30.8711V49.8999H34.4551V48.5215Z\" fill=\"black\"></path>
        <path d=\"M34.4551 51.0029H30.8711V52.3814H34.4551V51.0029Z\" fill=\"black\"></path>
        <path d=\"M72.0858 22.3193L70.8937 19.6241L70.3495 22.3193L68.5873 31.2081H65.7107L69.6498 12.1606H69.9608L75.1956 22.4489L76.7505 25.8956L78.3054 22.4489L83.4365 12.1606H83.7216L87.8161 31.2081H84.9655L83.0478 22.3193L82.4777 19.6241L81.4411 22.3193L76.8282 31.2081H76.6727L72.0858 22.3193ZM95.2609 31.4673C94.1898 31.4673 93.2007 31.2124 92.2937 30.7028C91.3866 30.1931 90.661 29.4675 90.1168 28.5259C89.5726 27.5843 89.3005 26.483 89.3005 25.2218C89.3005 23.9778 89.538 22.8894 90.0132 21.9565C90.4883 21.0235 91.1664 20.2979 92.0475 19.7796C92.9286 19.2613 93.9652 19.0022 95.1573 19.0022C95.8483 19.0022 96.4962 19.1231 97.1009 19.365C97.7056 19.6069 98.2152 19.9049 98.6299 20.2591C99.0445 20.6132 99.3209 20.9631 99.4591 21.3086L99.511 19.3132H102.18V31.2081H99.5369L99.4851 29.109C99.1914 29.731 98.6558 30.2795 97.8783 30.7546C97.1009 31.2297 96.2284 31.4673 95.2609 31.4673ZM95.7274 29.1349C96.7122 29.1349 97.5414 28.7937 98.2152 28.1113C98.889 27.4288 99.2259 26.5348 99.2259 25.4291V25.2477C99.2259 24.5048 99.0704 23.8396 98.7594 23.2522C98.4485 22.6648 98.0252 22.207 97.4896 21.8787C96.954 21.5505 96.3666 21.3864 95.7274 21.3864C94.6217 21.3864 93.7665 21.7448 93.1618 22.4618C92.5571 23.1788 92.2548 24.1074 92.2548 25.2477C92.2548 26.4052 92.5528 27.3425 93.1489 28.0594C93.7449 28.7764 94.6044 29.1349 95.7274 29.1349ZM105.26 19.3132H108.059V21.6455C108.335 20.8508 108.784 20.2115 109.406 19.7278C110.028 19.2441 110.736 19.0022 111.531 19.0022C112.084 19.0022 112.464 19.054 112.671 19.1577L112.283 21.9824C112.127 21.8787 111.79 21.8269 111.272 21.8269C110.46 21.8269 109.721 22.0861 109.056 22.6044C108.391 23.1227 108.059 23.9519 108.059 25.0922V31.2081H105.26V19.3132ZM114.15 19.3132H117.338L119.903 24.6776L120.732 26.8285L121.562 24.6776L124.101 19.3132H127.211L120.966 31.2081H120.421L114.15 19.3132ZM134.312 31.4673C132.895 31.4673 131.712 31.1865 130.761 30.625C129.811 30.0635 129.112 29.312 128.662 28.3704C128.213 27.4288 127.989 26.3966 127.989 25.2736C127.989 24.0124 128.252 22.9067 128.779 21.9565C129.306 21.0063 130.036 20.2763 130.969 19.7667C131.902 19.257 132.956 19.0022 134.13 19.0022C135.962 19.0022 137.322 19.5075 138.212 20.5182C139.102 21.5289 139.547 22.9499 139.547 24.7812C139.547 25.2477 139.521 25.7314 139.469 26.2324H130.917C131.107 27.2863 131.483 28.0465 132.044 28.513C132.606 28.9794 133.388 29.2127 134.39 29.2127C135.219 29.2127 135.901 29.1436 136.437 29.0053C136.972 28.8671 137.465 28.6771 137.914 28.4352L138.769 30.4307C138.337 30.7071 137.75 30.949 137.007 31.1563C136.264 31.3636 135.366 31.4673 134.312 31.4673ZM136.826 24.2888C136.843 23.2177 136.61 22.4618 136.126 22.0213C135.642 21.5807 134.951 21.3604 134.053 21.3604C132.239 21.3604 131.193 22.3366 130.917 24.2888H136.826ZM142.708 12.1606H145.481V31.2081H142.708V12.1606ZM65.4336 36.9252H67.3441C67.8166 36.9252 68.172 37.0711 68.4106 37.3628C68.6491 37.6546 68.7683 38.009 68.7683 38.4258C68.7683 38.8426 68.6491 39.1958 68.4106 39.4853C68.172 39.7748 67.8166 39.9195 67.3441 39.9195H66.0867V41.7119H65.4336V36.9252ZM67.3372 37.5296H66.0867V39.3151H67.3024C67.5757 39.3151 67.7807 39.2282 67.9173 39.0545C68.0539 38.8809 68.1222 38.6713 68.1222 38.4258C68.1222 38.1803 68.0562 37.9696 67.9242 37.7936C67.7922 37.6176 67.5966 37.5296 67.3372 37.5296ZM69.9105 39.329C69.9105 38.6435 70.1444 38.0622 70.6122 37.5852C71.08 37.1081 71.652 36.8696 72.3282 36.8696C73.0091 36.8696 73.5845 37.1081 74.0547 37.5852C74.5248 38.0622 74.7598 38.6435 74.7598 39.329C74.7598 40.0098 74.5248 40.5888 74.0547 41.0658C73.5845 41.5429 73.0091 41.7814 72.3282 41.7814C71.652 41.7814 71.08 41.5429 70.6122 41.0658C70.1444 40.5888 69.9105 40.0098 69.9105 39.329ZM71.0707 38.0298C70.728 38.3864 70.5566 38.8195 70.5566 39.329C70.5566 39.8384 70.7268 40.2703 71.0673 40.6247C71.4077 40.979 71.828 41.1561 72.3282 41.1561C72.8284 41.1561 73.2499 40.979 73.5926 40.6247C73.9354 40.2703 74.1068 39.8384 74.1068 39.329C74.1068 38.8195 73.9354 38.3864 73.5926 38.0298C73.2499 37.6732 72.8284 37.4948 72.3282 37.4948C71.8326 37.4948 71.4135 37.6732 71.0707 38.0298ZM81.05 36.9252H81.7448L80.126 41.7119H79.5633L78.7157 38.7245L77.875 41.7119H77.3123L75.6936 36.9252H76.3883L77.5902 40.6698L78.4725 37.5713H78.9658L79.8481 40.6698L81.05 36.9252ZM83.0814 36.9252H85.916V37.5296H83.7276V39.058H85.6381V39.6624H83.7276V41.1075H85.9855V41.7119H83.0814V36.9252ZM89.594 39.8986L90.8723 41.7119H90.0872L88.8506 39.9195H88.2392V41.7119H87.5862V36.9252H89.4272C89.8996 36.9252 90.254 37.0711 90.4902 37.3628C90.7264 37.6546 90.8445 38.009 90.8445 38.4258C90.8445 38.8149 90.7414 39.1483 90.5353 39.4262C90.3292 39.7041 90.0154 39.8616 89.594 39.8986ZM89.4064 37.5296H88.2392V39.3151H89.3786C89.6519 39.3151 89.8533 39.2294 89.983 39.058C90.1127 38.8866 90.1775 38.6759 90.1775 38.4258C90.1775 38.1803 90.1139 37.9696 89.9865 37.7936C89.8591 37.6176 89.6658 37.5296 89.4064 37.5296ZM98.5756 37.5018L98.1101 37.9325C97.7767 37.6361 97.3922 37.4879 96.9569 37.4879C96.4613 37.4879 96.0421 37.6674 95.6994 38.0263C95.3566 38.3853 95.1853 38.8195 95.1853 39.329C95.1853 39.8384 95.3566 40.2715 95.6994 40.6281C96.0421 40.9848 96.4613 41.1631 96.9569 41.1631C97.3922 41.1631 97.7512 41.0461 98.0337 40.8122C98.3162 40.5783 98.4668 40.2645 98.4853 39.8709H97.1236V39.3081H99.2217C99.2217 40.1279 99.0202 40.7451 98.6173 41.1596C98.2143 41.5741 97.6609 41.7814 96.9569 41.7814C96.2806 41.7814 95.7086 41.5429 95.2409 41.0658C94.7731 40.5888 94.5392 40.0098 94.5392 39.329C94.5392 38.6435 94.7731 38.0622 95.2409 37.5852C95.7086 37.1081 96.2806 36.8696 96.9569 36.8696C97.5821 36.8696 98.1217 37.0803 98.5756 37.5018ZM102.691 39.8986L103.97 41.7119H103.185L101.948 39.9195H101.337V41.7119H100.683V36.9252H102.525C102.997 36.9252 103.351 37.0711 103.587 37.3628C103.824 37.6546 103.942 38.009 103.942 38.4258C103.942 38.8149 103.839 39.1483 103.633 39.4262C103.427 39.7041 103.113 39.8616 102.691 39.8986ZM102.504 37.5296H101.337V39.3151H102.476C102.749 39.3151 102.951 39.2294 103.08 39.058C103.21 38.8866 103.275 38.6759 103.275 38.4258C103.275 38.1803 103.211 37.9696 103.084 37.7936C102.956 37.6176 102.763 37.5296 102.504 37.5296ZM105.251 39.329C105.251 38.6435 105.485 38.0622 105.952 37.5852C106.42 37.1081 106.992 36.8696 107.668 36.8696C108.349 36.8696 108.925 37.1081 109.395 37.5852C109.865 38.0622 110.1 38.6435 110.1 39.329C110.1 40.0098 109.865 40.5888 109.395 41.0658C108.925 41.5429 108.349 41.7814 107.668 41.7814C106.992 41.7814 106.42 41.5429 105.952 41.0658C105.485 40.5888 105.251 40.0098 105.251 39.329ZM106.411 38.0298C106.068 38.3864 105.897 38.8195 105.897 39.329C105.897 39.8384 106.067 40.2703 106.407 40.6247C106.748 40.979 107.168 41.1561 107.668 41.1561C108.169 41.1561 108.59 40.979 108.933 40.6247C109.276 40.2703 109.447 39.8384 109.447 39.329C109.447 38.8195 109.276 38.3864 108.933 38.0298C108.59 37.6732 108.169 37.4948 107.668 37.4948C107.173 37.4948 106.754 37.6732 106.411 38.0298ZM112.597 40.8504C112.81 41.0542 113.069 41.1561 113.375 41.1561C113.681 41.1561 113.94 41.0542 114.153 40.8504C114.366 40.6467 114.473 40.385 114.473 40.0654V36.9252H115.126V40.0654C115.126 40.5749 114.956 40.9882 114.615 41.3055C114.275 41.6228 113.861 41.7814 113.375 41.7814C112.889 41.7814 112.475 41.6228 112.135 41.3055C111.794 40.9882 111.624 40.5749 111.624 40.0654V36.9252H112.277V40.0654C112.277 40.385 112.384 40.6467 112.597 40.8504ZM118.873 36.9252C119.346 36.9252 119.701 37.0711 119.94 37.3628C120.178 37.6546 120.297 38.009 120.297 38.4258C120.297 38.8426 120.178 39.1958 119.94 39.4853C119.701 39.7748 119.346 39.9195 118.873 39.9195H117.616V41.7119H116.963V36.9252H118.873ZM118.866 37.5296H117.616V39.3151H118.832C119.105 39.3151 119.31 39.2282 119.446 39.0545C119.583 38.8809 119.651 38.6713 119.651 38.4258C119.651 38.1803 119.585 37.9696 119.453 37.7936C119.321 37.6176 119.126 37.5296 118.866 37.5296Z\" fill=\"black\"></path>
      </svg>
    </a>
      <div class=\"navbar-header\">
        {{ page.navigation }}
        {# .btn-navbar is used as the toggle for collapsed navbar content #}
        {% if page.navigation_collapsible %}
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        {% endif %}
      </div>
</div>
      {# Navigation (collapsible) #}
      {% if page.navigation_collapsible %}
        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          {{ page.navigation_collapsible }}
        </div>
      {% endif %}
      {% if not navbar_attributes.hasClass(container) %}
        </div>
      {% endif %}
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

{% if page.footer %}
  {% block footer %}
    <footer class=\"footer {{ container }}\" role=\"contentinfo\">
      {{ page.footer }}
    </footer>
  {% endblock %}
{% endif %}
", "themes/bootstrap/templates/system/page.html.twig", "C:\\Users\\VANO\\Desktop\\OSPanel\\domains\\drupal8.localhost\\themes\\bootstrap\\templates\\system\\page.html.twig");
    }
}
