<?php
return array (
  'items' => 
  array (
    'createPost' => 
    array (
      'type' => 2,
      'description' => 'Cоздание записи',
    ),
    'viewPost' => 
    array (
      'type' => 2,
      'description' => 'Просмотр записи',
    ),
    'updatePost' => 
    array (
      'type' => 2,
      'description' => 'Редактирование записи',
    ),
    'deletePost' => 
    array (
      'type' => 2,
      'description' => 'Удаление записи',
    ),
    'createComment' => 
    array (
      'type' => 2,
      'description' => 'Cоздание комментария',
    ),
    'viewComment' => 
    array (
      'type' => 2,
      'description' => 'Просмотр комментария',
    ),
    'updateComment' => 
    array (
      'type' => 2,
      'description' => 'Редактирование комментария',
    ),
    'deleteComment' => 
    array (
      'type' => 2,
      'description' => 'Удаление комментария',
    ),
    'updateUser' => 
    array (
      'type' => 2,
      'description' => 'Редактирование пользователя',
    ),
    'deleteUser' => 
    array (
      'type' => 2,
      'description' => 'Удаление пользователя',
    ),
    'updateOwnPost' => 
    array (
      'type' => 2,
      'description' => 'Редактирование своей записи',
      'ruleName' => 'author',
    ),
    'deleteOwnPost' => 
    array (
      'type' => 2,
      'description' => 'Удаление своей записи',
      'ruleName' => 'author',
    ),
    'updateOwnComment' => 
    array (
      'type' => 2,
      'description' => 'Редактирование своего комментария',
      'ruleName' => 'author',
    ),
    'deleteOwnComment' => 
    array (
      'type' => 2,
      'description' => 'Удаление своего комментария',
      'ruleName' => 'author',
    ),
    'guest' => 
    array (
      'type' => 1,
      'description' => 'Гость',
      'children' => 
      array (
        0 => 'viewPost',
        1 => 'viewComment',
      ),
    ),
    0 => 
    array (
      'type' => 1,
      'description' => 'Пользователь',
      'ruleName' => 'notGuestRule',
      'children' => 
      array (
        0 => 'guest',
        1 => 'createPost',
        2 => 'updateOwnPost',
        3 => 'deleteOwnPost',
        4 => 'createComment',
        5 => 'updateOwnComment',
        6 => 'deleteOwnComment',
      ),
      'assignments' => 
      array (
        2 => 
        array (
          'roleName' => 0,
        ),
      ),
    ),
    3 => 
    array (
      'type' => 1,
      'description' => 'Модератор',
      'children' => 
      array (
        0 => 0,
        1 => 'updatePost',
        2 => 'deletePost',
        3 => 'updateComment',
        4 => 'deleteComment',
      ),
    ),
    1 => 
    array (
      'type' => 1,
      'description' => 'Администратор',
      'children' => 
      array (
        0 => 3,
      ),
    ),
    2 => 
    array (
      'type' => 1,
      'description' => 'Супер-администратор',
      'children' => 
      array (
        0 => 1,
      ),
      'assignments' => 
      array (
        1 => 
        array (
          'roleName' => 2,
        ),
      ),
    ),
  ),
  'rules' => 
  array (
    'notGuestRule' => 'O:52:"common\\modules\\users\\modules\\rbac\\rules\\NotGuestRule":3:{s:4:"name";s:12:"notGuestRule";s:9:"createdAt";N;s:9:"updatedAt";N;}',
    'author' => 'O:50:"common\\modules\\users\\modules\\rbac\\rules\\AuthorRule":3:{s:4:"name";s:6:"author";s:9:"createdAt";N;s:9:"updatedAt";N;}',
  ),
);
