<?php
/**
 * htmlspecialcharsの短縮形
 */
function h($string)
{
  return htmlspecialchars($string, ENT_QUOTES);
}
