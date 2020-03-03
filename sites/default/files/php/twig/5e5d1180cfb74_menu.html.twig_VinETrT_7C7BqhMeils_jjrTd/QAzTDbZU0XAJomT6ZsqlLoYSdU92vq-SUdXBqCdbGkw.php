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

/* menu.html.twig */
class __TwigTemplate_5ca5440371411f7b02151dd547dbed443dbc0b9a2c948b7f0c9af66512af6ce4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["macro" => 23, "if" => 24, "for" => 36, "set" => 38];
        $filters = ["clean_class" => 71, "escape" => 35, "split" => 38];
        $functions = ["link" => 56];

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'if', 'for', 'set'],
                ['clean_class', 'escape', 'split'],
                ['link']
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
        // line 22
        echo "
";
        // line 65
        echo "
";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "menu_links", [0 => ($context["items"] ?? null), 1 => ($context["attributes"] ?? null), 2 => 0, 3 => ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : ([0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null)))), 2 => "nav"])), 4 => ((($context["dropdown_classes"] ?? null)) ? (($context["dropdown_classes"] ?? null)) : ([0 => "dropdown-menu"]))], "method")));
        echo "
";
    }

    // line 23
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, $__dropdown_classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "dropdown_classes" => $__dropdown_classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 24
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 25
                echo "   <a href=\"#home\" class=\"logo\">
      <svg width=\"146\" height=\"55\" viewBox=\"0 0 146 55\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" style=\" display: none;\">
        <path d=\"M42.983 12.1304L44.3021 41.6841H38.0861L37.6252 30.4096L22.9075 52.3602L16.519 31.7566L6.74119 55H0L17.3477 13.7608L24.9588 38.2323L42.983 12.1304Z\" fill=\"black\"></path>
        <path d=\"M29.0778 0C44.1059 0 56.2885 12.2058 56.2885 27.2625C56.2885 38.6552 49.3136 48.4157 39.4088 52.4914L39.4087 48.6386C47.3218 44.7926 52.7775 36.6659 52.7775 27.2625C52.7775 14.1486 42.1668 3.51774 29.0778 3.51774C15.9889 3.51774 5.37824 14.1486 5.37824 27.2625C5.37824 32.7426 7.23117 37.7891 10.3436 41.8074L7.94401 41.807L7.94359 44.4361C4.14414 39.7483 1.86719 33.7718 1.86719 27.2625C1.86719 12.2058 14.0498 0 29.0778 0Z\" fill=\"black\"></path>
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M39.7056 48.5214L38.0575 47.6943H34.4551V53.2081H38.0575L39.7056 52.3601V48.5214Z\" fill=\"black\"></path>
        <path d=\"M34.4551 48.5215H30.8711V49.8999H34.4551V48.5215Z\" fill=\"black\"></path>
        <path d=\"M34.4551 51.0029H30.8711V52.3814H34.4551V51.0029Z\" fill=\"black\"></path>
        <path d=\"M72.0858 22.3193L70.8937 19.6241L70.3495 22.3193L68.5873 31.2081H65.7107L69.6498 12.1606H69.9608L75.1956 22.4489L76.7505 25.8956L78.3054 22.4489L83.4365 12.1606H83.7216L87.8161 31.2081H84.9655L83.0478 22.3193L82.4777 19.6241L81.4411 22.3193L76.8282 31.2081H76.6727L72.0858 22.3193ZM95.2609 31.4673C94.1898 31.4673 93.2007 31.2124 92.2937 30.7028C91.3866 30.1931 90.661 29.4675 90.1168 28.5259C89.5726 27.5843 89.3005 26.483 89.3005 25.2218C89.3005 23.9778 89.538 22.8894 90.0132 21.9565C90.4883 21.0235 91.1664 20.2979 92.0475 19.7796C92.9286 19.2613 93.9652 19.0022 95.1573 19.0022C95.8483 19.0022 96.4962 19.1231 97.1009 19.365C97.7056 19.6069 98.2152 19.9049 98.6299 20.2591C99.0445 20.6132 99.3209 20.9631 99.4591 21.3086L99.511 19.3132H102.18V31.2081H99.5369L99.4851 29.109C99.1914 29.731 98.6558 30.2795 97.8783 30.7546C97.1009 31.2297 96.2284 31.4673 95.2609 31.4673ZM95.7274 29.1349C96.7122 29.1349 97.5414 28.7937 98.2152 28.1113C98.889 27.4288 99.2259 26.5348 99.2259 25.4291V25.2477C99.2259 24.5048 99.0704 23.8396 98.7594 23.2522C98.4485 22.6648 98.0252 22.207 97.4896 21.8787C96.954 21.5505 96.3666 21.3864 95.7274 21.3864C94.6217 21.3864 93.7665 21.7448 93.1618 22.4618C92.5571 23.1788 92.2548 24.1074 92.2548 25.2477C92.2548 26.4052 92.5528 27.3425 93.1489 28.0594C93.7449 28.7764 94.6044 29.1349 95.7274 29.1349ZM105.26 19.3132H108.059V21.6455C108.335 20.8508 108.784 20.2115 109.406 19.7278C110.028 19.2441 110.736 19.0022 111.531 19.0022C112.084 19.0022 112.464 19.054 112.671 19.1577L112.283 21.9824C112.127 21.8787 111.79 21.8269 111.272 21.8269C110.46 21.8269 109.721 22.0861 109.056 22.6044C108.391 23.1227 108.059 23.9519 108.059 25.0922V31.2081H105.26V19.3132ZM114.15 19.3132H117.338L119.903 24.6776L120.732 26.8285L121.562 24.6776L124.101 19.3132H127.211L120.966 31.2081H120.421L114.15 19.3132ZM134.312 31.4673C132.895 31.4673 131.712 31.1865 130.761 30.625C129.811 30.0635 129.112 29.312 128.662 28.3704C128.213 27.4288 127.989 26.3966 127.989 25.2736C127.989 24.0124 128.252 22.9067 128.779 21.9565C129.306 21.0063 130.036 20.2763 130.969 19.7667C131.902 19.257 132.956 19.0022 134.13 19.0022C135.962 19.0022 137.322 19.5075 138.212 20.5182C139.102 21.5289 139.547 22.9499 139.547 24.7812C139.547 25.2477 139.521 25.7314 139.469 26.2324H130.917C131.107 27.2863 131.483 28.0465 132.044 28.513C132.606 28.9794 133.388 29.2127 134.39 29.2127C135.219 29.2127 135.901 29.1436 136.437 29.0053C136.972 28.8671 137.465 28.6771 137.914 28.4352L138.769 30.4307C138.337 30.7071 137.75 30.949 137.007 31.1563C136.264 31.3636 135.366 31.4673 134.312 31.4673ZM136.826 24.2888C136.843 23.2177 136.61 22.4618 136.126 22.0213C135.642 21.5807 134.951 21.3604 134.053 21.3604C132.239 21.3604 131.193 22.3366 130.917 24.2888H136.826ZM142.708 12.1606H145.481V31.2081H142.708V12.1606ZM65.4336 36.9252H67.3441C67.8166 36.9252 68.172 37.0711 68.4106 37.3628C68.6491 37.6546 68.7683 38.009 68.7683 38.4258C68.7683 38.8426 68.6491 39.1958 68.4106 39.4853C68.172 39.7748 67.8166 39.9195 67.3441 39.9195H66.0867V41.7119H65.4336V36.9252ZM67.3372 37.5296H66.0867V39.3151H67.3024C67.5757 39.3151 67.7807 39.2282 67.9173 39.0545C68.0539 38.8809 68.1222 38.6713 68.1222 38.4258C68.1222 38.1803 68.0562 37.9696 67.9242 37.7936C67.7922 37.6176 67.5966 37.5296 67.3372 37.5296ZM69.9105 39.329C69.9105 38.6435 70.1444 38.0622 70.6122 37.5852C71.08 37.1081 71.652 36.8696 72.3282 36.8696C73.0091 36.8696 73.5845 37.1081 74.0547 37.5852C74.5248 38.0622 74.7598 38.6435 74.7598 39.329C74.7598 40.0098 74.5248 40.5888 74.0547 41.0658C73.5845 41.5429 73.0091 41.7814 72.3282 41.7814C71.652 41.7814 71.08 41.5429 70.6122 41.0658C70.1444 40.5888 69.9105 40.0098 69.9105 39.329ZM71.0707 38.0298C70.728 38.3864 70.5566 38.8195 70.5566 39.329C70.5566 39.8384 70.7268 40.2703 71.0673 40.6247C71.4077 40.979 71.828 41.1561 72.3282 41.1561C72.8284 41.1561 73.2499 40.979 73.5926 40.6247C73.9354 40.2703 74.1068 39.8384 74.1068 39.329C74.1068 38.8195 73.9354 38.3864 73.5926 38.0298C73.2499 37.6732 72.8284 37.4948 72.3282 37.4948C71.8326 37.4948 71.4135 37.6732 71.0707 38.0298ZM81.05 36.9252H81.7448L80.126 41.7119H79.5633L78.7157 38.7245L77.875 41.7119H77.3123L75.6936 36.9252H76.3883L77.5902 40.6698L78.4725 37.5713H78.9658L79.8481 40.6698L81.05 36.9252ZM83.0814 36.9252H85.916V37.5296H83.7276V39.058H85.6381V39.6624H83.7276V41.1075H85.9855V41.7119H83.0814V36.9252ZM89.594 39.8986L90.8723 41.7119H90.0872L88.8506 39.9195H88.2392V41.7119H87.5862V36.9252H89.4272C89.8996 36.9252 90.254 37.0711 90.4902 37.3628C90.7264 37.6546 90.8445 38.009 90.8445 38.4258C90.8445 38.8149 90.7414 39.1483 90.5353 39.4262C90.3292 39.7041 90.0154 39.8616 89.594 39.8986ZM89.4064 37.5296H88.2392V39.3151H89.3786C89.6519 39.3151 89.8533 39.2294 89.983 39.058C90.1127 38.8866 90.1775 38.6759 90.1775 38.4258C90.1775 38.1803 90.1139 37.9696 89.9865 37.7936C89.8591 37.6176 89.6658 37.5296 89.4064 37.5296ZM98.5756 37.5018L98.1101 37.9325C97.7767 37.6361 97.3922 37.4879 96.9569 37.4879C96.4613 37.4879 96.0421 37.6674 95.6994 38.0263C95.3566 38.3853 95.1853 38.8195 95.1853 39.329C95.1853 39.8384 95.3566 40.2715 95.6994 40.6281C96.0421 40.9848 96.4613 41.1631 96.9569 41.1631C97.3922 41.1631 97.7512 41.0461 98.0337 40.8122C98.3162 40.5783 98.4668 40.2645 98.4853 39.8709H97.1236V39.3081H99.2217C99.2217 40.1279 99.0202 40.7451 98.6173 41.1596C98.2143 41.5741 97.6609 41.7814 96.9569 41.7814C96.2806 41.7814 95.7086 41.5429 95.2409 41.0658C94.7731 40.5888 94.5392 40.0098 94.5392 39.329C94.5392 38.6435 94.7731 38.0622 95.2409 37.5852C95.7086 37.1081 96.2806 36.8696 96.9569 36.8696C97.5821 36.8696 98.1217 37.0803 98.5756 37.5018ZM102.691 39.8986L103.97 41.7119H103.185L101.948 39.9195H101.337V41.7119H100.683V36.9252H102.525C102.997 36.9252 103.351 37.0711 103.587 37.3628C103.824 37.6546 103.942 38.009 103.942 38.4258C103.942 38.8149 103.839 39.1483 103.633 39.4262C103.427 39.7041 103.113 39.8616 102.691 39.8986ZM102.504 37.5296H101.337V39.3151H102.476C102.749 39.3151 102.951 39.2294 103.08 39.058C103.21 38.8866 103.275 38.6759 103.275 38.4258C103.275 38.1803 103.211 37.9696 103.084 37.7936C102.956 37.6176 102.763 37.5296 102.504 37.5296ZM105.251 39.329C105.251 38.6435 105.485 38.0622 105.952 37.5852C106.42 37.1081 106.992 36.8696 107.668 36.8696C108.349 36.8696 108.925 37.1081 109.395 37.5852C109.865 38.0622 110.1 38.6435 110.1 39.329C110.1 40.0098 109.865 40.5888 109.395 41.0658C108.925 41.5429 108.349 41.7814 107.668 41.7814C106.992 41.7814 106.42 41.5429 105.952 41.0658C105.485 40.5888 105.251 40.0098 105.251 39.329ZM106.411 38.0298C106.068 38.3864 105.897 38.8195 105.897 39.329C105.897 39.8384 106.067 40.2703 106.407 40.6247C106.748 40.979 107.168 41.1561 107.668 41.1561C108.169 41.1561 108.59 40.979 108.933 40.6247C109.276 40.2703 109.447 39.8384 109.447 39.329C109.447 38.8195 109.276 38.3864 108.933 38.0298C108.59 37.6732 108.169 37.4948 107.668 37.4948C107.173 37.4948 106.754 37.6732 106.411 38.0298ZM112.597 40.8504C112.81 41.0542 113.069 41.1561 113.375 41.1561C113.681 41.1561 113.94 41.0542 114.153 40.8504C114.366 40.6467 114.473 40.385 114.473 40.0654V36.9252H115.126V40.0654C115.126 40.5749 114.956 40.9882 114.615 41.3055C114.275 41.6228 113.861 41.7814 113.375 41.7814C112.889 41.7814 112.475 41.6228 112.135 41.3055C111.794 40.9882 111.624 40.5749 111.624 40.0654V36.9252H112.277V40.0654C112.277 40.385 112.384 40.6467 112.597 40.8504ZM118.873 36.9252C119.346 36.9252 119.701 37.0711 119.94 37.3628C120.178 37.6546 120.297 38.009 120.297 38.4258C120.297 38.8426 120.178 39.1958 119.94 39.4853C119.701 39.7748 119.346 39.9195 118.873 39.9195H117.616V41.7119H116.963V36.9252H118.873ZM118.866 37.5296H117.616V39.3151H118.832C119.105 39.3151 119.31 39.2282 119.446 39.0545C119.583 38.8809 119.651 38.6713 119.651 38.4258C119.651 38.1803 119.585 37.9696 119.453 37.7936C119.321 37.6176 119.126 37.5296 118.866 37.5296Z\" fill=\"black\"></path>
      </svg>
    </a>
    <ul";
                // line 35
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => (((($context["menu_level"] ?? null) == 0)) ? (($context["classes"] ?? null)) : (($context["dropdown_classes"] ?? null)))], "method")), "html", null, true);
                echo ">
    ";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 37
                    echo "      ";
                    // line 38
                    $context["item_classes"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "getOption", [0 => "container_attributes"], "method"), "class", [])), " ");
                    // line 40
                    echo "      ";
                    // line 41
                    $context["item_classes"] = [0 => ((($this->getAttribute(                    // line 42
$context["item"], "is_expanded", []) && $this->getAttribute($context["item"], "below", []))) ? ("expanded dropdown") : ("")), 1 => (($this->getAttribute(                    // line 43
$context["item"], "in_active_trail", [])) ? ("active active-trail") : ("")), 2 => (($this->getAttribute(                    // line 44
$context["loop"], "first", [])) ? ("first") : ("")), 3 => (($this->getAttribute(                    // line 45
$context["loop"], "last", [])) ? ("last") : (""))];
                    // line 48
                    echo "      <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null)], "method")), "html", null, true);
                    echo ">
        ";
                    // line 49
                    $context["link_title"] = $this->getAttribute($context["item"], "title", []);
                    // line 50
                    echo "        ";
                    $context["link_attributes"] = $this->getAttribute($context["item"], "link_attributes", []);
                    // line 51
                    echo "        ";
                    if ((((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", [])) && $this->getAttribute($context["item"], "below", []))) {
                        // line 52
                        echo "          ";
                        ob_start();
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null)), "html", null, true);
                        echo " <span class=\"caret\"></span>";
                        $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                        // line 53
                        echo "          ";
                        $context["link_attributes"] = $this->getAttribute($this->getAttribute(($context["link_attributes"] ?? null), "addClass", [0 => "dropdown-toggle"], "method"), "setAttribute", [0 => "data-toggle", 1 => "dropdown"], "method");
                        // line 54
                        echo "        ";
                    }
                    // line 55
                    echo "        ";
                    // line 56
                    echo "        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null)), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["link_attributes"] ?? null), "addClass", [0 => (($this->getAttribute($context["item"], "in_active_trail", [])) ? ("active-trail") : (""))], "method"))), "html", null, true);
                    echo "
        ";
                    // line 57
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 58
                        echo "          ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this, "menu_links", [0 => $this->getAttribute($context["item"], "below", []), 1 => $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method"), 2 => (($context["menu_level"] ?? null) + 1), 3 => ($context["classes"] ?? null), 4 => ($context["dropdown_classes"] ?? null)], "method")));
                        echo "
        ";
                    }
                    // line 60
                    echo "      </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "    </ul>
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 62,  171 => 60,  165 => 58,  163 => 57,  158 => 56,  156 => 55,  153 => 54,  150 => 53,  144 => 52,  141 => 51,  138 => 50,  136 => 49,  131 => 48,  129 => 45,  128 => 44,  127 => 43,  126 => 42,  125 => 41,  123 => 40,  121 => 38,  119 => 37,  102 => 36,  98 => 35,  86 => 25,  83 => 24,  67 => 23,  61 => 71,  58 => 65,  55 => 22,);
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
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - classes: A list of classes to apply to the top level <ul> element.
 * - dropdown_classes: A list of classes to apply to the dropdown <ul> element.
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 *
 * Define a custom macro that will render all menu trees.
 */
