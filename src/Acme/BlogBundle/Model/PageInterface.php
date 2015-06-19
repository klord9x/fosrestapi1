<?php
/**
 * Created by PhpStorm.
 * User: Huan Nguyen
 * Date: 6/16/2015
 * Time: 5:59 PM
 */

namespace Acme\BlogBundle\Model;


interface PageInterface {
    /**
     * Set title
     *
     * @param string $title
     * @return PageInterface
     */
    public function setTitle($title);

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Set body
     *
     * @param string $body
     * @return PageInterface
     */
    public function setBody($body);

    /**
     * Get body
     *
     * @return string
     */
    public function getBody();
}