CREATE TABLE IF NOT EXISTS /*_*/sv_suggestions (
    sv_id INTEGER NOT NULL PRIMARY KEY,
    sv_user INTEGER NOT NULL,
    sv_desc TEXT NOT NULL,
    sv_link VARCHAR(1024) NOT NULL
) /*$wgDBTableOptions*/;
