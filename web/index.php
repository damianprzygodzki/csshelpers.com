<?php

require_once __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../src/controllers.php';

use Silex\Provider\TwigServiceProvider;

$app = new Silex\Application();
$app->register(new TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));
$app['debug'] = true;

$app->get('/', function () use ($app){
    $documentation = array(
        'Positioning' => array(
            'Vertical positioning' => '
                If you want to spread elements vertically and gain additional space, use v-spacers class. There are 7
                most used settings for size of margins:
                <classcode>.v-spacer-5</classcode>,
                <classcode>.v-spacer-10</classcode>,
                <classcode>.v-spacer-15</classcode>,
                <classcode>.v-spacer-20</classcode>,
                <classcode>.v-spacer-30</classcode>,
                <classcode>.v-spacer-50</classcode>,
                <classcode>.v-spacer-100</classcode>
                Each of these class gives you top and bottom margins with value in last section of classname in pixels. Here is how it works:
                <csshelpers>
                <class>.v-spacer-5</class> {<br>
                &nbsp; &nbsp;    margin-top: 5px;<br>
                &nbsp; &nbsp;    margin-bottom: 5px; <br>
                    }
                </csshelpers>If you want to set your own space, use <a href="#docs-5">mixins</a>.<br><br>
                For more specified use, there are single side spacers setting top margin:
                <classcode>.t-spacer-5</classcode>,
                <classcode>.t-spacer-10</classcode>,
                <classcode>.t-spacer-15</classcode>,
                <classcode>.t-spacer-20</classcode>,
                <classcode>.t-spacer-30</classcode>,
                <classcode>.t-spacer-50</classcode>,
                <classcode>.t-spacer-100</classcode>,
                and bottom margin:
                <classcode>.b-spacer-5</classcode>,
                <classcode>.b-spacer-10</classcode>,
                <classcode>.b-spacer-15</classcode>,
                <classcode>.b-spacer-20</classcode>,
                <classcode>.b-spacer-30</classcode>,
                <classcode>.b-spacer-50</classcode>,
                <classcode>.b-spacer-100</classcode>.
            ',
            'Horizontal positioning' => '
                With the h-spacers classes you can separate elements horizontally. These classes add left and right margins:
                <classcode>.h-spacer-5</classcode>,
                <classcode>.h-spacer-10</classcode>,
                <classcode>.h-spacer-15</classcode>,
                <classcode>.h-spacer-20</classcode>,
                <classcode>.h-spacer-30</classcode>,
                <classcode>.h-spacer-50</classcode>,
                <classcode>.h-spacer-100</classcode>.
                And definition:
                <csshelpers>
                <class>.h-spacer-5</class> {<br>
                &nbsp; &nbsp;    margin-left: 5px;<br>
                &nbsp; &nbsp;    margin-right: 5px; <br>
                    }
                </csshelpers>For customization, use <a href="#docs-5">mixins</a>.<br><br>
                Of course, there are more horizontal spacers to set only left or right margins. There are classes for left margin:
                <classcode>.l-spacer-5</classcode>,
                <classcode>.l-spacer-10</classcode>,
                <classcode>.l-spacer-15</classcode>,
                <classcode>.l-spacer-20</classcode>,
                <classcode>.l-spacer-30</classcode>,
                <classcode>.l-spacer-50</classcode>,
                <classcode>.l-spacer-100</classcode>,
                and right margin:
                <classcode>.r-spacer-5</classcode>,
                <classcode>.r-spacer-10</classcode>,
                <classcode>.r-spacer-15</classcode>,
                <classcode>.r-spacer-20</classcode>,
                <classcode>.r-spacer-30</classcode>,
                <classcode>.r-spacer-50</classcode>,
                <classcode>.r-spacer-100</classcode>.
            ',
            'Resetting' => "
                    You must be careful using those classes, because they are forcing settings of elements.
                    Mostly while fixing or in post-implementation you have to force some inherited styles
                    in the least offensive way and here you have reset class for margins
                                                                                                                                                                                                                                                                                                                          <classcode>.no-margin</classcode> - it removes all the margins,
                    <classcode>.no-padding</classcode> - removes all the paddings and bunch of classes for single directions:
                    <classcode>.t-spacer-0</classcode>, <classcode>.b-spacer-0</classcode>,
                    <classcode>.l-spacer-0</classcode> and <classcode>.r-spacer-0</classcode>
                    that removing margins.
            ",
            'Full-screen' => '
                Sometimes, in the responsive design it is needed to make element go full-screen. Class <classcode>.full-screen</classcode>
                force element to size of Window Object. If you want to make element responsive to itself content too, class <classcode>.full-screen-min</classcode>
                sets minimal size of Window Object and is able to streching with contents.',
        ),
        'Spacers' => array(
            'Spacer blocks' => '
            If you want increase space between elements, you can insert there an empty block. For this use spacer class. It is block, 100% wide, with height depending on classname.
                <classcode>.spacer-5</classcode>,
                <classcode>.spacer-10</classcode>,
                <classcode>.spacer-15</classcode>,
                <classcode>.spacer-20</classcode>,
                <classcode>.spacer-30</classcode>,
                <classcode>.spacer-50</classcode>,
                <classcode>.spacer-100</classcode>.
            '
        ),
        'Vertical alignment' => array(
            'Container and vertical align settings' => '
                For everyone who miss the vertical-align property in the table design,
                we prepared substitute working the same way. If you want to vertical align any element,
                just define container with <classcode>.v-align-container</classcode> class, and wrapp
                element into
                <classcode>.v-align-top</classcode>,
                <classcode>.v-align-middle</classcode> or
                <classcode>.v-align-bottom</classcode>
                according to Your needs.
                <p class="t-spacer-20">
                Here is an example:
                </p>
                <csshelpers>
                    &lt;div class="<class>v-align-container</class>"> <br>
                    &nbsp; &nbsp; &lt;div class="<class>v-align-middle</class>"> <br>
                    &nbsp; &nbsp;&nbsp; &nbsp;... <br>
                    &nbsp; &nbsp; &lt;/div> <br>
                    &lt;/div>
                </csshelpers>
            '
        ),
        'Utilities' => array(
            'Pointer' => 'Lots of cases requires to use different element as a button or link. Help user to recognize it properly with <classcode>.pointer</classcode> class. It sets pointer style cursor.',
            'Disable cursor' => 'If you want to disable events of some area, that is overlaying something, is transparent or you hiding it, use class
                <classcode>.disable-pointer</classcode>. Here is how it works:
                <csshelpers>
                <class>.disable-cursor</class> {   <br>
                &nbsp; &nbsp;pointer-events: none; <br>
                }
                </csshelpers>
            ',
            'Hiding elements' => '
                For hiding elements, we prepared two different class. If you want hide some element, and remove it from DOM use
                <classcode>.hide-absolute</classcode>. Here is the class definition:<br>
                <csshelpers>
                    <class>.hide-absolute </class> {   <br>
                    &nbsp; &nbsp;display: none;<br>
                    }
                </csshelpers>


                Otherwise you can hide element visually and it still will be taking own place with class
                <classcode>.hide</classcode>.
                <csshelpers>
                    <class>.hide</class> {   <br>
                    &nbsp; &nbsp;visibility: hidden;<br>
                    }
                </csshelpers>
            '
        ),
        'Mixins (SASS required)' => array(
            'Positioning' => '
                For responsively in the full source version of csshelpers library you have vertical and horizontal positioning mixins.
                <csshelpers>
                @mixin <class>v-spacer</class>($margin) {<br>
                &nbsp; &nbsp;  margin-top: $margin;<br>
                &nbsp; &nbsp;  margin-bottom: $margin;<br>
                }
                </csshelpers>
                <csshelpers>
                @mixin <class>h-spacer</class>($margin) {<br>
                &nbsp; &nbsp;  margin-left: $margin;<br>
                &nbsp; &nbsp;  margin-right: $margin;<br>
                }
                </csshelpers>
            ',
            'Spacer blocks' => '
                Next customizable elements are spacers. The only thing you have to do is define your distance. Here is mixin for spacer block.
                <csshelpers>
                @mixin <class>spacer</class>($height) {<br>
                &nbsp; &nbsp;  display: block;<br>
                &nbsp; &nbsp;  height: $height;<br>
                }
                </csshelpers>
            '
        ),
    );

    return $app['twig']->render(
        'index.html.twig',
        array(
            'docs' => $documentation
        )
    );
});

$app->run();