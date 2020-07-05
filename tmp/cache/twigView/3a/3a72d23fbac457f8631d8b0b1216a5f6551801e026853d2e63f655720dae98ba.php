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

/* C:\xampp\htdocs\car_trader\vendor\cakephp\bake\src\Template\Bake\\Model\entity.twig */
class __TwigTemplate_eb1f1e389dbe82e54538867b40eafa08a7c5f7f7444cc24c384415105ac0dae8 extends \Twig\Template
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
        // line 16
        $context["propertyHintMap"] = $this->getAttribute(($context["DocBlock"] ?? null), "buildEntityPropertyHintTypeMap", [0 => ((($context["propertySchema"] ?? null)) ? (($context["propertySchema"] ?? null)) : ([]))], "method");
        // line 17
        $context["associationHintMap"] = $this->getAttribute(($context["DocBlock"] ?? null), "buildEntityAssociationHintTypeMap", [0 => ((($context["propertySchema"] ?? null)) ? (($context["propertySchema"] ?? null)) : ([]))], "method");
        // line 18
        $context["annotations"] = $this->getAttribute(($context["DocBlock"] ?? null), "propertyHints", [0 => ($context["propertyHintMap"] ?? null)], "method");
        // line 20
        if (($context["associationHintMap"] ?? null)) {
            // line 21
            $context["annotations"] = twig_array_merge(($context["annotations"] ?? null), [0 => ""]);
            // line 22
            $context["annotations"] = twig_array_merge(($context["annotations"] ?? null), $this->getAttribute(($context["DocBlock"] ?? null), "propertyHints", [0 => ($context["associationHintMap"] ?? null)], "method"));
        }
        // line 25
        $context["accessible"] = $this->getAttribute(($context["Bake"] ?? null), "getFieldAccessibility", [0 => ($context["fields"] ?? null), 1 => ($context["primaryKey"] ?? null)], "method");
        // line 26
        echo "<?php
namespace ";
        // line 27
        echo twig_escape_filter($this->env, ($context["namespace"] ?? null), "html", null, true);
        echo "\\Model\\Entity;

use Cake\\ORM\\Entity;

";
        // line 31
        echo $this->getAttribute(($context["DocBlock"] ?? null), "classDescription", [0 => ($context["name"] ?? null), 1 => "Entity", 2 => ($context["annotations"] ?? null)], "method");
        echo "
class ";
        // line 32
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " extends Entity
{
";
        // line 34
        if (($context["accessible"] ?? null)) {
            // line 35
            echo "    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected \$_accessible = [";
            // line 44
            echo $this->getAttribute(($context["Bake"] ?? null), "stringifyList", [0 => ($context["accessible"] ?? null), 1 => ["quotes" => false]], "method");
            echo "];
";
        }
        // line 46
        if ((($context["accessible"] ?? null) && ($context["hidden"] ?? null))) {
            // line 47
            echo "
";
        }
        // line 49
        if (($context["hidden"] ?? null)) {
            // line 50
            echo "    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected \$_hidden = [";
            // line 55
            echo $this->getAttribute(($context["Bake"] ?? null), "stringifyList", [0 => ($context["hidden"] ?? null)], "method");
            echo "];
";
        }
        // line 57
        echo "}
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\car_trader\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Model\\entity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 57,  97 => 55,  90 => 50,  88 => 49,  84 => 47,  82 => 46,  77 => 44,  66 => 35,  64 => 34,  59 => 32,  55 => 31,  48 => 27,  45 => 26,  43 => 25,  40 => 22,  38 => 21,  36 => 20,  34 => 18,  32 => 17,  30 => 16,);
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
{% set propertyHintMap = DocBlock.buildEntityPropertyHintTypeMap(propertySchema ?: []) %}
{% set associationHintMap = DocBlock.buildEntityAssociationHintTypeMap(propertySchema ?: []) %}
{% set annotations = DocBlock.propertyHints(propertyHintMap) %}

{%- if associationHintMap %}
    {%- set annotations = annotations|merge(['']) %}
    {%- set annotations = annotations|merge(DocBlock.propertyHints(associationHintMap)) %}
{% endif %}

{%- set accessible = Bake.getFieldAccessibility(fields, primaryKey) %}
<?php
namespace {{ namespace }}\\Model\\Entity;

use Cake\\ORM\\Entity;

{{ DocBlock.classDescription(name, 'Entity', annotations)|raw }}
class {{ name }} extends Entity
{
{% if accessible %}
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected \$_accessible = [{{ Bake.stringifyList(accessible, {'quotes': false})|raw }}];
{% endif %}
{% if accessible and hidden %}

{% endif %}
{%- if hidden %}
    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected \$_hidden = [{{ Bake.stringifyList(hidden)|raw }}];
{% endif %}
}
", "C:\\xampp\\htdocs\\car_trader\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Model\\entity.twig", "C:\\xampp\\htdocs\\car_trader\\vendor\\cakephp\\bake\\src\\Template\\Bake\\\\Model\\entity.twig");
    }
}
