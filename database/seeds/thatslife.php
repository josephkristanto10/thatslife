<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.8.3
 */

/**
 * Database `thatslife`
 */

/* `thatslife`.`admin` */
$admin = array(
  array('id' => '1','username' => 'admin','password' => 'admin','remember_token' => NULL,'created_at' => NULL,'updated_at' => NULL)
);

/* `thatslife`.`comments` */
$comments = array(
  array('id' => '1','commentable_type' => 'App\\Models\\Story','commentable_id' => '1','comment' => 'This is a comment from a user.','is_approved' => '0','user_id' => NULL,'created_at' => '2022-01-04 01:27:02','updated_at' => '2022-01-04 01:27:02'),
  array('id' => '2','commentable_type' => 'App\\Models\\Story','commentable_id' => '1','comment' => 'This is a comment from a user.','is_approved' => '1','user_id' => NULL,'created_at' => '2022-01-04 01:27:40','updated_at' => '2022-01-04 01:27:40'),
  array('id' => '3','commentable_type' => 'App\\Models\\Story','commentable_id' => '2','comment' => 'This is a comment from a user.','is_approved' => '1','user_id' => NULL,'created_at' => '2022-01-04 01:29:15','updated_at' => '2022-01-04 01:29:15')
);

/* `thatslife`.`failed_jobs` */
$failed_jobs = array(
);

/* `thatslife`.`migrations` */
$migrations = array(
  array('id' => '1','migration' => '2014_10_12_000000_create_users_table','batch' => '1'),
  array('id' => '2','migration' => '2014_10_12_100000_create_password_resets_table','batch' => '1'),
  array('id' => '3','migration' => '2019_08_19_000000_create_failed_jobs_table','batch' => '1'),
  array('id' => '4','migration' => '2021_12_18_123750_story_migration','batch' => '1'),
  array('id' => '5','migration' => '2021_12_18_123932_admin_migration','batch' => '1'),
  array('id' => '6','migration' => '2021_12_30_142226_detailstory_migration','batch' => '1'),
  array('id' => '7','migration' => '2022_01_04_012111_create_comments_table','batch' => '1')
);

/* `thatslife`.`password_resets` */
$password_resets = array(
);

/* `thatslife`.`story` */
$story = array(
  array('id' => '1','title' => 'inijudulku','image' => 'inigambarku','caption' => 'mycap','country' => 'Indonesia','city' => 'Surabaya','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley ','quotes' => 'myquotes','remember_token' => NULL,'created_at' => '2021-12-30 09:00:00','updated_at' => '2021-12-30 09:00:00'),
  array('id' => '2','title' => 'inijudulku2','image' => 'inigambarku2','caption' => 'mycap','country' => 'Indonesia','city' => 'Sumba','description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley ','quotes' => 'myquotes','remember_token' => NULL,'created_at' => '2021-12-30 09:00:00','updated_at' => '2021-12-30 09:00:00')
);

/* `thatslife`.`users` */
$users = array(
);
