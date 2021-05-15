<?php

use EasyCorp\Bundle\EasyDeployBundle\Deployer\DefaultDeployer;

return new class extends DefaultDeployer
{
    public function configure()
    {
        return $this->getConfigBuilder()
            ->server('user@hostname')
            ->deployDir('/var/www/symfony-demo')
            ->repositoryUrl('git@github.com:symfony/symfony-demo.git')
            ->repositoryBranch('master')
        ;
    }
};