RewriteEngine On

RewriteRule ^(meme_generator)/([0-9]+)$   index.php?action=$1&id=$2    [L]