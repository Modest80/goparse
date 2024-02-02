<?php

require 'vendor/autoload.php';

function convertMarkdownToHtml($markdownFilePath)
{
    // Читаем содержимое файла с Markdown
    $markdownContent = file_get_contents($markdownFilePath);

    // Создаем экземпляр Parsedown
    $parsedown = new Parsedown();

    // Преобразуем Markdown в HTML
    $htmlContent = $parsedown->text($markdownContent);

    // Возвращаем HTML
    return $htmlContent;
}

// Укажите путь к вашему файлу с Markdown
$markdownFilePath = 'README.md';

// Преобразуем Markdown в HTML
$htmlContent = convertMarkdownToHtml($markdownFilePath);

// Выводим HTML
echo $htmlContent;

?>
