<?php

$mgd = MidgardConnection::get_instance();

if ($mgd->is_connected() == false) {
    $config = new MidgardConfig();
    $config->read_file('heroku', true);

    if ($mgd->open_config($config) == false) {
        throw new Exception($mgd->get_error_string());
    }
}

MidgardStorage::create_base_storage();
MidgardStorage::create_class_storage("midgard_snippetdir");

$s = new midgard_snippetdir();
$s->create();

echo "Created new object, ID: " . $s->id . "\n";

?>
