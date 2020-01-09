<?php

namespace Grav\Plugin;

use Grav\Common\Plugin;
use Grav\Common\Page\Collection;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class LoremIpsumPlugin
 * @package Grav\Plugin
 */
class LoremIpsumPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0],
           
        ];
    }

    
    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

    
        // Enable the main event we are interested in
        $this->enable([
            
            'onTwigPageVariables' => ['onTwigPageVariables', 0],
           
        ]);
    }


    public function onTwigPageVariables()
    {

                $twig = $this->grav['twig'];
                $text1 = $this->grav['config']->get('plugins.lorem-ipsum.lorem1');
                $text2 = $this->grav['config']->get('plugins.lorem-ipsum.lorem2');
                $text3 = $this->grav['config']->get('plugins.lorem-ipsum.lorem3');
                $text4 = $this->grav['config']->get('plugins.lorem-ipsum.lorem4');
                $text5 = $this->grav['config']->get('plugins.lorem-ipsum.lorem5');

        $loremIpsum = array($text1, $text2, $text3, $text4, $text5);
                


                $twig->twig_vars['lorem'] = $loremIpsum;



    }

    /**
     * Do some work for this event, full details of events can be found
     * on the learn site: http://learn.getgrav.org/plugins/event-hooks
     *
     * @param Event $e
     */
  
}
