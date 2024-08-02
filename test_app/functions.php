<?php
require_once('connection.php');

function createData($post)
{
    createTodoData($post['content']);
}
function createTodoData($todoText)
{
    $dbh = connectPdo();
    $sql = 'INSERT INTO todos (content) VALUES ("' . $todoText . '")';
    $dbh->query($sql);
}
function getTodoList()
{
    return getAllRecords();
}