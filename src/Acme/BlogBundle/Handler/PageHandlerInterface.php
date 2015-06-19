<?php
/**
 * Created by PhpStorm.
 * User: Huan Nguyen
 * Date: 6/16/2015
 * Time: 6:12 PM
 */

namespace Acme\BlogBundle\Handler;
use Acme\BlogBundle\Model\PageInterface;


interface PageHandlerInterface {

    /**
     * Get a Page given the identifier
     *
     * @api
     *
     * @param mixed $id
     *
     * @return PageInterface
     */
    public function get($id);
}