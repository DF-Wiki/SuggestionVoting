CREATE TABLE IF NOT EXISTS /*_*/sv_votes (
    sv_user INTEGER NOT NULL PRIMARY KEY,
    sv_votes VARCHAR(512) NOT NULL
) /*$wgDBTableOptions*/;
