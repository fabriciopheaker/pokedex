<?php

try {
  require_once __DIR__ . '/app/view/index.php';
} catch (Exception $exception) {
  echo "getMessage($exception)";
}
