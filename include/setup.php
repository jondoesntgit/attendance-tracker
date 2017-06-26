<?php



$db = new SQLite3($db_file);

$command = <<< EOD
CREATE TABLE users (
	id INTEGER PRIMARY KEY NOT NULL,
	full_name TEXT,
	first_name TEXT,
	last_name TEXT,
	email TEXT,
	role INTEGER DEFAULT 1
);

CREATE TABLE classes (
	id INTEGER PRIMARY KEY NOT NULL,
	name TEXT,
	acronym TEXT,
	begin_date DATE,
	end_date DATE
);

CREATE TABLE events (
	id INTEGER PRIMARY KEY NOT NULL,
	name TEXT,
	date DATE,
	description TEXT,
	type INTEGER
);

CREATE TABLE raw_scans (
	id INTEGER PRIMARY KEY NOT NULL,
	event_id REFERENCES events(id),
	timestamp TIMESTAMP,
	data BLOB
);

CREATE TABLE sgl_scans(
	id INTEGER PRIMARY KEY NOT NULL,
	user_id REFERENCES users(id),
	event_id REFERENCES events(id),
	checkpoint INTEGER,
	has_extra_credit INTEGER,
	timestamp TIMESTAMP,
	is_manual INTEGER,
	is_rejected INTEGER
);

CREATE TABLE eigen_scans(
	id INTEGER PRIMARY KEY NOT NULL,
	user_id REFERENCES users(id),
	event_id REFERENCES events(id),
	timestamp TIMESTAMP,
	is_manual INTEGER,
	is_rejected INTEGER
);

EOD;

$db->exec($command);

$command = file_get_contents(__DIR__ . '/../db/populate.sql');

$db->exec($command);

$db->close()



?>