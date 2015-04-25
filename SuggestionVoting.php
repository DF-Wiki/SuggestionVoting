<?php
$wgExtensionCredits['suggestionvoting'][] = array(
    'path' => __FILE__,
    'name' => 'SuggestionVoting',
    'author' => 'Lethosor',
    'url' => 'https://github.com/DF-Wiki/SuggestionVoting',
    'descriptionmsg' => 'suggestionvoting-desc',
    'version' => '0.0',
);
$wgExtensionMessagesFiles['SuggestionVoting'] = __DIR__ . '/SuggestionVoting.i18n.php';
$wgExtensionMessagesFiles['SuggestionVotingAlias'] = __DIR__ . '/SuggestionVoting.alias.php';
$wgAutoloadClasses['SpecialSuggestionVoting'] = __DIR__ . '/SuggestionVoting.special.php';
$wgSpecialPages['SuggestionVoting'] = 'SpecialSuggestionVoting';
require_once('SuggestionVoting.hooks.php');
