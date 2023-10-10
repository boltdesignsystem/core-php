<?php

namespace Bolt\TwigExtensions;

use BasaltInc\TwigTools;
use Bolt;
use Twig\Extension\AbstractExtension;
use Twig\Extension\ExtensionInterface;

class BoltExtras extends AbstractExtension implements ExtensionInterface {

  public function getFunctions() {
    return [
      TwigTools\TwigFunctions::console_log(),
      Bolt\TwigFunctions::deep_merge(),
      Bolt\TwigFunctions::color_contrast(),
      Bolt\TwigFunctions::getSpacingScaleSequence(),
      Bolt\TwigFunctions::github_url(),
    ];
  }

  public function getFilters() {
    return [
      Bolt\TwigFilters::markdown(),
      Bolt\TwigFilters::rgb2hex(),
      Bolt\TwigFilters::text_contrast(),
    ];
  }

  public function getTokenParsers() {
    return [];
  }
}
