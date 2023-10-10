# Bolt PHP Core

This PHP package is for the [Bolt Design System](https://boltdesignsystem.com). 

This package gets deployed as [a git repo `bolt-design-system/core-php`](https://gitlab.com/pegadigital/bolt/core-php).

# Categories of Twig Extension

## BoltCore
These are the set of custom Twig extensions globally used within the Bolt Design System + automatically wired up to other systems (ex. within Drupal via the bolt_connect module).

## BoltCoreCompat
These are additional Twig extensions for Twig functions / filters used within the Bolt Design System's components that are specifically for cross-platform compatibility. For example, all of these extensions should already exist in Drupal enviroments by default with the exception of the `pattern_template` Twig function (which ships with the UI Patterns module).

## BoltExtras
These are extra Twig extensions used primarily for internal testing within the Bolt Design System and are used to help build and maintain the documentation site and demos.

