<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWsZ1rBC\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWsZ1rBC/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWsZ1rBC.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWsZ1rBC\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWsZ1rBC\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'WsZ1rBC',
    'container.build_id' => 'f3d05438',
    'container.build_time' => 1564241471,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWsZ1rBC');