#}

{% macro menu_links(items, attributes, menu_level, classes, dropdown_classes) %}
  {% if items %}
   <a href=\"#home\" class=\"logo\">
      <svg width=\"146\" height=\"55\" viewBox=\"0 0 146 55\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" style=\" display: none;\">
        <path d=\"M42.983 12.1304L44.3021 41.6841H38.0861L37.6252 30.4096L22.9075 52.3602L16.519 31.7566L6.74119 55H0L17.3477 13.7608L24.9588 38.2323L42.983 12.1304Z\" fill=\"black\"></path>
        <path d=\"M29.0778 0C44.1059 0 56.2885 12.2058 56.2885 27.2625C56.2885 38.6552 49.3136 48.4157 39.4088 52.4914L39.4087 48.6386C47.3218 44.7926 52.7775 36.6659 52.7775 27.2625C52.7775 14.1486 42.1668 3.51774 29.0778 3.51774C15.9889 3.51774 5.37824 14.1486 5.37824 27.2625C5.37824 32.7426 7.23117 37.7891 10.3436 41.8074L7.94401 41.807L7.94359 44.4361C4.14414 39.7483 1.86719 33.7718 1.86719 27.2625C1.86719 12.2058 14.0498 0 29.0778 0Z\" fill=\"black\"></path>
        <path fill-rule=\"evenodd\" clip-rule=\"evenodd\" d=\"M39.7056 48.5214L38.0575 47.6943H34.4551V53.2081H38.0575L39.7056 52.3601V48.5214Z\" fill=\"black\"></path>
        <path d=\"M34.4551 48.5215H30.8711V49.8999H34.4551V48.5215Z\" fill=\"black\"></path>
        <path d=\"M34.4551 51.0029H30.8711V52.3814H34.4551V51.0029Z\" fill=\"black\"></path>
        <path d=\"M72.0858 22.3193L70.8937 19.6241L70.3495 22.3193L68.5873 31.2081H65.7107L69.6498 12.1606H69.9608L75.1956 22.4489L76.7505 25.8956L78.3054 22.4489L83.4365 12.1606H83.7216L87.8161 31.2081H84.9655L83.0478 22.3193L82.4777 19.6241L81.4411 22.3193L76.8282 31.2081H76.6727L72.0858 22.3193ZM95.2609 31.4673C94.1898 31.4673 93.2007 31.2124 92.2937 30.7028C91.3866 30.1931 90.661 29.4675 90.1168 28.5259C89.5726 27.5843 89.3005 26.483 89.3005 25.2218C89.3005 23.9778 89.538 22.8894 90.0132 21.9565C90.4883 21.0235 91.1664 20.2979 92.0475 19.7796C92.9286 19.2613 93.9652 19.0022 95.1573 19.0022C95.8483 19.0022 96.4962 19.1231 97.1009 19.365C97.7056 19.6069 98.2152 19.9049 98.6299 20.2591C99.0445 20.6132 99.3209 20.9631 99.4591 21.3086L99.511 19.3132H102.18V31.2081H99.5369L99.4851 29.109C99.1914 29.731 98.6558 30.2795 97.8783 30.7546C97.1009 31.2297 96.2284 31.4673 95.2609 31.4673ZM95.7274 29.1349C96.7122 29.1349 97.5414 28.7937 98.2152 28.1113C98.889 27.4288 99.2259 26.5348 99.2259 25.4291V25.2477C99.2259 24.5048 99.0704 23.8396 98.7594 23.2522C98.4485 22.6648 98.0252 22.207 97.4896 21.8787C96.954 21.5505 96.3666 21.3864 95.7274 21.3864C94.6217 21.3864 93.7665 21.7448 93.1618 22.4618C92.5571 23.1788 92.2548 24.1074 92.2548 25.2477C92.2548 26.4052 92.5528 27.3425 93.1489 28.0594C93.7449 28.7764 94.6044 29.1349 95.7274 29.1349ZM105.26 19.3132H108.059V21.6455C108.335 20.8508 108.784 20.2115 109.406 19.7278C110.028 19.2441 110.736 19.0022 111.531 19.0022C112.084 19.0022 112.464 19.054 112.671 19.1577L112.283 21.9824C112.127 21.8787 111.79 21.8269 111.272 21.8269C110.46 21.8269 109.721 22.0861 109.056 22.6044C108.391 23.1227 108.059 23.9519 108.059 25.0922V31.2081H105.26V19.3132ZM114.15 19.3132H117.338L119.903 24.6776L120.732 26.8285L121.562 24.6776L124.101 19.3132H127.211L120.966 31.2081H120.421L114.15 19.3132ZM134.312 31.4673C132.895 31.4673 131.712 31.1865 130.761 30.625C129.811 30.0635 129.112 29.312 128.662 28.3704C128.213 27.4288 127.989 26.3966 127.989 25.2736C127.989 24.0124 128.252 22.9067 128.779 21.9565C129.306 21.0063 130.036 20.2763 130.969 19.7667C131.902 19.257 132.956 19.0022 134.13 19.0022C135.962 19.0022 137.322 19.5075 138.212 20.5182C139.102 21.5289 139.547 22.9499 139.547 24.7812C139.547 25.2477 139.521 25.7314 139.469 26.2324H130.917C131.107 27.2863 131.483 28.0465 132.044 28.513C132.606 28.9794 133.388 29.2127 134.39 29.2127C135.219 29.2127 135.901 29.1436 136.437 29.0053C136.972 28.8671 137.465 28.6771 137.914 28.4352L138.769 30.4307C138.337 30.7071 137.75 30.949 137.007 31.1563C136.264 31.3636 135.366 31.4673 134.312 31.4673ZM136.826 24.2888C136.843 23.2177 136.61 22.4618 136.126 22.0213C135.642 21.5807 134.951 21.3604 134.053 21.3604C132.239 21.3604 131.193 22.3366 130.917 24.2888H136.826ZM142.708 12.1606H145.481V31.2081H142.708V12.1606ZM65.4336 36.9252H67.3441C67.8166 36.9252 68.172 37.0711 68.4106 37.3628C68.6491 37.6546 68.7683 38.009 68.7683 38.4258C68.7683 38.8426 68.6491 39.1958 68.4106 39.4853C68.172 39.7748 67.8166 39.9195 67.3441 39.9195H66.0867V41.7119H65.4336V36.9252ZM67.3372 37.5296H66.0867V39.3151H67.3024C67.5757 39.3151 67.7807 39.2282 67.9173 39.0545C68.0539 38.8809 68.1222 38.6713 68.1222 38.4258C68.1222 38.1803 68.0562 37.9696 67.9242 37.7936C67.7922 37.6176 67.5966 37.5296 67.3372 37.5296ZM69.9105 39.329C69.9105 38.6435 70.1444 38.0622 70.6122 37.5852C71.08 37.1081 71.652 36.8696 72.3282 36.8696C73.0091 36.8696 73.5845 37.1081 74.0547 37.5852C74.5248 38.0622 74.7598 38.6435 74.7598 39.329C74.7598 40.0098 74.5248 40.5888 74.0547 41.0658C73.5845 41.5429 73.0091 41.7814 72.3282 41.7814C71.652 41.7814 71.08 41.5429 70.6122 41.0658C70.1444 40.5888 69.9105 40.0098 69.9105 39.329ZM71.0707 38.0298C70.728 38.3864 70.5566 38.8195 70.5566 39.329C70.5566 39.8384 70.7268 40.2703 71.0673 40.6247C71.4077 40.979 71.828 41.1561 72.3282 41.1561C72.8284 41.1561 73.2499 40.979 73.5926 40.6247C73.9354 40.2703 74.1068 39.8384 74.1068 39.329C74.1068 38.8195 73.9354 38.3864 73.5926 38.0298C73.2499 37.6732 72.8284 37.4948 72.3282 37.4948C71.8326 37.4948 71.4135 37.6732 71.0707 38.0298ZM81.05 36.9252H81.7448L80.126 41.7119H79.5633L78.7157 38.7245L77.875 41.7119H77.3123L75.6936 36.9252H76.3883L77.5902 40.6698L78.4725 37.5713H78.9658L79.8481 40.6698L81.05 36.9252ZM83.0814 36.9252H85.916V37.5296H83.7276V39.058H85.6381V39.6624H83.7276V41.1075H85.9855V41.7119H83.0814V36.9252ZM89.594 39.8986L90.8723 41.7119H90.0872L88.8506 39.9195H88.2392V41.7119H87.5862V36.9252H89.4272C89.8996 36.9252 90.254 37.0711 90.4902 37.3628C90.7264 37.6546 90.8445 38.009 90.8445 38.4258C90.8445 38.8149 90.7414 39.1483 90.5353 39.4262C90.3292 39.7041 90.0154 39.8616 89.594 39.8986ZM89.4064 37.5296H88.2392V39.3151H89.3786C89.6519 39.3151 89.8533 39.2294 89.983 39.058C90.1127 38.8866 90.1775 38.6759 90.1775 38.4258C90.1775 38.1803 90.1139 37.9696 89.9865 37.7936C89.8591 37.6176 89.6658 37.5296 89.4064 37.5296ZM98.5756 37.5018L98.1101 37.9325C97.7767 37.6361 97.3922 37.4879 96.9569 37.4879C96.4613 37.4879 96.0421 37.6674 95.6994 38.0263C95.3566 38.3853 95.1853 38.8195 95.1853 39.329C95.1853 39.8384 95.3566 40.2715 95.6994 40.6281C96.0421 40.9848 96.4613 41.1631 96.9569 41.1631C97.3922 41.1631 97.7512 41.0461 98.0337 40.8122C98.3162 40.5783 98.4668 40.2645 98.4853 39.8709H97.1236V39.3081H99.2217C99.2217 40.1279 99.0202 40.7451 98.6173 41.1596C98.2143 41.5741 97.6609 41.7814 96.9569 41.7814C96.2806 41.7814 95.7086 41.5429 95.2409 41.0658C94.7731 40.5888 94.5392 40.0098 94.5392 39.329C94.5392 38.6435 94.7731 38.0622 95.2409 37.5852C95.7086 37.1081 96.2806 36.8696 96.9569 36.8696C97.5821 36.8696 98.1217 37.0803 98.5756 37.5018ZM102.691 39.8986L103.97 41.7119H103.185L101.948 39.9195H101.337V41.7119H100.683V36.9252H102.525C102.997 36.9252 103.351 37.0711 103.587 37.3628C103.824 37.6546 103.942 38.009 103.942 38.4258C103.942 38.8149 103.839 39.1483 103.633 39.4262C103.427 39.7041 103.113 39.8616 102.691 39.8986ZM102.504 37.5296H101.337V39.3151H102.476C102.749 39.3151 102.951 39.2294 103.08 39.058C103.21 38.8866 103.275 38.6759 103.275 38.4258C103.275 38.1803 103.211 37.9696 103.084 37.7936C102.956 37.6176 102.763 37.5296 102.504 37.5296ZM105.251 39.329C105.251 38.6435 105.485 38.0622 105.952 37.5852C106.42 37.1081 106.992 36.8696 107.668 36.8696C108.349 36.8696 108.925 37.1081 109.395 37.5852C109.865 38.0622 110.1 38.6435 110.1 39.329C110.1 40.0098 109.865 40.5888 109.395 41.0658C108.925 41.5429 108.349 41.7814 107.668 41.7814C106.992 41.7814 106.42 41.5429 105.952 41.0658C105.485 40.5888 105.251 40.0098 105.251 39.329ZM106.411 38.0298C106.068 38.3864 105.897 38.8195 105.897 39.329C105.897 39.8384 106.067 40.2703 106.407 40.6247C106.748 40.979 107.168 41.1561 107.668 41.1561C108.169 41.1561 108.59 40.979 108.933 40.6247C109.276 40.2703 109.447 39.8384 109.447 39.329C109.447 38.8195 109.276 38.3864 108.933 38.0298C108.59 37.6732 108.169 37.4948 107.668 37.4948C107.173 37.4948 106.754 37.6732 106.411 38.0298ZM112.597 40.8504C112.81 41.0542 113.069 41.1561 113.375 41.1561C113.681 41.1561 113.94 41.0542 114.153 40.8504C114.366 40.6467 114.473 40.385 114.473 40.0654V36.9252H115.126V40.0654C115.126 40.5749 114.956 40.9882 114.615 41.3055C114.275 41.6228 113.861 41.7814 113.375 41.7814C112.889 41.7814 112.475 41.6228 112.135 41.3055C111.794 40.9882 111.624 40.5749 111.624 40.0654V36.9252H112.277V40.0654C112.277 40.385 112.384 40.6467 112.597 40.8504ZM118.873 36.9252C119.346 36.9252 119.701 37.0711 119.94 37.3628C120.178 37.6546 120.297 38.009 120.297 38.4258C120.297 38.8426 120.178 39.1958 119.94 39.4853C119.701 39.7748 119.346 39.9195 118.873 39.9195H117.616V41.7119H116.963V36.9252H118.873ZM118.866 37.5296H117.616V39.3151H118.832C119.105 39.3151 119.31 39.2282 119.446 39.0545C119.583 38.8809 119.651 38.6713 119.651 38.4258C119.651 38.1803 119.585 37.9696 119.453 37.7936C119.321 37.6176 119.126 37.5296 118.866 37.5296Z\" fill=\"black\"></path>
      </svg>
    </a>
    <ul{{ attributes.addClass(menu_level == 0 ? classes : dropdown_classes) }}>
    {% for item in items %}
      {%
        set item_classes = item.url.getOption('container_attributes').class | split(\" \")
      %}
      {%
        set item_classes = [
          item.is_expanded and item.below ? 'expanded dropdown',
          item.in_active_trail ? 'active active-trail',
          loop.first ? 'first',
          loop.last ? 'last',
        ]
      %}
      <li{{ item.attributes.addClass(item_classes) }}>
        {% set link_title = item.title %}
        {% set link_attributes = item.link_attributes %}
        {% if menu_level == 0 and item.is_expanded and item.below %}
          {% set link_title %}{{ link_title }} <span class=\"caret\"></span>{% endset %}
          {% set link_attributes = link_attributes.addClass('dropdown-toggle').setAttribute('data-toggle', 'dropdown') %}
        {% endif %}
        {# Must use link() here so it triggers hook_link_alter(). #}
        {{ link(link_title, item.url, link_attributes.addClass(item.in_active_trail ? 'active-trail')) }}
        {% if item.below %}
          {{ _self.menu_links(item.below, attributes.removeClass(classes), menu_level + 1, classes, dropdown_classes) }}
        {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}

{#
  Invoke the custom macro defined above. If classes were provided, use them.
  This allows the template to be extended without having to also duplicate the
  code above. @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ _self.menu_links(items, attributes, 0, classes ?: ['menu', 'menu--' ~ menu_name|clean_class, 'nav'], dropdown_classes ?: ['dropdown-menu']) }}
", "menu.html.twig", "themes/bootstrap/templates/menu/menu.html.twig");
    }
}
