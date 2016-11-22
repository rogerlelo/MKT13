<?php

namespace CodeEmailMKT\Application\Action\Tag\Factory;

use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use CodeEmailMKT\Domain\Persistence\CustomerRepositoryInterface;
use CodeEmailMKT\Application\Action\Tag\TagListPageAction;


class TagListPageFactory
{
    public function __invoke(ContainerInterface $container) :TagListPageAction
    {
        $template = $container->get(TemplateRendererInterface::class);
        $repository = $container->get(CustomerRepositoryInterface::class);
        return new TagListPageAction($repository,$template);
    }
}
