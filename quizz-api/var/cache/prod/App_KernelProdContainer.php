<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLcyjh1O\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLcyjh1O/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerLcyjh1O.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerLcyjh1O\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerLcyjh1O\App_KernelProdContainer([
    'container.build_hash' => 'Lcyjh1O',
    'container.build_id' => '218b2505',
    'container.build_time' => 1620379457,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLcyjh1O');
