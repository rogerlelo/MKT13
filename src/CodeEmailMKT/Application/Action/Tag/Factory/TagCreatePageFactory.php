<?php

namespace CodeEmailMKT\Application\Action\Tag\Factory;

use CodeEmailMKT\Application\Form\CustomerForm;
use Zend\Expressive\Router\RouterInterface;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use CodeEmailMKT\Domain\Persistence\CustomerRepositoryInterface;
use CodeEmailMKT\Application\Action\Tag\TagCreatePageAction;

class TagCreatePageFactory
{
    public function __invoke(ContainerInterface $container) :TagCreatePageAction
    {
        $template = $container->get(TemplateRendererInterface::class);
        $repository = $container->get(CustomerRepositoryInterface::class);
        $router = $container->get(RouterInterface::class);
        $form = $container->get(CustomerForm::class);
        return new TagCreatePageAction($repository,$template,$router,$form);
    }
}
