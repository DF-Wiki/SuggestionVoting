<?php

class SuggestionVotingHooks {
    static function LoadExtensionSchemaUpdates (DatabaseUpdater $updater) {
        $updater->addExtensionTable('sv_suggestions', __DIR__ . '/sql/sv-suggestions.sql');
        $updater->addExtensionTable('sv_votes', __DIR__ . '/sql/sv-votes.sql');
        return true;
    }
}

$wgHooks['LoadExtensionSchemaUpdates'][] = 'SuggestionVotingHooks::LoadExtensionSchemaUpdates';
