<?php

namespace Bolt\TwigExtensions;

use BasaltInc\TwigTools;
use Bolt;
use Twig\Extension\AbstractExtension;
use Twig\Extension\ExtensionInterface;

// Twig extensions for better Drupal / UI Patterns module compatibility
class BoltCoreCompat extends AbstractExtension implements ExtensionInterface {

  public function getFunctions() {
    return [
      Bolt\TwigFunctions::create_attribute(),
      Bolt\TwigFunctions::pattern_template(),
      Bolt\TwigFunctions::link(),
    ];
  }

  public function getFilters() {
    return [
      Bolt\TwigFilters::without(),
      Bolt\TwigFilters::t(),
    ];
  }

  public function getTokenParsers() {
    return [];
  }
}
