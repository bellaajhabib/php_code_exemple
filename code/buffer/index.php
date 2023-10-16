<?php
ob_start(); // On commence la mise en mémoire tampon
echo "Bonjour <br>"; // Mis dans le tampon
echo "Comment ça ?"; // Mis dans le tampon
$contenu = ob_get_clean();
ob_end_clean();
print_r($contenu);