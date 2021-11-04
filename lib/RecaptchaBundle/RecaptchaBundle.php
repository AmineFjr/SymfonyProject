<?php

namespace Bot\RecaptchaBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class RecaptchaBundle extends Bundle {

    public function build(ContainerBuilder $container)
    {
        parent::build($container); // TODO: Change the autogenerated stub
        $container->addCompilerPass(new RecaptchaCompilerPass());
    }
}