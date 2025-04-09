<?php

require __DIR__ . '/../../../vendor/autoload.php';

function removeParentUrl()
{
    $jsonFile = __DIR__ . '/../data/livewire-docs.json';
    $docs = json_decode(file_get_contents($jsonFile), true);

    $modified = false;
    foreach ($docs as &$doc) {
        if (isset($doc['parent_url'])) {
            unset($doc['parent_url']);
            $modified = true;
        }
    }

    if ($modified) {
        file_put_contents($jsonFile, json_encode($docs, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        echo "Successfully removed parent_url from all entries.\n";
    } else {
        echo "No parent_url entries found to remove.\n";
    }
}

removeParentUrl();
