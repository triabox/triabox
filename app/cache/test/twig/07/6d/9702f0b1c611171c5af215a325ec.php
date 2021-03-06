<?php

/* :helper:dinamicAddTable.html.twig */
class __TwigTemplate_076d9702f0b1c611171c5af215a325ec extends Twig_Template
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
        echo "
/////////////////////////////////////////////////////////////////////////


function inicializarDatos(\$contenedor,\$leyendaBoton,\$numeroColumnas) {

//Agregar Causas y Propuestas.

// Tomar el contenedor de los Acciones Correctivas
var collectionCausa = \$(\$contenedor);

// Generar el link \"add a label\"
var \$addCausaLink = \$('<a href=\"#\" class=\"add_labels_link\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/icoAdd_16.gif"), "html", null, true);
        echo "\" class=\"icon16 fl-space2\" alt=\"\" title=\"";
        echo $this->env->getExtension('translator')->getTranslator()->trans("agregar", array(), "messages");
        echo "\" />'+\$leyendaBoton+'</a>');
var \$newLinkCausa = \$('<tr ><td  colspan='+\$numeroColumnas+'></td></tr>').append(\$addCausaLink);

jQuery(document).ready(function() {

\t// agregar un link de eliminar para todos los labels existentes 
\tcollectionCausa.find('tr').each(function() {
        addLinkEliminarCausa(\$(this));
    });
    
    // add the \"add Accion Correctiva\" anchor and li to the tags ul
    collectionCausa.append(\$newLinkCausa);

    // contar la cantidad actual (e.g. 2), y usarla como nuevo
    // index cuando inserta una nueva Accion (e.g. 2)
    collectionCausa.data('index', collectionCausa.find(':input').length);

    \$addCausaLink.on('click', function(e) {
        // prevenir que el link genere un \"#\" en la URL
        e.preventDefault();

        // agregar un nuevo formulario Label (ver siguiente bloque de codigo)
        addAccionCausa(collectionCausa, \$newLinkCausa);
    });
});

}

function addAccionCausa(collectionCausa, \$newLinkCausa) {
    // Obetener el data-prototype
    
    var prototype = collectionCausa.data('prototype');

    // Obtener el nuevo index
    var index = collectionCausa.data('index');

    // Reemplazar '__name__' en el prototipo HTML para
    // pasar a ser un n�mero basado en cuantos elementos tenemos
    var newForm = prototype.replace(/__name__/g, index);

    // incrementar el index en uno para el pr�ximo elemento
    collectionCausa.data('index', index + 1);

    // mostrar el formulario en la p�gina, antes del link \"add a label\"
    var \$newFormLi = \$('<tr></tr>').append(newForm);
    \$newLinkCausa.before(\$newFormLi);
    
    // agregar un link de eliminar al nuevo formulario
    addLinkEliminarCausa(\$newFormLi);
}

function addLinkEliminarCausa(\$tagFormLi) {
    var \$removeFormA = \$('<td><a href=\"#\"><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/images/ico_inactive_16.png"), "html", null, true);
        echo "\" class=\"icon16 fl-space2\" alt=\"\" title=\"Eliminar\" /></a></td>');
    \$tagFormLi.append(\$removeFormA);

    \$removeFormA.on('click', function(e) {
        // prevenir que el link genere un \"#\" en la URL
        e.preventDefault();

        // eliminar el -elemento html- del formulario
        \$tagFormLi.remove();
    });
}

";
    }

    public function getTemplateName()
    {
        return ":helper:dinamicAddTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  1357 => 388,  1348 => 387,  1346 => 386,  1343 => 385,  1327 => 381,  1320 => 380,  1318 => 379,  1292 => 374,  1265 => 372,  1262 => 371,  1250 => 366,  1245 => 365,  1225 => 355,  1222 => 354,  1217 => 353,  1215 => 352,  1212 => 351,  1205 => 346,  1196 => 344,  1189 => 342,  1186 => 341,  1184 => 340,  1181 => 339,  1173 => 335,  1162 => 329,  1153 => 326,  1151 => 325,  1148 => 324,  1139 => 319,  1137 => 318,  1114 => 317,  1105 => 314,  1102 => 313,  1094 => 310,  1091 => 309,  1080 => 304,  1073 => 302,  1070 => 301,  1052 => 290,  1049 => 289,  1047 => 288,  1044 => 287,  1032 => 281,  1028 => 280,  1025 => 279,  1023 => 278,  1020 => 277,  1010 => 269,  1008 => 268,  1005 => 267,  978 => 258,  975 => 257,  972 => 256,  969 => 255,  966 => 254,  963 => 253,  960 => 252,  957 => 251,  954 => 250,  951 => 249,  948 => 248,  946 => 247,  935 => 240,  932 => 239,  930 => 238,  927 => 237,  914 => 231,  911 => 230,  899 => 226,  896 => 225,  893 => 224,  890 => 223,  888 => 222,  885 => 221,  877 => 217,  874 => 216,  872 => 215,  869 => 214,  861 => 210,  858 => 209,  853 => 207,  842 => 202,  840 => 201,  837 => 200,  829 => 196,  826 => 195,  813 => 189,  810 => 188,  808 => 187,  805 => 186,  797 => 182,  794 => 181,  792 => 180,  789 => 179,  781 => 175,  779 => 174,  776 => 173,  765 => 168,  763 => 167,  760 => 166,  752 => 162,  747 => 160,  745 => 159,  742 => 158,  735 => 153,  720 => 151,  717 => 150,  711 => 148,  708 => 147,  706 => 146,  703 => 145,  695 => 139,  693 => 138,  692 => 137,  691 => 136,  690 => 135,  685 => 134,  679 => 132,  676 => 131,  671 => 129,  662 => 123,  658 => 122,  654 => 121,  650 => 120,  639 => 117,  636 => 116,  631 => 114,  615 => 110,  613 => 109,  610 => 108,  594 => 104,  592 => 103,  589 => 102,  572 => 98,  560 => 96,  553 => 93,  551 => 92,  543 => 90,  525 => 89,  523 => 88,  511 => 82,  508 => 81,  505 => 80,  499 => 78,  497 => 77,  489 => 75,  486 => 74,  471 => 72,  469 => 71,  461 => 70,  459 => 69,  450 => 64,  437 => 61,  433 => 60,  426 => 58,  423 => 57,  408 => 50,  405 => 49,  403 => 48,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  374 => 36,  371 => 35,  368 => 34,  366 => 33,  363 => 32,  355 => 27,  350 => 26,  342 => 23,  335 => 21,  332 => 20,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  285 => 3,  278 => 384,  276 => 378,  273 => 377,  271 => 371,  268 => 370,  266 => 363,  263 => 362,  258 => 351,  255 => 350,  250 => 338,  243 => 324,  235 => 308,  233 => 301,  230 => 300,  227 => 298,  225 => 295,  222 => 294,  220 => 287,  217 => 286,  215 => 277,  212 => 276,  210 => 267,  207 => 266,  204 => 264,  199 => 262,  197 => 246,  194 => 245,  186 => 236,  181 => 229,  179 => 221,  174 => 214,  171 => 213,  169 => 207,  166 => 206,  164 => 200,  161 => 199,  159 => 193,  156 => 192,  151 => 185,  146 => 178,  144 => 173,  141 => 172,  139 => 166,  136 => 165,  131 => 157,  124 => 129,  121 => 128,  119 => 114,  116 => 113,  114 => 108,  111 => 107,  104 => 87,  101 => 86,  86 => 46,  79 => 32,  71 => 19,  172 => 107,  162 => 101,  157 => 99,  154 => 186,  150 => 90,  142 => 80,  126 => 144,  118 => 65,  113 => 63,  106 => 101,  96 => 67,  58 => 22,  50 => 18,  37 => 11,  28 => 5,  25 => 4,  90 => 65,  74 => 20,  68 => 22,  61 => 2,  49 => 13,  88 => 31,  70 => 24,  63 => 21,  48 => 14,  45 => 13,  24 => 4,  41 => 16,  34 => 14,  19 => 1,  122 => 60,  109 => 102,  100 => 44,  91 => 56,  82 => 32,  72 => 25,  69 => 13,  67 => 28,  59 => 18,  46 => 15,  38 => 15,  35 => 6,  32 => 5,  29 => 4,  26 => 3,  23 => 3,  20 => 1,  1845 => 460,  1843 => 459,  1841 => 458,  1839 => 457,  1837 => 456,  1835 => 455,  1833 => 454,  1831 => 453,  1824 => 449,  1821 => 448,  1816 => 442,  1810 => 441,  1804 => 439,  1801 => 438,  1798 => 437,  1793 => 434,  1790 => 433,  1785 => 431,  1782 => 430,  1776 => 423,  1773 => 422,  1762 => 413,  1759 => 412,  1752 => 686,  1734 => 671,  1730 => 670,  1720 => 663,  1716 => 662,  1707 => 656,  1703 => 655,  1694 => 649,  1690 => 648,  1681 => 642,  1677 => 641,  1668 => 635,  1664 => 634,  1655 => 628,  1651 => 627,  1642 => 621,  1638 => 620,  1629 => 614,  1625 => 613,  1616 => 607,  1612 => 606,  1603 => 600,  1599 => 599,  1590 => 593,  1586 => 592,  1576 => 585,  1572 => 584,  1563 => 578,  1559 => 577,  1540 => 560,  1538 => 559,  1534 => 557,  1528 => 555,  1526 => 554,  1476 => 507,  1459 => 493,  1454 => 491,  1432 => 472,  1423 => 466,  1416 => 461,  1414 => 448,  1408 => 445,  1405 => 444,  1403 => 437,  1400 => 436,  1397 => 433,  1395 => 430,  1392 => 429,  1390 => 428,  1386 => 426,  1384 => 422,  1381 => 421,  1379 => 412,  1371 => 406,  1367 => 404,  1360 => 399,  1358 => 398,  1337 => 379,  1328 => 374,  1325 => 373,  1315 => 378,  1312 => 373,  1303 => 374,  1300 => 373,  1291 => 374,  1288 => 373,  1279 => 374,  1276 => 373,  1267 => 373,  1264 => 373,  1255 => 374,  1252 => 373,  1243 => 364,  1240 => 363,  1231 => 357,  1228 => 373,  1219 => 374,  1216 => 373,  1207 => 374,  1204 => 373,  1195 => 374,  1192 => 343,  1183 => 374,  1180 => 373,  1171 => 334,  1168 => 333,  1159 => 374,  1156 => 327,  1147 => 374,  1144 => 373,  1135 => 374,  1132 => 373,  1123 => 374,  1120 => 373,  1111 => 316,  1108 => 315,  1099 => 312,  1096 => 311,  1087 => 374,  1084 => 305,  1075 => 303,  1072 => 373,  1063 => 296,  1060 => 295,  1051 => 374,  1048 => 373,  1039 => 374,  1036 => 282,  1027 => 374,  1024 => 373,  1015 => 374,  1012 => 273,  1003 => 374,  1000 => 263,  991 => 374,  988 => 373,  979 => 374,  976 => 373,  967 => 374,  964 => 373,  955 => 374,  952 => 373,  943 => 246,  940 => 373,  931 => 374,  928 => 373,  919 => 233,  916 => 232,  907 => 374,  904 => 373,  895 => 374,  892 => 373,  883 => 374,  880 => 373,  871 => 374,  868 => 373,  859 => 374,  856 => 208,  852 => 325,  848 => 323,  845 => 203,  839 => 299,  836 => 298,  830 => 296,  824 => 194,  821 => 193,  811 => 280,  803 => 302,  801 => 298,  796 => 296,  786 => 288,  784 => 284,  777 => 280,  771 => 276,  768 => 169,  764 => 270,  762 => 269,  759 => 268,  756 => 267,  749 => 161,  746 => 256,  740 => 255,  734 => 252,  728 => 180,  725 => 152,  719 => 175,  704 => 307,  702 => 275,  696 => 271,  694 => 267,  686 => 261,  684 => 256,  680 => 255,  674 => 130,  663 => 243,  656 => 239,  652 => 238,  645 => 119,  641 => 233,  634 => 115,  630 => 228,  624 => 225,  619 => 224,  617 => 223,  611 => 220,  606 => 219,  599 => 215,  595 => 214,  588 => 210,  584 => 209,  578 => 206,  573 => 205,  571 => 204,  548 => 183,  546 => 91,  539 => 175,  535 => 173,  533 => 172,  527 => 168,  524 => 167,  520 => 87,  517 => 146,  514 => 145,  509 => 136,  507 => 135,  504 => 134,  501 => 133,  492 => 76,  485 => 54,  478 => 49,  470 => 54,  463 => 49,  456 => 68,  449 => 49,  442 => 62,  435 => 49,  428 => 59,  421 => 49,  414 => 52,  407 => 49,  400 => 47,  393 => 49,  386 => 54,  379 => 49,  372 => 54,  365 => 49,  358 => 54,  351 => 49,  344 => 24,  337 => 22,  330 => 54,  323 => 49,  316 => 16,  309 => 49,  302 => 54,  295 => 49,  288 => 4,  281 => 385,  274 => 54,  267 => 49,  260 => 360,  253 => 339,  248 => 333,  245 => 332,  240 => 323,  238 => 309,  234 => 9,  231 => 8,  202 => 263,  198 => 690,  196 => 322,  191 => 243,  189 => 237,  184 => 230,  182 => 163,  176 => 220,  167 => 152,  165 => 151,  160 => 100,  158 => 145,  149 => 179,  147 => 133,  129 => 145,  115 => 64,  97 => 34,  94 => 57,  89 => 47,  84 => 41,  80 => 36,  76 => 31,  62 => 63,  60 => 19,  53 => 14,  51 => 8,  42 => 1,  152 => 78,  137 => 65,  134 => 158,  107 => 37,  99 => 68,  93 => 49,  85 => 24,  81 => 40,  77 => 22,  73 => 21,  66 => 12,  64 => 3,  56 => 15,  52 => 14,  43 => 6,  39 => 12,  36 => 3,  30 => 5,);
    }
}
