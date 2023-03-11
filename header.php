<?php

/**
 * Theme Name: Cherki Hamza wordpress theme starter (ch_wp_starter)
 * Description: This is The Cherki Hamza wordpress theme starter: 
 * Plugin URI: https://hamzacherki.com/
 * Author: Cherki 
 * Website: https://www.hamzacherki.com/
 * Version: 1.0
 * Author URI: https://hamzacherki.com/
 *
 * Text Domain: hamzacherki
 * 
 * GNU General Public License.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();  ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()  ?>
</head>

<body>
    <div class="container"><!--  start of #Container -->

        <?php /* wp_body_open() */ ?>
        <header>
            <?php get_template_part('template-parts/header/menu') ?>
        </header>