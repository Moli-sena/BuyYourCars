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

/* C:\xampp\htdocs\car_trader\vendor\cakephp\bake\src\Template\Bake\\tests\fixture.twig */
class __TwigTemplate_dcfa4368aa3a2f21d22995c5bb0be8d7a91e1d44ca812abce804a53efd196b14 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 20
        echo "<?php
namespace ";
        // line 21
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\Test\\Fixture;

use Cake\\TestSuite\\Fixture\\TestFixture;

/**
 * ";
        // line 26
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "Fixture
 */
class ";
        // line 28
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "Fixture extends TestFixture
{
";
        // line 30
        if (($context["table"] ?? null)) {
            // line 31
            echo "    /**
     * Table name
     *
     * @var string
     */
    public \$table = '";
            // line 36
            echo ($context["table"] ?? null);
            echo "';
";
        }
        // line 39
        if (($context["import"] ?? null)) {
            // line 40
            echo "    /**
     * Import
     *
     * @var array
     */
    public \$import = ";
            // line 45
            echo ($context["import"] ?? null);
            echo ";

";
        }
        // line 49
        if (($context["schema"] ?? null)) {
            // line 50
            echo "    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public \$fields = ";
            // line 56
            echo ($context["schema"] ?? null);
            echo ";
    // @codingStandardsIgnoreEnd
";
        }
        // line 60
        if (($context["records"] ?? null)) {
            // line 61
            echo "    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        \$this->records = ";
            // line 68
            echo ($context["records"] ?? null);
            echo ";
        parent::init();
    }
";
        }
        // line 72
        echo "}
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\car_trader\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\tests\\fixture.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 72,  107 => 68,  98 => 61,  96 => 60,  90 => 56,  82 => 50,  80 => 49,  74 => 45,  67 => 40,  65 => 39,  60 => 36,  53 => 31,  51 => 30,  46 => 28,  41 => 26,  33 => 21,  30 => 20,);
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
 * Fixture Template file
 *
 * Fixture Template used when baking fixtures with bake
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
<?php
namespace {{ namespace }}\\Test\\Fixture;

use Cake\\TestSuite\\Fixture\\TestFixture;

/**
 * {{ name }}Fixture
 */
class {{ name }}Fixture extends TestFixture
{
{% if table %}
    /**
     * Table name
     *
     * @var string
     */
    public \$table = '{{ table|raw }}';
{% endif %}

{%- if import %}
    /**
     * Import
     *
     * @var array
     */
    public \$import = {{ import|raw }};

{% endif %}

{%- if schema %}
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public \$fields = {{ schema|raw }};
    // @codingStandardsIgnoreEnd
{% endif %}

{%- if records %}
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        \$this->records = {{ records|raw }};
        parent::init();
    }
{% endif %}
}
", "C:\\xampp\\htdocs\\car_trader\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\tests\\fixture.twig", "C:\\xampp\\htdocs\\car_trader\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\tests\\fixture.twig");
    }
}
