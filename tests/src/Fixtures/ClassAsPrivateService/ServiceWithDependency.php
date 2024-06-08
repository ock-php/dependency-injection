<?php

declare(strict_types=1);

namespace Ock\DependencyInjection\Tests\Fixtures\ClassAsPrivateService;

/**
 * A simple class that will be registered as private service, then forgotten.
 */
class ServiceWithDependency {

  public function __construct(
    public readonly SimpleUsedPrivateService $dependency,
  ) {}

}
