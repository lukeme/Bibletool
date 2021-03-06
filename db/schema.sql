-- Bibletool schema

DROP TABLE IF EXISTS openbible_cross_reference;
DROP TABLE IF EXISTS cache_versions;
DROP TABLE IF EXISTS subject_verses;
DROP TABLE IF EXISTS subjects;
DROP TABLE IF EXISTS glossary_verses;
DROP TABLE IF EXISTS glossary_notes;
DROP TABLE IF EXISTS glossary;
DROP TABLE IF EXISTS openbible_places;
DROP TABLE IF EXISTS verses;
DROP TABLE IF EXISTS chapters;
DROP TABLE IF EXISTS books;
DROP TABLE IF EXISTS languages;

CREATE TABLE languages (
	id          INTEGER AUTO_INCREMENT NOT NULL,
	name        VARCHAR(10) UNIQUE NOT NULL,
	description VARCHAR(100) NOT NULL,
	PRIMARY KEY(id)
) ENGINE=InnoDb CHARACTER SET=utf8;

CREATE TABLE books (
	id          INTEGER AUTO_INCREMENT NOT NULL,
	language_id INTEGER NOT NULL,
	book        INTEGER NOT NULL,
	short_name  VARCHAR(30) NOT NULL,
	long_name   VARCHAR(30) NOT NULL,
	PRIMARY KEY(id),
	UNIQUE(language_id, book),
	FOREIGN KEY(language_id) REFERENCES languages(id)
		ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDb CHARACTER SET=utf8;

CREATE TABLE chapters (
	id          INTEGER AUTO_INCREMENT NOT NULL,
	language_id INTEGER NOT NULL,
	book        INTEGER NOT NULL,
	chapter     INTEGER NOT NULL,
	title       VARCHAR(20) NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(language_id) REFERENCES languages(id)
		ON DELETE CASCADE ON UPDATE CASCADE,
	KEY(language_id, book, chapter)
) ENGINE=InnoDb CHARACTER SET=utf8;

CREATE TABLE verses (
	id          INTEGER AUTO_INCREMENT NOT NULL,
	language_id INTEGER NOT NULL,
	book        INTEGER NOT NULL,
	chapter     INTEGER NOT NULL,
	verse       INTEGER NOT NULL,
	subtitle    VARCHAR(80),
	body        VARCHAR(700) NOT NULL,
	PRIMARY KEY(id),
	UNIQUE(language_id, book, chapter, verse),
	KEY(book, chapter, verse),
	FOREIGN KEY(language_id) REFERENCES languages(id)
		ON DELETE CASCADE ON UPDATE CASCADE,
	FOREIGN KEY(language_id, book) REFERENCES books(language_id, book)
		ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDb CHARACTER SET=utf8;

CREATE TABLE openbible_places (
	id          INTEGER AUTO_INCREMENT NOT NULL,
	name        VARCHAR(20) NOT NULL,
	lat         VARCHAR(10) NOT NULL,
	lon         VARCHAR(10) NOT NULL,
	notes       VARCHAR(120),
	PRIMARY KEY(id),
	KEY(name)
) ENGINE=InnoDb CHARACTER SET=utf8;

CREATE TABLE glossary (
	id          INTEGER AUTO_INCREMENT NOT NULL,
	strokes     INTEGER NOT NULL,
	letter      CHAR(1),
	chinese     VARCHAR(80),
	english     VARCHAR(80),
	kind        ENUM('place', 'person', 'other') DEFAULT 'other',
	definition  VARCHAR(700),
	openbible_places_id INTEGER,
	PRIMARY KEY(id),
	KEY(strokes),
	KEY(letter),
	FOREIGN KEY(openbible_places_id) REFERENCES openbible_places(id)
		ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDb CHARACTER SET=utf8;

CREATE TABLE glossary_notes (
	id          INTEGER AUTO_INCREMENT NOT NULL,
	glossary_id INTEGER NOT NULL,
	notes       VARCHAR(700) NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(glossary_id) REFERENCES glossary(id)
		ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDb CHARACTER SET=utf8;

CREATE TABLE glossary_verses (
	id          INTEGER AUTO_INCREMENT NOT NULL,
	glossary_id INTEGER NOT NULL,
	book        INTEGER NOT NULL,
	chapter     INTEGER NOT NULL,
	start_verse INTEGER NOT NULL,
	end_verse   INTEGER NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(glossary_id) REFERENCES glossary(id)
		ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDb CHARACTER SET=utf8;

CREATE TABLE subjects (
	id          INTEGER AUTO_INCREMENT NOT NULL,
	parent_id   INTEGER,
	name        VARCHAR(40) NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(parent_id) REFERENCES subjects(id)
		ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDb CHARACTER SET=utf8;

CREATE TABLE subject_verses (
	id          INTEGER AUTO_INCREMENT NOT NULL,
	subject_id  INTEGER NOT NULL,
	book        INTEGER NOT NULL,
	chapter     INTEGER NOT NULL,
	start_verse INTEGER NOT NULL,
	end_verse   INTEGER NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY(subject_id) REFERENCES subjects(id)
		ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDb CHARACTER SET=utf8;

CREATE TABLE cache_versions (
	id          INTEGER AUTO_INCREMENT NOT NULL,
	entity      VARCHAR(50) NOT NULL,
	ts          INTEGER NOT NULL,
	PRIMARY KEY(id),
	UNIQUE(entity)
) ENGINE=InnoDb CHARACTER SET=utf8;

CREATE TABLE openbible_cross_reference (
	id              INTEGER AUTO_INCREMENT NOT NULL,
	book            INTEGER NOT NULL,
	chapter         INTEGER NOT NULL,
	verse           INTEGER NOT NULL,   
	ref_book        INTEGER NOT NULL,
	ref_chapter     INTEGER NOT NULL,
	ref_start_verse INTEGER NOT NULL,
	ref_end_verse   INTEGER NOT NULL,
	PRIMARY KEY(id)
) ENGINE=InnoDb CHARACTER SET=utf8;

