<?php

if (!class_exists(\GlpiPlugin\Singlesignon\ProviderGroup::class, false)) {
   require_once __DIR__ . '/../src/ProviderGroup.php';
}

if (!class_exists('PluginSinglesignonProvider_Group', false)) {
   class PluginSinglesignonProvider_Group extends \GlpiPlugin\Singlesignon\ProviderGroup {
   }
}

